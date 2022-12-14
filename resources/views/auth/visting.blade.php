@extends('layouts.app', ['class' => 'off-canvas-sidebar', 'activePage' => 'home', 'title' => __('MVA Fund Customer Satisfaction System')])

@section('content')
    <div class="container" style="height: auto; ">
        <div class="row justify-content-center">
            <div class="col-lg-8col-md-9">
                <h1 class="text-white text-center" style="text-transform:uppercase">{{_('Hi ')}}{{ $vistor->name}}
                    {{ __(', Who Are You Visiting ? ') }}</h1>
            </div>

        </div>
        <br>
        <div class="container" style="height: auto; background-color:rgba(113, 255, 123, 0.6);   border-radius: 25px;">

            <br>
            <br>
            <div class="row">
                <div class="col-md-3 text-center">
                    <a href="{{ route('visit.create.ceo.ticket') }}" class="btn btn-info "><h4>CEO's OFFICE<br><i
                            class="material-icons">post_add</i></h4></a>
                </div>
        
                <div class="col-md-3 text-center">
                    <a href="{{ route('visit.create.hrb.ticket') }}" class="btn btn-info "><h4>HR & STRATEGY<br><i
                        class="material-icons">post_add</i></h4></a>
                </div>
                
                <div class="col-md-3 text-center">
                    <a href="{{ route('visit.create.cor.ticket') }}" class="btn btn-info "><h4>CORPORATE AFFAIRS<br><i
                        class="material-icons">post_add</i></h4></a>
                </div>

                <div class="col-md-3 text-center">
                    <a href="{{ route('visit.create.claim.ticket') }}" class="btn btn-info "><h4>CLAIMS<br><i
                        class="material-icons">post_add</i></h4></a>
                </div>
            </div>
            <br>
            <br>
            <div class="row">
                <div class="col-md-3 text-center">
                    <a href="{{ route('visit.create.call.ticket') }}" class="btn btn-info "><h4>CALL CENTRE<br><i
                            class="material-icons">post_add</i></h4></a>
                </div>
        
                <div class="col-md-3 text-center">
                    <a href="{{ route('visit.create.pmu.ticket') }}" class="btn btn-info "><h4>PROCUREMENT<br><i
                        class="material-icons">post_add</i></h4></a>
                </div>
                
                <div class="col-md-3 text-center">
                    <a href="{{ route('visit.create.it.ticket') }}" class="btn btn-info "><h4>INFORMATION TECH<br><i
                        class="material-icons">post_add</i></h4></a>
                </div>

                <div class="col-md-3 text-center">
                    <a href="{{ route('visit.create.fin.ticket') }}" class="btn btn-info "><h4>FINANCE<br><i
                        class="material-icons">post_add</i></h4></a>
                </div>
            </div>
            <br>
            <br>
            <div class="row">
                <div class="col-md-3 text-center">
                    <a href="{{ route('visit.create.caf.ticket') }}" class="btn btn-info "><h4>Cafeteria<br><i
                            class="material-icons">post_add</i></h4></a>
                </div>
        
                <div class="col-md-3 text-center">
                    <a href="{{ route('visit.create.leg.ticket') }}" class="btn btn-info "><h4>LEGAL<br><i
                        class="material-icons">post_add</i></h4></a>
                </div>
                
                <div class="col-md-3 text-center">
                    <a href="{{ route('visit.create.med.ticket') }}" class="btn btn-info "><h4>MEDICAL PROVIDER<br><i
                        class="material-icons">post_add</i></h4></a>
                </div>

                <div class="col-md-3 text-center">
                    <a href="{{ route('visit.create.dr.ticket') }}" class="btn btn-info "><h4>DR Mara<br><i
                        class="material-icons">post_add</i></h4></a>
                </div>
            </div>
            <br>
            <br>
            
        </div>
    </div>
@endsection
