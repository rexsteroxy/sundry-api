<?php

namespace App\Http\Controllers;

use App\FormComponent;
use Illuminate\Http\Request;

class FormComponentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function list()
    {
        return "Hello";
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createForm()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\FormComponent  $formComponent
     * @return \Illuminate\Http\Response
     */
    public function show(FormComponent $formComponent)
    {
        return "hello";
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\FormComponent  $formComponent
     * @return \Illuminate\Http\Response
     */
    public function edit(FormComponent $formComponent)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\FormComponent  $formComponent
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FormComponent $formComponent)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\FormComponent  $formComponent
     * @return \Illuminate\Http\Response
     */
    public function delete(FormComponent $formComponent)
    {
        //
    }
}
