@extends('layouts.app', ['class' => 'off-canvas-sidebar', 'activePage' => 'home', 'title' => __('MVA Fund Customer Satisfaction System')])

@section('content')
    <div class="container" style="height: auto; ">
        <div class="row justify-content-center">
            <div class="col-lg-8col-md-9">
                <h1 class="text-white text-center" style="text-transform:uppercase">
                    <i class="material-icons">looks_two</i> {{ __(' Rate your experience for Ticket# ') }}{{ $id}}</h1>
            </div>

        </div>
        <br>

        <div class="container" style="height: auto; background-color:rgba(113, 255, 123, 0.6);   border-radius: 25px;">
            <br>
            <br>
            <br>
            <br>
            <div class="row">
                <div class="col-md-3 text-center">
                    <a href="{{ route('landing') }}" class="btn btn-info "><img src="{{ asset('material') }}/img/bad.png" alt="Responsive image"
                        style="width:70px;height:70px; " class="img-thumbnail">
                        <h4 class="text-white text-center">{{ __('bad') }}</h4></a>
                </div>
            
                <div class="col-md-3 text-center">
                    <a href="{{ route('landing') }}" class="btn btn-info "><img src="{{ asset('material') }}/img/okay.png" alt="Responsive image"
                        style="width:70px;height:70px; " class="img-thumbnail">
                        <h4 class="text-white text-center">{{ __('okay') }}</h4></a>
                </div>
       
                <div class="col-md-3 text-center">
                    <a href="{{ route('landing') }}" class="btn btn-info "><img src="{{ asset('material') }}/img/good.png" alt="Responsive image"
                        style="width:70px;height:70px; " class="img-thumbnail">
                        <h4 class="text-white text-center">{{ __('good') }}</h4></a>
                </div>
                <div class="col-md-3 text-center">
                    <a href="{{ route('landing') }}" class="btn btn-info "><img src="{{ asset('material') }}/img/great.png" alt="Responsive image"
                        style="width:70px;height:70px; " class="img-thumbnail">
                        <h4 class="text-white text-center">{{ __('great') }}</h4></a>
                </div>
            </div>
            <br>
            <br>
            <br>
            <br>
        </div>
    </div>
@endsection
