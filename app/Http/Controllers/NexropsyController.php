<?php

namespace App\Http\Controllers;

use App\nexropsy;
use Illuminate\Http\Request;

class NexropsyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $necropsyes= nexropsy:: all();
        return view('prescription.necropsy',compact('necropsyes') );
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
        $nexrops = new nexropsy;
        
        $nexrops->name= $request->name;
        $nexrops->description = $request->description;
        $nexrops->save();
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\nexropsy  $nexropsy
     * @return \Illuminate\Http\Response
     */
    public function show(nexropsy $nexropsy)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\nexropsy  $nexropsy
     * @return \Illuminate\Http\Response
     */
    public function edit(nexropsy $nexropsy)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\nexropsy  $nexropsy
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, nexropsy $necropsy)
    {
        $necropsy->name= $request->name;
        $necropsy->description = $request->description;
        $necropsy->save();
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\nexropsy  $nexropsy
     * @return \Illuminate\Http\Response
     */
    public function destroy(nexropsy $necropsy)
    {
        $necropsy->delete();
        return back();
    }
}
