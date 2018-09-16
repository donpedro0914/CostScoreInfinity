<?php

namespace App\Http\Controllers;

use App\Costscore;
use Illuminate\Http\Request;

class CostscoreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('index');
    }

    public function getcostscore(Request $request) {
        $costscore = Costscore::where('measure_category', request('measure_category'))->where('measure_type', request('measure_type'))->where('property_type', request('property_type'))->where('pre_main_heating_source_for_the_property', request('pre_main_heating_source_for_the_property'))->where('post_main_heating_source_for_the_property', request('post_main_heating_source_for_the_property'))->where('name_of_uplift', request('name_of_uplift'))->first();

        return response()->json($costscore);
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Costscore  $costscore
     * @return \Illuminate\Http\Response
     */
    public function show(Costscore $costscore)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Costscore  $costscore
     * @return \Illuminate\Http\Response
     */
    public function edit(Costscore $costscore)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Costscore  $costscore
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Costscore $costscore)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Costscore  $costscore
     * @return \Illuminate\Http\Response
     */
    public function destroy(Costscore $costscore)
    {
        //
    }
}
