@extends('layouts.app', ['activePage' => 'dashboard', 'titlePage' => __('Dashboard')])

@section('content')
    <link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-success">
                            <h4 class="card-title ">Tickets</h4>
                            <p class="card-category">Queue</p>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="table">
                                    <thead class=" text-primary">
                                        <th scope="col" width="10%">
                                            Ticket#
                                        </th>
                                        <th scope="col" width="10%">
                                            Type
                                        </th>
                                        <th scope="col" width="10%">
                                            ID#
                                        </th>
                                        <th scope="col" width="10%">
                                            Name
                                        </th>
                                        <th scope="col" width="10%">
                                            Status
                                        </th>
                                        <th scope="col" width="10%">
                                            In Queue
                                        </th>
                                        <th scope="col" width="10%">
                                            Agent
                                        </th>
                                    </thead>
                                </table>
                                <script type="text/javascript">
                                    $(function() {
                                        $('#table').DataTable({
                                            processing: true,
                                            serverSide: true,
                                            ajax: '{{ route('tickets.display') }}',
                                            columns: [{
                                                    data: 'id',
                                                    name: 'claim.id'
                                                },
                                                {
                                                    data: 'type',
                                                    name: 'claim.type'
                                                },

                                                {
                                                    data: 'client',
                                                    name: 'claim.client'
                                                },

                                                {
                                                    data: 'name',
                                                    name: 'client.name'
                                                },
                                                {
                                                    data: 'callStatus',
                                                    name: 'claim.callStatus'
                                                },
                                                {
                                                    data: 'waitM',
                                                    name: 'waitM'
                                                },
                                                {
                                                    data: 'agent',
                                                    name: 'claim.agent'
                                                }
                                            ]
                                        });
                                    });
                                </script>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
