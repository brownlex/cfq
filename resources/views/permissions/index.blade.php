@extends('layouts.app', ['activePage' => 'users', 'titlePage' => __('Permissions')])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-info">
                            <h4 class="card-title ">Permissions</h4>
                            <p class="card-category">Manage your permissions here</p>
                            <a href="{{ route('permissions.create') }}" class="btn btn-primary btn-sm float-right">Add
                                permissions</a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead class=" text-primary">
                                        <tr>

                                            <th scope="col" width="15%">Name</th>
                                            <th scope="col">Guard</th>
                                            <th scope="col" width="1%" colspan="3"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($permissions as $permission)
                                            <tr>

                                                <td>{{ $permission->name }}</td>
                                                <td>{{ $permission->guard_name }}</td>
                                                <td><a href="{{ route('permissions.edit', $permission->id) }}"
                                                        class="btn btn-info btn-sm">Edit</a></td>
                                                <td>
                                                    {!! Form::open([
                                                        'method' => 'DELETE',
                                                        'route' => ['permissions.destroy', $permission->id],
                                                        'style' => 'display:inline',
                                                    ]) !!}
                                                    {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-sm']) !!}
                                                    {!! Form::close() !!}
                                                </td>
                                                
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
