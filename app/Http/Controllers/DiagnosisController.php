<?php

namespace App\Http\Controllers;

use App\diagnosis;
use Illuminate\Http\Request;

class DiagnosisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $diagnosises= diagnosis:: all();
        return view('prescription.diagnosis',compact('diagnosises') );
        
    }

    public function diagnosisListApi()
    {
        return diagnosis:: all();
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
        $diagnosis = new diagnosis;
        
        $diagnosis->name= $request->name;
        $diagnosis->description = $request->description;
        $diagnosis->save();
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\diagnosis  $diagnosis
     * @return \Illuminate\Http\Response
     */
    public function show(diagnosis $diagnosis)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\diagnosis  $diagnosis
     * @return \Illuminate\Http\Response
     */
    public function edit(diagnosis $diagnosis)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\diagnosis  $diagnosis
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, diagnosis $diagnosis)
    {
        $diagnosis->name= $request->name;
        $diagnosis->description = $request->description;
        $diagnosis->save();
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\diagnosis  $diagnosis
     * @return \Illuminate\Http\Response
     */
    public function destroy(diagnosis $diagnosis)
    {
       
       
        $diagnosis->delete();
        return back();
    }
}
