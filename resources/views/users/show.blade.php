@extends('layouts.app', ['activePage' => 'users', 'titlePage' => __('User')])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-info">
                            <h4 class="card-title ">Show user</h4>
                            
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <label class="col-sm-2 col-form-label">{{ __('Name') }}</label>
                                <div class="col-sm-7">
                                    <div>
                                        {{ $user->name }}
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-2 col-form-label">{{ __('Email') }}</label>
                                <div class="col-sm-7">

                                    <div>
                                        {{ $user->email }}
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-2 col-form-label">{{ __('Username') }}</label>
                                <div class="col-sm-7">

                                    <div>
                                        {{ $user->username }}
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="card-footer ml-auto mr-auto">
                            <a href="{{ route('users.edit', $user->id) }}" class="btn btn-info">Edit</a>
                            <a href="{{ route('users.index') }}" class="btn btn-default">Back</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    </div>
@endsection
