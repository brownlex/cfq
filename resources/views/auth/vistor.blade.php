@extends('layouts.app2', ['class' => 'off-canvas-sidebar', 'activePage' => 'home', 'title' => __('MVA Fund Customer Satisfaction System')])

@section('content')
    <div class="container" style="height: auto; ">
        <div class="row justify-content-center">
            <div class="col-lg-7 col-md-8">
                <h1 class="text-white text-center " style="color: #fff !important;">{{ __('Vistor') }}</h1>
            </div>

        </div>
        <div class="container" style="height: auto; background-color:rgb(255, 255, 255);  border-radius: 25px; align: top;">
            <br>
            <div class="row">
                <label class="col-sm-3 col-form-label text-right" style="color: rgb(0, 0, 0) !important;">{{ __('ID Number:') }}</label>
                <div class="col-sm-3 text-left">
                    <input type="text" class="use-keyboard-input" style="width: 250px;">
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

    </div>
@endsection