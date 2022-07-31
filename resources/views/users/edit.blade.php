@extends('layouts.app', ['activePage' => 'users', 'titlePage' => __('User')])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <form method="post" action="{{ route('users.update', $user->id) }}" autocomplete="off"
                        class="form-horizontal">
                        @csrf
                        @method('patch')

                        <div class="card ">
                            <div class="card-header card-header-info">
                                <h4 class="card-title">{{ __('Update user') }}</h4>
                                <p class="card-category">{{ __('Information') }}</p>
                            </div>
                            <div class="card-body ">

                                <div class="row">
                                    <label class="col-sm-2 col-form-label">{{ __('Name') }}</label>
                                    <div class="col-sm-7">
                                        <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                            <input class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"
                                                name="name" id="input-name" type="text"
                                                placeholder="{{ __('Name') }}" value="{{ $user->name }}"
                                                required="true" aria-required="true" />
                                            @if ($errors->has('name'))
                                                <span id="name-error" class="error text-danger"
                                                    for="input-name">{{ $errors->first('name') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-sm-2 col-form-label">{{ __('Email') }}</label>
                                    <div class="col-sm-7">
                                        <div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                                            <input class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                                                name="email" id="input-email" type="email"
                                                placeholder="{{ __('Email') }}" value="{{ $user->email }}" required />
                                            @if ($errors->has('email'))
                                                <span id="email-error" class="error text-danger"
                                                    for="input-email">{{ $errors->first('email') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-sm-2 col-form-label">{{ __('Username') }}</label>
                                    <div class="col-sm-7">
                                        <div class="form-group{{ $errors->has('username') ? ' has-danger' : '' }}">
                                            <input class="form-control{{ $errors->has('username') ? ' is-invalid' : '' }}"
                                                name="username" id="input-username" type="text"
                                                placeholder="{{ __('Username') }}" value="{{ $user->username }}"
                                                required />
                                            @if ($errors->has('username'))
                                                <span id="username-error" class="error text-danger"
                                                    for="input-username">{{ $errors->first('username') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-sm-2 col-form-label">{{ __('Role') }}</label>
                                    <div class="col-sm-7">
                                        <div class="form-group{{ $errors->has('role') ? ' has-danger' : '' }}">
                                            <select class="form-control" name="role" required>
                                                <option value="">Select role</option>
                                                @foreach ($roles as $role)
                                                    <option value="{{ $role->id }}"
                                                        {{ in_array($role->name, $userRole) ? 'selected' : '' }}>
                                                        {{ $role->name }}</option>
                                                @endforeach
                                            </select>
                                            @if ($errors->has('role'))
                                                <span id="role-error" class="error text-danger"
                                                    for="input-role">{{ $errors->first('role') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer ml-auto mr-auto">
                                <button type="submit" class="btn btn-primary">{{ __('Update User') }}</button>
                                <a href="{{ route('users.index') }}" class="btn btn-default">Cancel</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
