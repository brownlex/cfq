<?php

namespace App\Http\Livewire;

//use Livewire\Component;
use Illuminate\View\Component;
use Illuminate\Support\Facades\DB;


class Claim extends Component
{
    public function render()
    {

        $claim = DB::table('claim')
            ->where('type', 'like', 'claim')
            ->where('callStatus', 'like', 'new')->get();
        $med = DB::table('claim')
            ->where('type', 'like', 'med')
            ->where('callStatus', 'like', 'new')->get();
        $enq = DB::table('claim')
            ->where('type', 'like', 'enq')
            ->where('callStatus', 'like', 'new')->get();

        return view('livewire.claim', ['claim' => $claim, 'med' => $med, 'enq' => $enq]);
    }
}
