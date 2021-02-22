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

    public function reframe()
    {
        return view('pages.reframe'); 
    }


    public function andrew()
    {
        return view('pages.speakers.andrew'); 
    }

    public function itoro()
    {
        return view('pages.speakers.itoro'); 
    }

    public function olu()
    {
        return view('pages.speakers.olu'); 
    }

    public function ifeanyi()
    {
        return view('pages.speakers.ifeanyi'); 
    }

    public function nnamdi()
    {
        return view('pages.speakers.nnamdi'); 
    }

    public function mina()
    {
        return view('pages.speakers.mina'); 
    }

    public function sher()
    {
        return view('pages.speakers.sher'); 
    }

    public function ipalibo()
    {
        return view('pages.speakers.ipalibo'); 
    }

    public function celestina()
    {
        return view('pages.speakers.celestina'); 
    }

    public function kblack()
    {
        return view('pages.speakers.kblack'); 
    }

    public function kotrell()
    {
        return view('pages.speakers.kotrell'); 
    }

    public function amanda()
    {
        return view('pages.speakers.amanda'); 
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
