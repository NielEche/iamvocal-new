<?php

namespace App\Http\Controllers;

use App\Models\HomeHeader;
use App\Models\HomeAbout;
use App\Models\HomeImages;
use Illuminate\Http\Request;

class homeHeaderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $homeHeader = HomeHeader::all();
        $homeAbout = HomeAbout::all();
        $homeImages = HomeImages::all();
        return view('admin.homePage.index', compact(['homeHeader', 'homeAbout', 'homeImages']));
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
            $homeAbout = new homeAbout();

            $homeAbout->event_theme = $request->event_theme;
            $homeAbout->event_text = $request->event_text;

            $homeAbout->save();
     
            return redirect('homeHeader')->with('message', 'Info Added Succesfully!');
            

        } catch (\Throwable $th) {
    
            //throw $th;
            $response = [
              'ERROR' => false,
              'message' => "OOPS! Something fucking wennt wrong"
            ];
            return response()->json($response, 422);
        }
 
    
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\HomeHeader  $homeHeader
     * @return \Illuminate\Http\Response
     */
    public function show(HomeHeader $homeHeader)
    {
        //
    }

    public function showData($id)
    {
        $homeHeader = HomeHeader::find($id);
        return view('admin.homePage.edit', ['homeHeader'=>$homeHeader]); 
    }

    public function showAbout($id)
    {
        $homeAbout = HomeAbout::find($id);
        return view('admin.homePage.editabout', ['homeAbout'=>$homeAbout]); 
    }

    public function showImages($id)
    {
        $homeImages = HomeImages::find($id);
        return view('admin.homePage.editimages', ['homeImages'=>$homeImages]); 
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\HomeHeader  $homeHeader
     * @return \Illuminate\Http\Response
     */
    public function edit(HomeHeader $homeHeader)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\HomeHeader  $homeHeader
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        
        try {

            $homeHeader = homeHeader::find($request->id);

            $homeHeader->update([
                'button_text' => $request['button_text'],
                'button_link' => $request['button_link'],
            ]);

            if ($request->hasfile('file_path')) {
                $file = $request->file('file_path');
                $extension = $file->getClientOriginalExtension();
                $file_path = time() . '.' . $extension;
                $file->move('uploads/homepage/', $file_path);
                $homeHeader->file_path = $file_path;
            } else {
                $homeHeader->save();
            }

            $homeHeader->save();
    
            return redirect('homeHeader')->with('message', 'Header Updated  Succesfully!');
           

        } catch (\Throwable $th) {
   
            throw $th;
            $response = [
              'success' => false,
              'message' => "OOPS! Something fucking wennt wrong"
            ];
            return response()->json($response, 422);
        }

   
   }

   public function updateH(Request $request)
    {
        
        try {

            $homeAbout = HomeAbout::find($request->id);

            $homeAbout->update([
                'event_theme' => $request['event_theme'],
                'event_text' => $request['event_text'],
            ]);

            $homeAbout->save();
    
            return redirect('homeHeader')->with('message', 'About Updated  Succesfully!');
           

        } catch (\Throwable $th) {
   
            throw $th;
            $response = [
              'success' => false,
              'message' => "OOPS! Something fucking wennt wrong"
            ];
            return response()->json($response, 422);
        }

   
   }

   public function updateImages(Request $request)
   {
       
       try {

           $homeImages = HomeImages::find($request->id);

           $homeImages->update([
               'caption' => $request['caption'],
               'links' => $request['links'],
           ]);

           if ($request->hasfile('file_path')) {
               $file = $request->file('file_path');
               $extension = $file->getClientOriginalExtension();
               $file_path = time() . '.' . $extension;
               $file->move('uploads/homepage/', $file_path);
               $homeImages->file_path = $file_path;
           } else {
               $homeImages->save();
           }

           $homeImages->save();
   
           return redirect('homeHeader')->with('message', 'Image Updated  Succesfully!');
          

       } catch (\Throwable $th) {
  
           throw $th;
           $response = [
             'success' => false,
             'message' => "OOPS! Something fucking wennt wrong"
           ];
           return response()->json($response, 422);
       }

  
  }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\HomeHeader  $homeHeader
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
             
        $homeHeader = HomeHeader::find($id);

        $homeHeader->delete('delete from homeHeader where id = ?',[$id]);
        
        return redirect('homeHeader')->with('message','Header deleted successfully');
    }
}
