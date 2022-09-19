<?php

namespace App\Http\Controllers;

use App\Events\ClaimEvent;
use Illuminate\Http\Request;
use App\Models\ClaimEnq;
use Carbon\Carbon;
use charlieuki\ReceiptPrinter\ReceiptPrinter;
use yajra\Datatables\Datatables;
use App\Models\Client;


class ClaimEnqController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('tickets.index');
    }


    public function queue()
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
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }


    /*$dtOttawa = Carbon::createMidnightDate(2000, 1, 1, 'America/Toronto');
$dtVancouver = Carbon::createMidnightDate(2000, 1, 1, 'America/Vancouver');
echo $dtOttawa->diffInHours($dtVancouver);
echo Carbon::parse('06:01:23')->floatDiffInMinutes('06:02:34');*/

    public function claim($id)
    {
        $claimEnq = new ClaimEnq();
        $claimEnq->type = 'claim';
        $claimEnq->client = $id;
        $claimEnq->callStatus = 'new';
        $mytime = Carbon::now();
        $claimEnq->inQueue = $mytime->toDateTimeString();
        $claimEnq->save();

        // Set params
        $mid = '123123456';
        $store_name = 'YOURMART';
        $store_address = 'Mart Address';
        $store_phone = '1234567890';
        $store_email = 'yourmart@email.com';
        $store_website = 'yourmart.com';
        $tax_percentage = 10;
        $transaction_id = 'TX123ABC456';
        $currency = 'Rp';
        $image_path = 'logo.png';

        $printer = new ReceiptPrinter;
        $printer->init(
            config('receiptprinter.connector_type'),
            config('receiptprinter.connector_descriptor')
        );

        // Set store info
        $printer->setStore($mid, $store_name, $store_address, $store_phone, $store_email, $store_website);
        $printer->printReceipt();
        event(new ClaimEvent($claimEnq));
        return view('auth.welcome')->with('successMsg',$claimEnq->id);
    }


    public function med($id)
    {
        $claimEnq = new ClaimEnq();
        $claimEnq->type = 'med';
        $claimEnq->client = $id;
        $claimEnq->callStatus = 'new';
        $mytime = Carbon::now();
        $claimEnq->inQueue = $mytime->toDateTimeString();
        $claimEnq->save();
        return view('auth.welcome')->with('successMsg',$claimEnq->id);
    }

    public function enq($id)
    {
        $claimEnq = new ClaimEnq();
        $claimEnq->type = 'enq';
        $claimEnq->client = $id;
        $claimEnq->callStatus = 'new';
        $mytime = Carbon::now();
        $claimEnq->inQueue = $mytime->toDateTimeString();
        $claimEnq->save();
        return view('auth.welcome')->with('successMsg',$claimEnq->id);
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
