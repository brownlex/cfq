<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Client;
use App\Models\ClaimEnq;
use App\Transformers\ClaimTransformer;

class LandingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('auth.claim');
    }

    public function  queue()
    {
        // return view('auth.table_list');

        $claim = DB::table('claim')
            ->where('type', 'like', 'claim')
            ->where('callStatus', 'like', 'new')->get();
        $med = DB::table('claim')
            ->where('type', 'like', 'med')
            ->where('callStatus', 'like', 'new')->get();
        $enq = DB::table('claim')
            ->where('type', 'like', 'enq')
            ->where('callStatus', 'like', 'new')->get();

        //return fractal($activities, new ClaimTransformer())->respond();

        return view('auth.table_list', ['claim' => $claim, 'med' => $med, 'enq' => $enq]);

        //return ClaimEnq::all(['id', 'type']);
    }

    public function  queueE()
    {
        //return view('auth.table_list');

        return ClaimEnq::all(['id', 'type']);
    }
    public function landing()
    {
        return view('auth.welcome');
    }

    public function feedback()
    {
        return view('auth.feedback');
    }

    public function vistor()
    {
        return view('auth.vistor');
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

    // claim.create.step.one

    public function createStepOne(Request $request)
    {
        $validatedData = $request->validate([
            'idNumber' => 'required'
        ], [

            'idNumber.required' => 'ID Number is required'
        ]);

        $recordExsist = DB::table('client')
            ->where('idNumber', '=', $request->get('idNumber'))
            ->first();
        if ($recordExsist) {
            $idNumber = $request->get('idNumber');
            $request->session()->put('idNumber', $idNumber);
            return redirect()->route('client.create.step.three');
        } else {
            $client = new Client();
            $client->fill($validatedData);
            $request->session()->put('client', $client);
            return redirect()->route('client.create.step.two');
        }
    }

    public function createStepOnev(Request $request)
    {
        $validatedData = $request->validate([
            'idNumber' => 'required'
        ], [

            'idNumber.required' => 'ID Number is required'
        ]);

        $recordExsist = DB::table('client')
            ->where('idNumber', '=', $request->get('idNumber'))
            ->first();
        if ($recordExsist) {
            $idNumber = $request->get('idNumber');
            $request->session()->put('idNumber', $idNumber);
            return redirect()->route('vistor.create.step.three');
        } else {
            $vistor = new Client();
            $vistor->fill($validatedData);
            $request->session()->put('vistor', $vistor);
            return redirect()->route('vistor.create.step.two');
        }
    }

    public function createStepOnef(Request $request)
    {
        $validatedData = $request->validate([
            'id' => 'required|exists:claim,id'
        ], [

            'id.required' => 'Ticket Number is required',
            'id.exsits' => 'Ticket Number does not exsit'
        ]);

        $id = $request->get('id');
        $request->session()->put('id', $id);
        return view('auth.rating', compact('id'));
    }

    public function createStepTwo(Request $request)
    {
        $client = $request->session()->get('client');
        return view('auth.create-step-two', compact('client'));
    }

    public function createStepTwov(Request $request)
    {
        $vistor = $request->session()->get('vistor');
        return view('auth.create-step-twov', compact('vistor'));
    }

    public function createStepTwo1(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required'
        ], [

            'name.required' => 'Name is required'
        ]);

        //Continue from here
        $client = $request->session()->get('client');
        $client->fill($validatedData);
        $request->session()->put('client', $client);
        return redirect()->route('client.create.step.two2');
    }

    public function createStepTwo1v(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required'
        ], [

            'name.required' => 'Name is required'
        ]);

        //Continue from here
        $vistor = $request->session()->get('vistor');
        $vistor->fill($validatedData);
        $request->session()->put('vistor', $vistor);
        return redirect()->route('vistor.create.step.two2');
    }


    public function createStepTwo2(Request $request)
    {
        $client = $request->session()->get('client');
        return view('auth.create-step-two1', compact('client'));
    }

    public function createStepTwo2v(Request $request)
    {
        $vistor = $request->session()->get('vistor');
        return view('auth.create-step-two1v', compact('vistor'));
    }

    public function createStepTwo3(Request $request)
    {
        $validatedData = $request->validate([
            'surname' => 'required'
        ], [

            'surname.required' => 'Last Name is required'
        ]);

        //Continue from here
        $client = $request->session()->get('client');
        $client->fill($validatedData);
        $request->session()->put('client', $client);
        return redirect()->route('client.create.step.two4');
    }

    public function createStepTwo3v(Request $request)
    {
        $validatedData = $request->validate([
            'surname' => 'required'
        ], [

            'surname.required' => 'Last Name is required'
        ]);

        //Continue from here
        $vistor = $request->session()->get('vistor');
        $vistor->fill($validatedData);
        $request->session()->put('vistor', $vistor);
        return redirect()->route('vistor.create.step.two4');
    }


    public function createStepTwo4(Request $request)
    {
        $client = $request->session()->get('client');
        return view('auth.create-step-two2', compact('client'));
    }

    public function createStepTwo4v(Request $request)
    {
        $vistor = $request->session()->get('vistor');
        return view('auth.create-step-two2v', compact('vistor'));
    }

    public function createStepTwo5(Request $request)
    {
        $validatedData = $request->validate([
            'cellphone' => 'required|unique:client,cellphone'
        ], [

            'cellphone.required' => 'Cellphone is required',
            'cellphone.unique' => 'Cellphone is not unique'
        ]);

        //Continue from here
        $client = $request->session()->get('client');
        $client->fill($validatedData);
        $request->session()->put('client', $client);
        return redirect()->route('client.create.step.two6');
    }

    public function createStepTwo5v(Request $request)
    {
        $validatedData = $request->validate([
            'cellphone' => 'required|unique:client,cellphone'
        ], [

            'cellphone.required' => 'Cellphone is required',
            'cellphone.unique' => 'Cellphone is not unique'
        ]);

        //Continue from here
        $vistor = $request->session()->get('vistor');
        $vistor->fill($validatedData);
        $request->session()->put('vistor', $vistor);
        return redirect()->route('vistor.create.step.two6');
    }

    public function createStepTwo6(Request $request)
    {
        $client = $request->session()->get('client');
        return view('auth.create-step-two3', compact('client'));
    }

    public function createStepTwo6v(Request $request)
    {
        $vistor = $request->session()->get('vistor');
        $vistor->addCo = $vistor->name.' '.$vistor->surname;
        $vistor->save();
        return view('auth.visting', compact('vistor'));
    }

    public function createStepTwo7(Request $request)
    {

        //Continue from here
        $client = $request->session()->get('client');
        $client->email = $request->get('email');
        $client->addCo = $client->name.' '.$client->surname;
        $client->save();
        $request->session()->put('client', $client);
        return redirect()->route('client.create.step.two8');
    }

    public function createStepTwo8(Request $request)
    {

        //Continue from here
        $client = $request->session()->get('client');
        return view('auth.service', compact('client'));
    }



    public function createStepThree(Request $request)
    {
        $client =  Client::select()
            ->where('idNumber', '=', $request->session()->get('idNumber'))
            ->first();
        return view('auth.service', compact('client'));
    }

    public function createStepThreev(Request $request)
    {
        $vistor =  Client::select()
            ->where('idNumber', '=', $request->session()->get('idNumber'))
            ->first();
        return view('auth.visting', compact('vistor'));
    }
}
