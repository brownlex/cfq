@extends('layouts.app', ['activePage' => 'users', 'titlePage' => __('Permissions')])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
              <div class="col-md-12">
                <form method="post" action="{{ route('permissions.store') }}" autocomplete="off" class="form-horizontal">
                  @csrf
                  
                  <div class="card ">
                    <div class="card-header card-header-info">
                      <h4 class="card-title">{{ __('Add new permission') }}</h4>
                      <p class="card-category">{{ __('Information') }}</p>
                    </div>
                    <div class="card-body ">
                   
                      <div class="row">
                        <label class="col-sm-2 col-form-label">{{ __('Name') }}</label>
                        <div class="col-sm-7">
                          <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                            <input class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" id="input-name" type="text" placeholder="{{ __('Name') }}" value="{{ old('name') }}"  required="true" aria-required="true"/>
                            @if ($errors->has('name'))
                              <span id="name-error" class="error text-danger" for="input-name">{{ $errors->first('name') }}</span>
                            @endif
                          </div>
                        </div>
                      </div>
                    
                    </div>
                    <div class="card-footer ml-auto mr-auto">
                      <button type="submit" class="btn btn-primary">{{ __('Save permission') }}</button>
                      <a href="{{ route('permissions.index') }}" class="btn btn-default">{{ __('Back') }}</a>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
    </div>
    </div>
@endsection
