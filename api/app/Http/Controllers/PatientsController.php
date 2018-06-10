<?php

namespace App\Http\Controllers;

use App\Patients;
use Illuminate\Http\Request;

class PatientsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $patients = Patients::all();
        return response()->json(['data' => $patients]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $validator = $request->validate([
            'firstName' => 'required|max:255',
            'lastName' => 'required|max:255',
            'email' => 'email|max:255'
        ]);

        $patient = Patients::create($request->all());

        $patient->save();
        return response()->json([
            'status' => 'success',
            'id' => $patient->id
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Patients  $patients
     * @return \Illuminate\Http\Response
     */
    public function show(Patients $patients)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Patients  $patients
     * @return \Illuminate\Http\Response
     */
    public function edit(Patients $patients)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Patients  $patients
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validator = $request->validate([
            'firstName' => 'required|max:255',
            'lastName' => 'required|max:255',
            'email' => 'email|max:255'
        ]);

        $patient = Patients::findOrFail($id);

        $patient->fill($request->all());

        $patient->save();
        return response()->json([
            'status' => 'success',
            'id' => $patient->id
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Patients  $patients
     * @return \Illuminate\Http\Response
     */
    public function destroy(Patients $patients)
    {
        //
    }
}
