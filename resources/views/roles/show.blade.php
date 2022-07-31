@extends('layouts.app', ['activePage' => 'roles', 'titlePage' => __('Role')])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">


                    <div class="card ">
                        <div class="card-header card-header-info">
                            <h4 class="card-title">{{ ucfirst($role->name) }} Role</h4>
                            <p class="card-category">{{ __('Assigned permissions') }}</p>
                        </div>
                        <div class="card-body ">
                            <div class="row">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead class=" text-primary">
                                            <tr>
                                                <th scope="col" width="20%">Name</th>
                                                <th scope="col" width="1%">Guard</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($rolePermissions as $permission)
                                                <tr>
                                                    <td>{{ $permission->name }}</td>
                                                    <td>{{ $permission->guard_name }}</td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer ml-auto mr-auto">
                            <a href="{{ route('roles.edit', $role->id) }}" class="btn btn-info">Edit</a>
                            <a href="{{ route('roles.index') }}" class="btn btn-default">Back</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    </div>
@endsection