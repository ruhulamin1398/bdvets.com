<?php

namespace App\Http\Controllers;

use App\MedichineCategory;
use Illuminate\Http\Request;

class MedichineCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = MedichineCategory::all();

        return view('medichine.categories',compact('categories'));

    }

    public function medichineCategoryListApi()
{
    $medichineCategories = MedichineCategory::all();

    return $medichineCategories;

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
        $medichineCategory = new MedichineCategory;

        $medichineCategory->name= $request->name;
        $medichineCategory->description = $request->description;
        $medichineCategory->save();
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\MedichineCategory  $medichineCategory
     * @return \Illuminate\Http\Response
     */
    public function show(MedichineCategory $medichineCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\MedichineCategory  $medichineCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(MedichineCategory $medichineCategory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\MedichineCategory  $medichineCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MedichineCategory $medichineCategory)
    {
        $medichineCategory->name= $request->name;
        $medichineCategory->description = $request->description;
        $medichineCategory->save();
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\MedichineCategory  $medichineCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(MedichineCategory $medichineCategory)
    {
        $medichineCategory->delete();
        return back();
    }
}
