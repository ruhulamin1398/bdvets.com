<?php

namespace App\Http\Controllers;

use \App\division;
use \App\district;
use \App\upazilla;
use \App\union;
use App\village;
use Illuminate\Http\Request;

class LocationController extends Controller
{
    public function village()
    {
        $divisions = division::all();

        return view('location.village', compact('divisions'));
    }

    public function villageStore(Request $request)
    {


        $village = new village;
        $village->name = $request->name;
        $village->bn_name = $request->bn_name;
        $village->url = $request->url;
        $village->union_id = $request->union_id;

        $village->save();

        return back();
    }
    public function villageDelete(Request $request)
    {
        village::find($request->id)->delete();
        return back();
    }

    public function divisionListApi()
    {
        return division::all();
    }

    public function districtListApi(Request $request)
    {
        return division::find($request->division_id)->districts;
    }

    public function upazillatListApi(Request $request)
    {
        return district::find($request->district_id)->upazillas;
    }

    public function unionListApi(Request $request)
    {
        return upazilla::find($request->upazilla_id)->unions;
    }
    public function villageListApi(Request $request)
    {
        return union::find($request->union_id)->villages;
    }
}
