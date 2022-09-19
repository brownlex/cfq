<?php

namespace App\Http\Controllers;

use App\Models\ClaimEnq;
use App\Models\Client;
use yajra\Datatables\Datatables;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {

        return view('dashboard');
    }
   
    
      public function display()
    {
/*
        ->join('client', 'claim.client','=','client.idNumber')
        ->whereNotIn('type', ['closed','closed-no-show'])*/

        return Datatables::of(Client::query()
        ->join('claim', 'client.idNumber','=','claim.client')
        ->whereNotNull('claim.id')
        ->whereNotIn('claim.callStatus', ['closed','closed-no-show'])
        )
           /* ->addColumn('action', function ($row) {
                $batch = $row->batch_id;
                $batchtyp  =  substr($batch, 0, 2);
                $batchtyp2 = BatchV::where('username', 'LIKE', auth()->user()->username)->value('type');
                $user = auth()->user()->roles->value('id');
                $btn = '<a href="' . route('batch.show', $batch) . '"  class="btn btn-warning btn-sm">Show</a>';
                if (is_null($row->in) && is_null($row->out) && $user == 3 && $batchtyp ===  $batchtyp2) {
                    $btn = $btn . '<a href="' . route('batch.checkIn', ['batch' => $batch]) . '"  class="btn btn-primary btn-sm">In</a>';
                } elseif (!is_null($row->in) && is_null($row->out) && !is_null($row->veri_by)  && $user == 3 && $batchtyp ==  $batchtyp2 && $row->in_by == auth()->user()->username) {
                    $btn = $btn . '<a href="' . route('lines.checkOut', ['batch' => $batch]) . '"  class="btn btn-primary btn-sm">Out</a>';
                }

                return $btn;
                // '<a href="#edit-'.$row->id.'" class="btn btn-xs btn-primary"><i class="glyphicon glyphicon-edit"></i> Edit</a>';
            })*/
            ->addColumn('waitM', function ($row) {
               //->diffInMinutes
                       $mytime = Carbon::now();
                return $mytime->diffInMinutes($row->inQueue).' '."minutes";
            })
           ->make(true);
    }
   
}
