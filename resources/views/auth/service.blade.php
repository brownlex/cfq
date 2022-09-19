@extends('layouts.app', ['class' => 'off-canvas-sidebar', 'activePage' => 'home', 'title' => __('MVA Fund Customer Satisfaction System')])

@section('content')
    <div class="container" style="height: auto; ">
        <div class="row justify-content-center">
            <div class="col-lg-8col-md-9">
                <h1 class="text-white text-center" style="text-transform:uppercase">{{ __('HI ') }}{{ $client->name }}
                    {{ __('Please Select Service') }}</h1>
            </div>

        </div>
        <br>

        <div class="container" style="height: auto; background-color:rgba(113, 255, 123, 0.6);   border-radius: 25px;">
            <br>
            <br>
            <br>
            <br>
            <div class="row">
                <div class="col-md-4 text-center">
                    <a href="{{ route('claim.create.claim.ticket', $client->idNumber) }}" class="btn btn-info "><h3>Submit Claim<br><i
                            class="material-icons">post_add</i></h3></a>
                </div>

                <div class="col-md-4 text-center">
                    <a href="{{ route('claim.create.med.ticket', $client->idNumber) }}" class="btn btn-info"><h3>Medical Provider<br><i
                            class="material-icons">medical_services</i></h3></a>
                </div>

                <div class="col-md-4 text-center">
                    <a href="{{ route('claim.create.enq.ticket', $client->idNumber) }}" class="btn btn-info"><h3>Enquiry  ?<br><i
                            class="material-icons">psychology_alt</i></h3></a>
                </div>
            </div>
            <br>
            <br>
            <br>
            <br>
        </div>
    </div>
@endsection
