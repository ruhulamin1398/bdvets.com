<?php

namespace App\Http\Controllers;

use App\doctor;
use App\office;
use App\role;
use App\User;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        //return doctor::find(1)->user->id;
        $doctors= doctor::all();  
        $offices=office::all();
        $users=User::all();  
       // return $doctors;
        return view('doctor.index',compact('doctors','offices','users'));
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
        $doctor = new doctor;
        $doctor->user_id= $request->user_id;
        $doctor->office_id= $request->office_id;
        $doctor->designation= $request->designation;
        
        $user= User:: find($request->user_id);
        $user->role_id=2;
        $user ->save();

        $doctor->save();
        return back();

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function show(doctor $doctor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function edit(doctor $doctor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, doctor $doctor)
    {
    

        $doctor->office_id= $request->office_id;
        $doctor->designation= $request->designation;
        $doctor->save();
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function destroy(doctor $doctor)
    {
       $doctor ->delete();
       
       $user= User:: find($doctor->user_id);
       $user->role_id=4;
       $user ->save();
       return back();
    }
}
