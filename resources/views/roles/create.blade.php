@extends('layouts.app', ['activePage' => 'roles', 'titlePage' => __('Role')])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <form method="post" action="{{ route('roles.store')}}" autocomplete="off" class="form-horizontal">
                        @csrf

                        <div class="card ">
                            <div class="card-header card-header-info">
                                <h4 class="card-title">{{ __('Add new role') }}</h4>
                                <p class="card-category">{{ __('Add new role and assign permissions.') }}</p>
                            </div>
                            <div class="card-body ">

                                <div class="row">
                                    <label class="col-sm-2 col-form-label">{{ __('Name') }}</label>
                                    <div class="col-sm-7">
                                        <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                            <input class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"
                                                name="name" id="input-name" type="text"
                                                placeholder="{{ __('Name') }}" value="{{ old('name') }}"
                                                required="true" aria-required="true" />
                                            @if ($errors->has('name'))
                                                <span id="name-error" class="error text-danger"
                                                    for="input-name">{{ $errors->first('name') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <label class="col-sm-2 col-form-label">{{ __('Assign Permissions') }}</label>
                                    <div class="col-sm-7">
                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead class=" text-primary">
                                                    <tr>
                                                        <th scope="col" width="1%"><input type="checkbox"
                                                                name="all_permission"></th>
                                                        <th scope="col" width="20%">Name</th>
                                                        <th scope="col" width="1%">Guard</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($permissions as $permission)
                                                        <tr>
                                                            <td>
                                                                <input type="checkbox"
                                                                    name="permission[{{ $permission->name }}]"
                                                                    value="{{ $permission->name }}" class='permission'>
                                                            </td>
                                                            <td>{{ $permission->name }}</td>
                                                            <td>{{ $permission->guard_name }}</td>

                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer ml-auto mr-auto">
                                <button type="submit" class="btn btn-primary">{{ __('Save User') }}</button>
                                <a href="{{ route('users.index') }}" class="btn btn-default">{{ __('Back') }}</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
@section('scripts')
    <script type="text/javascript">
        $(document).ready(function() {
            $('[name="all_permission"]').on('click', function() {

                if ($(this).is(':checked')) {
                    $.each($('.permission'), function() {
                        $(this).prop('checked', true);
                    });
                } else {
                    $.each($('.permission'), function() {
                        $(this).prop('checked', false);
                    });
                }

            });
        });
    </script>
@endsection
