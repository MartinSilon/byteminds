<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\TicketStatus;
use App\Models\Ticket;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\TicketPhoto;
use App\Models\TicketClient;

class TicketController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tickets = Ticket::with('status')->where('status_id', 2)->get();
        $statuses = TicketStatus::select('id','name')->get();
        $clients = TicketClient::select('id','name')->get();
        $employees = Employee::select('id','name')->get();
        return view('backend.Modules.tickets.index', compact( 'tickets', 'statuses', 'clients', 'employees'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $tickets = Ticket::with('status')->get();
        $statuses = TicketStatus::select('id','name')->get();
        $clients = TicketClient::select('id','name')->get();
        $employees = Employee::select('id','name')->get();
        return view('backend.Modules.tickets.create', compact( 'tickets', 'statuses', 'clients', 'employees'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $messages = [
            'name.required'      => 'Pole názov je povinné.',
            'name.string'        => 'Pole názov musí byť reťazec.',
            'name.max'           => 'Pole názov nemôže byť dlhšie ako 255 znakov.',
            'client_id.required' => 'Pole doména je povinné.',
            'status_id.required' => 'Pole status je povinné.',
        ];

        $validatedData = $request->validate([
            'name'        => 'required|string|max:255',
            'url'         => 'nullable',
            'client_id'   => 'required',
            'status_id'   => 'required',
            'employee_id' => 'nullable',
            'description' => 'nullable|string',
        ], $messages);

        $validatedData['id'] = $this->generateUniqueId();
        $ticket = Ticket::create($validatedData);

        if ($request->hasFile('photo_path')) {
            $request->validate([
                'photo_path' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            ]);

            $file = $request->file('photo_path');
            $path = $file->store('photos', 'public');

            TicketPhoto::create([
                'photo_path' => $path,
                'ticket_id'  => $ticket->id,
            ]);
        }

        return redirect()->route('ticket.index')->with('success', 'Ticket bol úspešne vytvorený.');
    }

    private function generateUniqueId()
    {
        do {
            $uniqueId = random_int(1000, 9999);
        } while (Ticket::where('id', $uniqueId)->exists());

        return $uniqueId;
    }

    public function update(Request $request, Ticket $ticket)
    {
        $validatedData = $request->validate([
            'name'         => 'required|string|max:255',
            'status_id'    => 'required|exists:ticket_status,id',
            'client_id'    => 'required|exists:ticket_client,id',
            'employee_id'  => 'nullable',
            'description'  => 'nullable|string',
            'url'          => 'nullable',
        ]);

        $ticket->update($validatedData);

        return redirect()->back()->with('success', 'Ticket bol úspešne aktualizovaný.');
    }


    public function indexTicketSettings(){
        $statuses = TicketStatus::select('id','name', 'color')->get();
        $clients = TicketClient::select('id','name')->get();
        return view('backend.Modules.tickets.settings', compact(  'statuses', 'clients'));

    }

    public function storeStatus(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'color' => 'required|string|max:255',
        ]);
        TicketStatus::create($validatedData);

        return redirect()->route('ticket.settings.index')->with('success', 'Status bol úspešne vytvorený.');
    }

    public function destroyStatus(TicketStatus $ticketStatus)
    {
        $ticketStatus->delete();

        return redirect()->route('ticket.settings.index')
            ->with('success', 'Status bol úspešne vymazaný.');
    }

    public function storeClient(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
        ]);
        TicketClient::create($validatedData);

        return redirect()->route('ticket.settings.index')->with('success', 'Klient bol úspešne vytvorený.');
    }
    public function updateClient(Request $request, TicketClient $ticketClient)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
        ]);
        $ticketClient->update($validatedData);

        return redirect()->route('ticket.settings.index')->with('success', 'Klient bol úspešne upravený.');
    }

    public function destroyClient(TicketClient $ticketClient)
    {
        $ticketClient->delete();
        return redirect()->route('ticket.index')->with('success', 'Status bol úspešne vymazaný.');

    }


    public function getTickets(Request $request)
    {
        $query = Ticket::with('status', 'client');

        // Aplikácia filtrov
        if ($request->filled('search')) {
            $query->where(function($q) use ($request) {
                $q->where('id', $request->search)
                    ->orWhere('name', 'like', "%{$request->search}%");
            });
        }

        if ($request->filled('domain')) {
            $query->where('client_id', $request->domain);
        }

        if ($request->filled('status')) {
            $query->where('status_id', $request->status);
        }

        if ($request->filled('employee')) {
            $query->where('employee_id', $request->employee);
        }

        // Ak žiadny filter nie je zadaný, predvolený filter - status_id = 1
        if (
            !$request->filled('search') &&
            !$request->filled('domain') &&
            !$request->filled('status') &&
            !$request->filled('employee')
        ) {
            $query->where('status_id', 1);
        } else {
            // V ostatných prípadoch napríklad vylúčime tickety so statusom 2
            $query->where('status_id', '!=', 2);
        }

        // Zoradenie: Tickety so statusom 6 budú vždy prvé
        $query->orderByRaw('status_id = 6 DESC')
            ->orderBy('id', 'asc'); // prípadne ďalšie sekundárne zoradenie

        $tickets = $query->get();

        return response()->json($tickets);
    }




}
