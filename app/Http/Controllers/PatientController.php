<?php

namespace App\Http\Controllers;

use App\Patients;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $patients = Patients::first()->paginate(20);
        return view('patients.index',compact('patients'))->with('i', (request()->input('page', 1) - 1) * 20);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('patients.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'dob' => 'required',
            'gender' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'medtest' => 'required',
            'res' => 'required'
        ]);
        Patients::create($request->all());
        return redirect('/');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Patients  $patients
     * @return \Illuminate\Http\Response
     */
    public function show(Patients $patient)
    {
        error_log($patient);
        return view('patients.show',compact('patient'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Patients  $patient
     * @return \Illuminate\Http\Response
     */
    public function edit(Patients $patient)
    {
        error_log($patient);
        return view('patients.edit',compact('patient'));;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Patients  $patient
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Patients $patient)
    {
        error_log($patient);
        $request->validate([
            'name' => 'required',
            'dob' => 'required',
            'gender' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'medtest' => 'required',
            'res' => 'required'
        ]);

        $patient->update($request->all());
        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Patients  $patients
     * @return \Illuminate\Http\Response
     */
    public function destroy(Patients $patient)
    {
        $patient->delete();
        return redirect()->route('patients.index');
    }
}
