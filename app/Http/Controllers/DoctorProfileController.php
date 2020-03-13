<?php

namespace App\Http\Controllers;

use App\doctor;
use App\doctorProfile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DoctorProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
           // return doctorProfile::find(1)->other_degrees;
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
     * @param  \App\doctorProfile  $doctorProfile
     * @return \Illuminate\Http\Response
     */
    public function show(doctorProfile $doctorProfile)
    {
        
      
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\doctorProfile  $doctorProfile
     * @return \Illuminate\Http\Response
     */
    public function edit(doctorProfile $doctorProfile)
    {
      
       return view('doctor.profile',compact('doctorProfile'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\doctorProfile  $doctorProfile
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, doctorProfile $doctorProfile)
    {
        $doctorProfile->name= $request->name;
        $doctorProfile->bn_name= $request->bn_name;
        $doctorProfile->phone= $request->phone;
        $doctorProfile->degree_varsity= $request->degree_varsity;
        $doctorProfile->bn_degree_varsity= $request->bn_degree_varsity;
        $doctorProfile->reg_no= $request->reg_no;


        $doctorProfile->save();
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\doctorProfile  $doctorProfile
     * @return \Illuminate\Http\Response
     */
    public function destroy(doctorProfile $doctorProfile)
    {
        //
    }
}
