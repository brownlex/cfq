@extends('layouts.app2', ['class' => 'off-canvas-sidebar', 'activePage' => 'home', 'title' => __('MVA Fund Customer Satisfaction System')])

@section('content')
    <div class="container" style="height: auto; ">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-9">
                <h1 class="text-white text-center " style="color: #fff !important;"><i
                    class="material-icons">looks_one</i>{{ __(' Enter Your Ticket Number:') }}</h1>
            </div>

        </div>
        <form method="post" action="{{ route('feedback.create.step.one') }}" autocomplete="off" class="form-horizontal">
            @csrf
            <div class="container"
                style="height: auto; background-color:rgb(255, 255, 255);  border-radius: 25px; align: top;">
                <br>
                <div class="row">
                    <label class="col-sm-3 col-form-label text-right"
                        style="color: rgb(0, 0, 0) !important;"><h3>{{ __('Ticket Number:') }}</h3></label>
                    <div class="col-sm-3 text-left">
                    <h3><input type="number" class="use-keyboard-input{{ $errors->has('id') ? ' is-invalid' : '' }}"
                            style="width: 255px; border: 1px solid #d2d2d2; border-top: hidden; border-right: hidden; border-left: hidden"
                            name="id" id="id" required></h3>
                        @if ($errors->has('id'))
                            <span id="id-error" class="error text-danger" for="id">{{ $errors->first('id') }}</span>
                        @endif
                    </div>
                    <div class="col-sm-3 text-center">
                        <button type="submit" class="btn btn-success"> <i class="material-icons">east</i></button>
                    </div>
                    <div class="col-sm-3 text-center">
                        <a href="{{ route('landing') }}" class="btn btn-default"><i class="material-icons">undo</i></a>
                    </div>
                </div>
                <br>
            </div>
        </form>
    </div>
@endsection
