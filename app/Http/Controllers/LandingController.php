<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Client;

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
            $idNumber = 0;
            $request->session()->put('idNumber', $idNumber);
            return redirect()->route('client.create.step.three');
        } else {
            $client = new Client();
            $client->fill($validatedData);
            $request->session()->put('client', $client);
            return redirect()->route('client.create.step.two');
        }
    }

    public function createStepTwo(Request $request)
    {
        $client = $request->session()->get('client');
        return view('auth.create-step-two', compact('client'));
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

    public function createStepTwo2(Request $request)
    {
        $client = $request->session()->get('client');
        return view('auth.create-step-two1', compact('client'));
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

    public function createStepTwo4(Request $request)
    {
        $client = $request->session()->get('client');
        return view('auth.create-step-two2', compact('client'));
    }

    public function createStepTwo5(Request $request)
    {
        $validatedData = $request->validate([
            'cellphone' => 'required'
        ], [

            'cellphone.required' => 'Cellphone is required'
        ]);

          //Continue from here
          $client = $request->session()->get('client');
          $client->fill($validatedData);
          $request->session()->put('client', $client);
          return redirect()->route('client.create.step.two6');
    }

    public function createStepTwo6(Request $request)
    {
        $client = $request->session()->get('client');
        return view('auth.create-step-two3', compact('client'));
    }

    public function createStepTwo7(Request $request)
    {
        
          //Continue from here
          $client = $request->session()->get('client');
          $client ->email = $request->get('email');
          $client ->save();
          $request->session()->put('client', $client);
          return redirect()->route('client.create.step.two8');
    }

    public function createStepTwo8(Request $request)
    {
        
          //Continue from here
          $client = $request->session()->get('client');
        return view('auth.create-step-two4', compact('client'));
    }







    public function createStepThree(Request $request)
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
            $idNumber = 0;
            $request->session()->put('idNumber', $idNumber);
            return redirect()->route('client.create.step.one');
        } else {
            $client = new Client();
            $client->fill($validatedData);
            $request->session()->put('client', $client);
            return redirect()->route('client.create.step.one');
        }
    }
}
