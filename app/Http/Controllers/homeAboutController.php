<?php

namespace App\Http\Controllers;

use App\Models\HomeHeader;
use Illuminate\Http\Request;

class homeAboutController extends Controller
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
        try {
            //code...
            $homeHeader = new HomeHeader();

            $homeHeader->button_text = $request->button_text;
            $homeHeader->button_link = $request->button_link;

            if ($request->hasfile('file_path')) {
                $file = $request->file('file_path');
                $extension = $file->getClientOriginalExtension();
                $filename = time() . '.' . $extension;
                $file->move('uploads/homepage/', $filename);
                $homeHeader->file_path = $filename;
            } else {
                return $request;
                $homeHeader->file_path = '';
            }

            $homeHeader->save();
     
            return redirect('homeHeader')->with('message', 'Image Added Succesfully!');
            

        } catch (\Throwable $th) {
    
            //throw $th;
            $response = [
              'success' => false,
              'message' => "OOPS! Something fucking wennt wrong"
            ];
            return response()->json($response, 422);
        }
 
    
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\HomeAbout  $homeAbout
     * @return \Illuminate\Http\Response
     */
    public function show(HomeAbout $homeAbout)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\HomeAbout  $homeAbout
     * @return \Illuminate\Http\Response
     */
    public function edit(HomeAbout $homeAbout)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\HomeAbout  $homeAbout
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, HomeAbout $homeAbout)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\HomeAbout  $homeAbout
     * @return \Illuminate\Http\Response
     */
    public function destroy(HomeAbout $homeAbout)
    {
        //
    }
}
