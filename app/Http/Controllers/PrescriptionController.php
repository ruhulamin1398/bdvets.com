<?php

namespace App\Http\Controllers;

use App\diagnosis;
use App\doctor;
use App\MedichineCategory;
use App\pAdvice;
use App\pClinicalSign;
use App\pComplain;
use App\pDiagnosis;
use App\pMedichine;
use App\pNecropsy;
use App\prescription;
use App\pSpeacies;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PrescriptionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


        $prescriptions =   prescription::where('user_id', Auth::user()->id)->get();


        return view('prescription.index', compact('prescriptions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $medichineCategories = MedichineCategory::all();
        return view('prescription.create', compact('medichineCategories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {





        $prescription = new prescription;
        $prescription->farmer_id = $request->farmer_id;
        $prescription->user_id = Auth::user()->id;
        $prescription->save();


        ////////////////////////////////////////////////////////////////////////////////     

        $species = json_decode($request->species);

        $query =  array();

        array_push($query, array(
            'prescription_id' => $prescription->id,
            'species'  =>  $species->species,
            'for'  =>  $species->for,
            'age'  =>  $species->age,
            'birds'  =>  $species->birds,
            'weight'  =>  $species->weight,
            'feeding'  =>  $species->feeding,
            'created_at' => now(),
            'updated_at' => now(),
        ));

        pSpeacies::insert($query);



        ////////////////////////////////////////////////////////////////////////////////     

        $complains = json_decode($request->complains);


        $pComplain = new pComplain;
        $pComplain->prescription_id = $prescription->id;
        $pComplain->complain = $complains->complain;
        $pComplain->first_seen = $complains->first_seen;
        $pComplain->affected = $complains->affected;
        $pComplain->medication = $complains->medication;

        $pComplain->save();






        ////////////////////////////////////////////////////////////////////////////////     

        $diagnosis = json_decode($request->diagnosis);

        // return var_dump($diagnosis);
        $query =  array();
        foreach ($diagnosis as $key => $value) {
            array_push($query, array(
                'prescription_id' => $prescription->id,
                'diagnosis_id'  =>  $key,
                'created_at' => now(),
                'updated_at' => now(),
            ));
        };
        pDiagnosis::insert($query);


        ////////////////////////////////////////////////////////////////////////////////     

        $signs = json_decode($request->signs);

        // return var_dump($diagnosis);
        $query =  array();
        foreach ($signs as $key => $value) {
            array_push($query, array(
                'prescription_id' => $prescription->id,
                'clinical_sign_id'  =>  $key,
                'created_at' => now(),
                'updated_at' => now(),
            ));
        };
        pClinicalSign::insert($query);


        ////////////////////////////////////////////////////////////////////////////////     

        $advice = json_decode($request->advice);

        // return var_dump($diagnosis);
        $query =  array();
        foreach ($advice as $key => $value) {
            array_push($query, array(
                'prescription_id' => $prescription->id,
                'advice_id'  =>  $key,
                'created_at' => now(),
                'updated_at' => now(),
            ));
        };


        pAdvice::insert($query);

        ////////////////////////////////////////////////////////////////////////////////     

        $necropsies = json_decode($request->necropsies);

        // return var_dump($diagnosis);
        $query =  array();
        foreach ($necropsies as $key => $value) {
            array_push($query, array(
                'prescription_id' => $prescription->id,
                'necropsy_id'  =>  $key,
                'created_at' => now(),
                'updated_at' => now(),
            ));
        };
        pNecropsy::insert($query);


        ////////////////////////////////////////////////////////////////////////////////     

        $medichines = json_decode($request->medichines);

        // return var_dump($diagnosis);
        $query =  array();
        foreach ($medichines as $medichine) {



            array_push($query, array(
                'prescription_id' => $prescription->id,
                'medichine_id'  =>  $medichine->id,
                'amount' => $medichine->amount,
                'sig'  =>  $medichine->description,
                'created_at' => now(),
                'updated_at' => now(),
            ));
        }
        pMedichine::insert($query);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\prescription  $prescription
     * @return \Illuminate\Http\Response
     */
    public function show(prescription $prescription)
    {
       
       
        return view('prescription.show',compact('prescription'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\prescription  $prescription
     * @return \Illuminate\Http\Response
     */
    public function edit(prescription $prescription)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\prescription  $prescription
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, prescription $prescription)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\prescription  $prescription
     * @return \Illuminate\Http\Response
     */
    public function destroy(prescription $prescription)
    {
        //
    }
}
