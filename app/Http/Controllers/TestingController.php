<?php
namespace App\Http\Controllers;

use App\Models\TestPlan;
use App\Models\TestCase;
use App\Models\TestRun;
use App\Models\Employee;
use Illuminate\Http\Request;

class TestingController extends Controller
{
    public function index(Request $request)
    {
        $query = TestPlan::query();

        if ($request->has('employee') && $request->employee != '') {
            $query->whereHas('testCases', function ($q) use ($request) {
                $q->where('employee_id', $request->employee);
            });
        }

        if ($request->has('search') && $request->search != '') {
            $query->where('name', 'like', '%' . $request->search . '%');
        }

        $testPlans = $query->orderBy('updated_at', 'desc')->get();
        $employees = Employee::all();

        return view('backend.Modules.testing.index', compact('testPlans', 'employees'));
    }



    // Formulár na vytvorenie testovacieho prípadu
    public function createTestCase($planId)
    {
        $plan = TestPlan::findOrFail($planId);
        $employees = Employee::all(); // Pre výber testera

        return view('backend.Modules.testing.create-case', compact('plan', 'employees'));
    }

    // Uloženie nového test casu
    public function storeTestCase(Request $request)
    {
        $request->validate([
            'plan_id' => 'required|exists:test_plans,id',
            'employee_id' => 'required|exists:employers,id',
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'preconditions' => 'nullable|string',
            'steps' => 'nullable|string',
            'expected' => 'nullable|string',
            'priority' => 'required|in:low,medium,high',
            'module' => 'nullable|string',
        ]);

        TestCase::create($request->all());

        return redirect()->route('testing.index')->with('success', 'Test case bol vytvorený.');
    }

    // Detail jedného test casu + test runs
    public function showTestCase($id)
    {
        $testCase = TestCase::with('testRuns.employee')->findOrFail($id);
        return view('backend.Modules.testing.show-case', compact('testCase'));
    }

    // Uloženie test runu pre konkrétny test case
    public function storeTestRun(Request $request)
    {
        $request->validate([
            'case_id' => 'required|exists:test_cases,id',
            'employee_id' => 'required|exists:employers,id',
            'status' => 'required|in:pass,fail,blocked,skipped',
            'executed_at' => 'nullable|date',
            'notes' => 'nullable|string',
            'attachments' => 'nullable|array'
        ]);

        $data = $request->all();
        $data['attachments'] = json_encode($request->attachments ?? []);

        TestRun::create($data);

        return back()->with('success', 'Test run bol zaznamenaný.');
    }

    public function createTestPlan()
    {
        return view('backend.Modules.testing.create-plan');
    }

    public function storeTestPlan(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        TestPlan::create([
            'name' => $request->name,
            'description' => $request->description,
        ]);

        return redirect()->route('testing.index')->with('success', 'Testovací plán bol vytvorený.');
    }

}
