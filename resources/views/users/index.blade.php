@extends('layouts.app', ['activePage' => 'users', 'titlePage' => __('Users')])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-info">
                            <h4 class="card-title ">Users</h4>
                            <p class="card-category">Manage your users here</p>
                            <a href="{{ route('users.create') }}" class="btn btn-primary btn-sm float-right">Add new user</a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead class=" text-primary">
                                        <tr>
                                            <th scope="col" width="1%">#</th>
                                            <th scope="col" width="15%">Name</th>
                                            <th scope="col">Email</th>
                                            <th scope="col" width="10%">Username</th>
                                            <th scope="col" width="10%">Roles</th>
                                            <th scope="col" width="1%" colspan="3"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($users as $user)
                                            <tr>
                                                <th scope="row">{{ $user->id }}</th>
                                                <td>{{ $user->name }}</td>
                                                <td>{{ $user->email }}</td>
                                                <td>{{ $user->username }}</td>
                                                <td>
                                                    @foreach ($user->roles as $role)
                                                        <span class="badge bg-primary">{{ $role->name }}</span>
                                                    @endforeach
                                                </td>
                                                <td><a href="{{ route('users.show', $user->id) }}"
                                                        class="btn btn-warning btn-sm">Show</a>
                                                </td>
                                                <td><a href="{{ route('users.edit', $user->id) }}"
                                                        class="btn btn-info btn-sm">Edit</a></td>
                                                <td>
                                                    {!! Form::open(['method' => 'DELETE', 'route' => ['users.destroy', $user->id], 'style' => 'display:inline']) !!}
                                                    {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-sm']) !!}
                                                    {!! Form::close() !!}
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div class="d-flex">
                                {!! $users->links() !!}
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
