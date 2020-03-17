<?php

namespace App\Http\Controllers;

use App\clinicalSign;
use Illuminate\Http\Request;

class ClinicalSignController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $signs= clinicalSign:: all();
        return view('prescription.sign',compact('signs') );
    }
    public function signListApi( )
    {
        return clinicalSign:: all();
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
        $sign = new clinicalSign;

        $sign->name= $request->name;
        $sign->description = $request->description;
        $sign->save();
     
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\clinicalSign  $clinicalSign
     * @return \Illuminate\Http\Response
     */
    public function show(clinicalSign $clinicalSign)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\clinicalSign  $clinicalSign
     * @return \Illuminate\Http\Response
     */
    public function edit(clinicalSign $clinicalSign)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\clinicalSign  $clinicalSign
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, clinicalSign $clinicalSign)
    {
        $clinicalSign->name= $request->name;
        $clinicalSign->description = $request->description;
        $clinicalSign->save();
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\clinicalSign  $clinicalSign
     * @return \Illuminate\Http\Response
     */
    public function destroy(clinicalSign $clinicalSign)
    {
        $clinicalSign->delete();
        return back();
    }
}
