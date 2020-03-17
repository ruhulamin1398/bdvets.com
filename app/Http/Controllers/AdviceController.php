<?php

namespace App\Http\Controllers;

use App\advice;
use Illuminate\Http\Request;

class AdviceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $advices= advice:: all();
        return view('prescription.advice',compact('advices') );
    }
    public function adviceListApi()
    {
       return advice:: all();
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
        $advice = new advice;

        $advice->name= $request->name;
        $advice->description = $request->description;
        $advice->save();
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\advice  $advice
     * @return \Illuminate\Http\Response
     */
    public function show(advice $advice)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\advice  $advice
     * @return \Illuminate\Http\Response
     */
    public function edit(advice $advice)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\advice  $advice
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, advice $advice)
    {
        $advice->name= $request->name;
        $advice->description = $request->description;
        $advice->save();
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\advice  $advice
     * @return \Illuminate\Http\Response
     */
    public function destroy(advice $advice)
    {
        $advice->delete();
        return back();
    }
}
