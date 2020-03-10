<?php

namespace App\Http\Controllers;

use App\district;
use App\division;
use App\Farmer;
use App\union;
use App\upazilla;
use App\village;
use Illuminate\Http\Request;

class FarmerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $divisions = division::all();
       
        return view("farmer.index",compact('divisions'));
    }
    public function villageFarmerListApi(Request $request){
        
        return village::find($request->village_id)->farmers;

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
        $farmer = new farmer;

        $farmer->division_id= $request->division_id;
        $farmer->district_id= $request->district_id;
        $farmer->upazilla_id= $request->upazilla_id;
        $farmer->union_id= $request->union_id;
        $farmer->village_id= $request->village_id;

        $farmer->name = $request->name;
        $farmer->email =$request->email;
        $farmer->phone = $request->phone;
        $farmer->cattle= $request->cattle;
        $farmer->goat= $request->goat;
        $farmer->buffalo= $request->buffalo;
        $farmer->sheep= $request->sheep;
        $farmer->poultry =$request->poultry;
        $farmer->chicken= $request->chicken;
        $farmer->duck= $request->duck;
        $farmer->pigeon= $request->pigeon;
        $farmer->turkey= $request->turkey;
        $farmer->other= $request->other;
        $farmer->save();
   
            return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Farmer  $farmer
     * @return \Illuminate\Http\Response
     */
    public function show(Farmer $farmer)
    {
        $divisions = division::all();
        $districts= district::where("division_id",$farmer->division_id)->get();
        $upazillas= upazilla::where("district_id",$farmer->district_id)->get();
        $unions= union::where("upazilla_id",$farmer->upazilla_id)->get();
        $villages= village::where("union_id",$farmer->union_id)->get();

      
        return view('farmer.show', compact('farmer','divisions', 'districts' , 'upazillas', 'unions' , 'villages'));


    }
   

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Farmer  $farmer
     * @return \Illuminate\Http\Response
     */
    public function edit(Farmer $farmer)
    {
       
        $divisions = division::all();
        $districts= district::where("division_id",$farmer->division_id)->get();
        $upazillas= upazilla::where("district_id",$farmer->district_id)->get();
        $unions= union::where("upazilla_id",$farmer->upazilla_id)->get();
        $villages= village::where("union_id",$farmer->union_id)->get();

      
        return view('farmer.edit', compact('farmer','divisions', 'districts' , 'upazillas', 'unions' , 'villages'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Farmer  $farmer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Farmer $farmer)
    {
        $farmer->name = $request->name;
        $farmer->email =$request->email;
        $farmer->phone = $request->phone;
        $farmer->cattle= $request->cattle;
        $farmer->goat= $request->goat;
        $farmer->buffalo= $request->buffalo;
        $farmer->sheep= $request->sheep;
        $farmer->poultry =$request->poultry;
        $farmer->chicken= $request->chicken;
        $farmer->duck= $request->duck;
        $farmer->pigeon= $request->pigeon;
        $farmer->turkey= $request->turkey;
        $farmer->other= $request->other;
        $farmer->save();
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Farmer  $farmer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Farmer $farmer)
    {
        //
    }




}
