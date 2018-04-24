<?php

namespace App\Http\Controllers;

use App\RequestInformation;
use Illuminate\Http\Request;
use App\Mail\RequestInformationMail;

class RequestInformationController extends Controller
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
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $RequestInformationUser =  RequestInformation::create([
            'programmes'    =>      request('programmes'),
            'last_name'     =>      request('last_name'),
            'first_name'    =>      request('first_name'),
            'email'         =>      request('email'),
            'title'         =>      request('title'),
            'DateOfBirth'   =>      request('DateOfBirth'),
            'nationality'   =>      request('nationality'),
            'question'      =>      request('question')
        ]);

        \Mail::to($RequestInformationUser)->send(new RequestInformationMail($RequestInformationUser));

        return back();
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
     * @param  \App\RequestInformation  $requestInformation
     * @return \Illuminate\Http\Response
     */
    public function show(RequestInformation $requestInformation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\RequestInformation  $requestInformation
     * @return \Illuminate\Http\Response
     */
    public function edit(RequestInformation $requestInformation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\RequestInformation  $requestInformation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RequestInformation $requestInformation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\RequestInformation  $requestInformation
     * @return \Illuminate\Http\Response
     */
    public function destroy(RequestInformation $requestInformation)
    {
        //
    }
}
