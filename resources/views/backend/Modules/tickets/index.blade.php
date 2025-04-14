@extends('backend.Layouts.layout')
@section('title', 'Ticketovač')

@section('style')
    <style>
        .container select.border, .container input, .container textarea{
            border: 1px solid #ced4da !important;
            font-size: 14px;
        }
        label{
            font-size: 14px;
        }
        .card{
            font-size: 14px;
            max-height: 120px ;
            overflow-y: hidden;
        }
        .card h5{
            font-size: 16px;
        }
        h6{
            font-size: 16px;
        }
        form button{
            font-size: 16px !important;
        }

    </style>
@endsection

@section('body')
    <div class="container">
        <div class="row header-row mb-2">
            <div class="col-12 d-flex justify-content-between px-0">
                <h1 class="header-text text-uppercase">Tiketovač</h1>
                <div>
                    <a class="btn btn-primary" href="{{ route('ticket.settings.index') }}">Nastavenia</a>
                    <a class="btn btn-primary" href="{{ route('ticket.create') }}">Vytvoriť ticket</a>
                </div>

            </div>
{{--            @if ($errors->any())--}}
{{--                <div class="alert alert-danger" id="alert">--}}
{{--                    <p class="p-0 m-0">{{ $errors->first() }}</p>--}}
{{--                </div>--}}
{{--            @endif--}}
{{--            @if (session('success'))--}}
{{--                <div class="alert alert-success" id="alert">--}}
{{--                    <p class="p-0 m-0">{{ session('success') }}</p>--}}
{{--                </div>--}}
{{--            @endif--}}
        </div>
    </div>

    <div class="container">
        @include('backend.Modules.tickets.modules.filter-row')
    </div>


    <div class="container mt-3 ">
        <div class="row content py-4 px-2">
            <div class="col-12 row">
                @foreach($tickets as $ticket)
                    <div class="col-md-3 px-1">
                        @include('backend.Modules.tickets.modules.cards')
                    </div>
                @endforeach
            </div>

            <div class="col-12 px-0">
                <div id="tickets-container" class="row px-2"></div>
                <div id="offcanvas-container" ></div>
            </div>

        </div>
    </div>

    <!-- Kontajnery pre karty a offcanvas formuláre -->
    <div id="tickets-container" class="row"></div>
    <div id="offcanvas-container"></div>




