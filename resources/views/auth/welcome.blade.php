@extends('layouts.app', ['class' => 'off-canvas-sidebar', 'activePage' => 'home', 'title' => __('MVA Fund Customer Satisfaction System')])

@section('content')
    <div class="container" style="height: auto; ">
        <div class="row justify-content-center">
            <div class="col-lg-7 col-md-8">
                <h1 class="text-white text-center">{{ __('Welcome to MVA Fund ') }}</h1>
            </div>

        </div>
        <br>
        @if(!empty($successMsg))
        <div class="alert alert-success"> {{ $successMsg }}</div>
      @endif
        <div class="container" style="height: auto; background-color:rgba(113, 255, 123, 0.6);  border-radius: 25px;">
            <br>
            <br>
            <br>
            <br>
            <div class="row">
                <div class="col-md-4 text-center">
                    <a href="{{ route('claim') }}" class="btn btn-info">
                        <img src="{{ asset('material') }}/img/claim.png" alt="Responsive image"
                            style="width:120px;height:120px; " class="img-thumbnail">
                        <h3 class="text-white text-center">{{ __('Client') }}</h3>
                    </a>
                </div>
                <div class="col-md-4 text-center">
                    <a href="{{ route('vistor') }}" class="btn btn-info">
                        <img src="{{ asset('material') }}/img/id-card.png" alt="Responsive image"
                            style="width:120px;height:120px;" class="img-thumbnail">
                        <h3 class="text-white text-center">{{ __('Vistor') }}</h3>
                    </a>
                </div>
                <div class="col-md-4 text-center">
                    <a href="{{ route('feedback') }}" class="btn btn-info">
                        <img src="{{ asset('material') }}/img/review.png" alt="Responsive image"
                            style="width:120px;height:120px;" class="img-thumbnail">
                        <h3 class="text-white text-center">{{ __('Feedback') }}</h3>
                    </a>
                </div>
            </div>
            <br>
            <br>
            <br>
            <br>

        </div>
    </div>
@endsection
