<?php

namespace App\Http\Controllers;

use App\JobListing;
use Illuminate\Http\Request;
use App\Http\Requests\JobListingStoreRequest;

class JobListingsController extends Controller
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

    public function listAllJobs() {

        $jobListing = JobListing::where('delete', 0)
           ->where('close', 0)
           ->latest()->get();
        return response()->json($jobListing,200);

    }

    public function listSingleJob(JobListing $id) {
       
        $listing = $id;
        
        if($listing->delete == 1 || $id->close == 1 ) {
            return response()->json("resource has been deleted or is no longer in use", 410);  
        }
       
        return response()->json($listing, 200);

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
    public function store(JobListingStoreRequest $request)
    {
        $validator = $request->validator;
        if($validator->fails()){

            return response()->json($validator->errors(), 400);
        }

        $request->all();
        $jobListing = JobListing::create($request->all());
       
        return response()->json($jobListing, 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\JobListings  $jobListings
     * @return \Illuminate\Http\Response
     */
    public function show(JobListings $jobListings)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\JobListings  $jobListings
     * @return \Illuminate\Http\Response
     */
    public function edit(JobListings $jobListings)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\JobListing  $jobListings
     * @return \Illuminate\Http\Response
     */
    public function update(JobListingStoreRequest $request, JobListing $id)
    {
        $jobListing = $id;
        $validator = $request->validator;
        if($validator->fails()){

            return response()->json($validator->errors(), 400);
        }

        $request->all();
        $jobListing->update($request->all());
       
        return response()->json( $jobListing, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\JobListings  $jobListings
     * @return \Illuminate\Http\Response
     */
    public function softDelete(JobListing $id)
    {
        $jobListing = $id;
        $jobListing->delete = 1;
        $jobListing->save();
        return response()->json( 'resource marked for deletion', 200);
        
    }

    public function close(JobListing $id)
    {
        $jobListing = $id;
        $jobListing->close = 1;
        $jobListing->save();
        return response()->json( $jobListing, 200);
        
    }
}