@endsection
@section('script')

    <script>
        var statuses = {!! json_encode($statuses) !!};
        var clients = {!! json_encode($clients) !!};
        var employees = {!! json_encode($employees) !!};
        var csrfToken = '{{ csrf_token() }}';
    </script>

    <script>
        function loadTickets() {
            var searchQuery = $('#searchbar').val();
            var domain = $('#domain').val();
            var status = $('#status').val();
            var employee = $('#employee').val();

            $.ajax({
                url: '{{ route("tickets.ajax") }}',
                type: 'GET',
                dataType: 'json',
                data: {
                    search: searchQuery,
                    domain: domain,
                    status: status,
                    employee: employee
                },
                success: function(tickets) {
                    var cardsHtml = '';
                    var offcanvasHtml = '';
                    if (tickets.length === 0) {
                        cardsHtml = '<p class="mb-0">Žiadne tickety</p>';
                    } else {

                        var groupedTickets = {};
                        tickets.forEach(function(ticket) {
                            var clientId = ticket.client.id;
                            if (!groupedTickets[clientId]) {
                                groupedTickets[clientId] = {
                                    name: ticket.client.name,
                                    tickets: []
                                };
                            }
                            groupedTickets[clientId].tickets.push(ticket);
                        });

                        for (var clientId in groupedTickets) {
                            cardsHtml += '<div class="col-md-3 px-2">';
                            cardsHtml += '<h6 class="mb-1 ps-0 text-uppercase">' + groupedTickets[clientId].name + '</h6>';
                            groupedTickets[clientId].tickets.forEach(function(ticket) {

                                cardsHtml += '<div class="card mb-2" data-bs-toggle="offcanvas" data-bs-target="#offcanvas-ticket-' + ticket.id + '">';
                                cardsHtml += '  <div class="card-header d-flex justify-content-between" style="background-color: '+ticket.status.color +'">#' + ticket.id + ' <p class="mb-0">' + ticket.status.name + '</p></div>';
                                cardsHtml += '  <div class="card-body py-2"><span class="fw-bold">' + ticket.name + ':</span> ' + ticket.description + '</div>';
                                cardsHtml += '</div>';

                                var statusOptions = '';
                                statuses.forEach(function(item) {
                                    statusOptions += '<option value="' + item.id + '"' + (ticket.status_id == item.id ? ' selected' : '') + '>' + item.name + '</option>';
                                });

                                var clientOptions = '';
                                clients.forEach(function(item) {
                                    clientOptions += '<option value="' + item.id + '"' + (ticket.client_id == item.id ? ' selected' : '') + '>' + item.name + '</option>';
                                });

                                var employeeOptions = '<option value="">Vyberte zamestnanca</option>';
                                employees.forEach(function(item) {
                                    employeeOptions += '<option value="' + item.id + '">' + item.name + '</option>';
                                });

                                // Generovanie offcanvas formulára pre daný ticket
                                offcanvasHtml += '<form method="POST" action="/admin/ticket/' + ticket.id + '" class="offcanvas offcanvas-bottom h-75 px-0" data-bs-scroll="true" tabindex="-1" id="offcanvas-ticket-' + ticket.id + '">';
                                offcanvasHtml += '  <input type="hidden" name="_token" value="' + csrfToken + '">';
                                offcanvasHtml += '  <input type="hidden" name="_method" value="put">';
                                offcanvasHtml += '  <div class="offcanvas-header d-flex justify-content-between">';
                                offcanvasHtml += '    <h5 class="offcanvas-title d-flex gap-2" id="offcanvasWithBothOptionsLabel">#' + ticket.id;
                                offcanvasHtml += '      <input type="text" name="name" id="name" class="form-control" value="' + ticket.name + '" required>';
                                offcanvasHtml += '    </h5>';
                                offcanvasHtml += '    <select class="form-control border" name="status_id" id="status_id">';
                                offcanvasHtml +=           statusOptions;
                                offcanvasHtml += '    </select>';
                                offcanvasHtml += '    <button type="button" class="btn-close text-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>';
                                offcanvasHtml += '  </div>';
                                offcanvasHtml += '  <div class="offcanvas-body">';
                                offcanvasHtml += '    <div class="row">';
                                offcanvasHtml += '      <div class="col-9">';
                                offcanvasHtml += '        <div class="row">';
                                offcanvasHtml += '          <div class="col-6">';
                                offcanvasHtml += '            <h6 class="mb-1">Klient:</h6>';
                                offcanvasHtml += '            <select class="form-control border" name="client_id" id="client_id">';
                                offcanvasHtml +=              clientOptions;
                                offcanvasHtml += '            </select>';
                                offcanvasHtml += '          </div>';
                                offcanvasHtml += '          <div class="col-6">';
                                offcanvasHtml += '            <h6 class="mb-1">Určené pre:</h6>';
                                offcanvasHtml += '            <select class="form-control border" name="employee_id" id="employee_id">';
                                offcanvasHtml +=              employeeOptions;
                                offcanvasHtml += '            </select>';
                                offcanvasHtml += '          </div>';
                                offcanvasHtml += '        </div>';
                                offcanvasHtml += '        <h6 class="mb-1 mt-4">Popis:</h6>';
                                offcanvasHtml += '        <textarea name="description" id="description" class="form-control" rows="15">' + ticket.description + '</textarea>';
                                offcanvasHtml += '        <h6 class="mt-4 mb-1">Cesta k problému:</h6>';
                                offcanvasHtml += '        <input type="text" name="url" id="url" class="form-control" value="' + ticket.url + '">';
                                // Odstránené tlačidlo pre submit
                                // offcanvasHtml += '        <button type="submit" class="form-control mt-3 w-25">Upraviť</button>';
                                offcanvasHtml += '      </div>';
                                offcanvasHtml += '      <div class="col-7">';
                                offcanvasHtml += '        <img src="" alt="">';
                                offcanvasHtml += '      </div>';
                                offcanvasHtml += '    </div>';
                                offcanvasHtml += '  </div>';
                                offcanvasHtml += '</form>';
                            });
                            cardsHtml += '</div>';
                        }
                    }
                    $('#tickets-container').html(cardsHtml);
                    $('#offcanvas-container').html(offcanvasHtml);
                },
                error: function(xhr, status, error) {
                    console.log('Chyba: ' + error);
                }
            });
        }

        $(document).ready(function() {
            loadTickets();
            $('#searchbar').on('input', loadTickets);
            $('#domain, #status, #employee').on('change', loadTickets);
        });
    </script>

    <!-- Autosave script: Pri každej zmene vo formulári sa po 2 sekundách po nečinnosti odošle AJAX požiadavka -->
    <script>
        // Objekt pre ukladanie timeoutov pre jednotlivé formuláre
        var autosaveTimers = {};

        // Event handler aplikovaný na dynamicky vložené offcanvas formuláre
        $(document).on('input change', '.offcanvas input, .offcanvas textarea, .offcanvas select', function() {
            var form = $(this).closest('form');
            var formId = form.attr('id');

            if (autosaveTimers[formId]) {
                clearTimeout(autosaveTimers[formId]);
            }

            autosaveTimers[formId] = setTimeout(function() {
                $.ajax({
                    url: form.attr('action'),
                    type: 'POST',  // Používame POST, pretože _method je nastavené na put vo formulári
                    data: form.serialize(),
                    success: function(response) {
                        console.log('Ticket ' + formId + ' bol autosaved.');
                        // Tu môžeš pridať vizuálnu notifikáciu, napr. malý "Uložené" text
                    },
                    error: function(xhr, status, error) {
                        console.error('Autosave chyba pre ' + formId + ': ' + error);
                    }
                });
            }, 2000); // 2000 ms = 2 sekundy
        });
    </script>
@endsection
