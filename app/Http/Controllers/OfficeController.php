<?php

namespace App\Http\Controllers;

use App\district;
use App\upazilla;
use App\office;
use App\division;
use Illuminate\Http\Request;

class OfficeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $divisions = division::all();
        return view("office.index",compact('divisions'));
    }
    public function officeListApi(Request $request)
    {
        $offices = office::where('upazilla_id',$request->upzilla_id)->get();
    
        return $offices;
    
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
        $office = new office;

        $office->division_id= $request->division_id;
        $office->district_id= $request->district_id;
        $office->upazilla_id= $request->upazilla_id;


        $office->name = $request->name;
        $office->bn_name = $request->bn_name;
        $office->email =$request->email;
        $office->phone = $request->phone;
        $office->address= $request->address;
        $office->bn_address= $request->bn_address;
        $office->save();
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\office  $office
     * @return \Illuminate\Http\Response
     */
    public function show(office $office)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\office  $office
     * @return \Illuminate\Http\Response
     */
    public function edit(office $office)
    {
        $divisions = division::all();
        $districts= district::where("division_id",$office->division_id)->get();
        $upazillas= upazilla::where("district_id",$office->district_id)->get();
//
        
        return view('office.edit', compact('office','divisions', 'districts' , 'upazillas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\office  $office
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, office $office)
    {
        $office->division_id= $request->division_id;
        $office->district_id= $request->district_id;
        $office->upazilla_id= $request->upazilla_id;
        $office->name = $request->name;
        $office->bn_name = $request->bn_name;
        $office->email =$request->email;
        $office->phone = $request->phone;
        $office->address= $request->address;
        $office->bn_address= $request->bn_address;
        $office->save();
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\office  $office
     * @return \Illuminate\Http\Response
     */
    public function destroy(office $office)
    {
        //
    }
}
