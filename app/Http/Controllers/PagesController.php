<?php

namespace App\Http\Controllers;

use DB;
use Auth;
use App\Models\User;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.index'); 
    }

    public function about()
    {
        return view('pages.about'); 
    }

    public function partners()
    {
        return view('pages.partners'); 
    }

    public function events()
    {
        return view('pages.events'); 
    }

    public function mainevents()
    {
        return view('pages.events'); 
    }

    public function eventdetails()
    {
        return view('pages.event-details'); 
    }

    public function speaker()
    {
        return view('pages.speaker'); 
    }

    public function media()
    {
        return view('pages.media'); 
    }

    public function donate()
    {
        return view('pages.donate'); 
    }

    public function em()
    {
        return view('pages.em'); 
    }

    public function sots()
    {
        return view('pages.sots'); 
    }

    public function fc()
    {
        return view('pages.fc'); 
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
