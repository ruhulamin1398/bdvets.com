<?php

namespace App\Http\Controllers;

use App\necropsy;
use Illuminate\Http\Request;

class NecropsyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $necropsyes= necropsy:: all();
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
        $nexrops = new necropsy;

        $nexrops->name= $request->name;
        $nexrops->description = $request->description;
        $nexrops->save();
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\necropsy  $necropsy
     * @return \Illuminate\Http\Response
     */
    public function show(necropsy $necropsy)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\necropsy  $necropsy
     * @return \Illuminate\Http\Response
     */
    public function edit(necropsy $necropsy)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\necropsy  $necropsy
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, necropsy $necropsy)
    {
        $necropsy->name= $request->name;
        $necropsy->description = $request->description;
        $necropsy->save();
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\necropsy  $necropsy
     * @return \Illuminate\Http\Response
     */
    public function destroy(necropsy $necropsy)
    {
        $necropsy->delete();
        return back();
    }
}
