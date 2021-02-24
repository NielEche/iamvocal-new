<?php

namespace App\Http\Controllers;

use App\Models\tedxphteams;
use App\Models\AboutUs;
use Illuminate\Http\Request;

class TeamsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tedxphteams = tedxphteams::all();
        $aboutus = AboutUs::all();
        return view('admin.team.index', compact(['tedxphteams' , 'aboutus']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('aboutevent');
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
            $tedxphteams = new tedxphteams();

            $tedxphteams->name = $request->name;
            $tedxphteams->position = $request->position;
            $tedxphteams->about = $request->about;

            if ($request->hasfile('file_path')) {
                $file = $request->file('file_path');
                $extension = $file->getClientOriginalExtension();
                $filename = time() . '.' . $extension;
                $file->move('uploads/team/', $filename);
                $tedxphteams->file_path = $filename;
            } else {
                return $request;
                $tedxphteams->file_path = '';
            }


            $tedxphteams->save();
     
            return redirect('aboutevent')->with('message', 'Team Member Added Succesfully!');
            

        } catch (\Throwable $th) {
    
            //throw $th;
            $response = [
              'ERROR' => false,
              'message' => "OOPS! Something wennt wrong"
            ];
            return response()->json($response, 422);
        }
 
    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Teams  $teams
     * @return \Illuminate\Http\Response
     */
    public function show(tedxphteams $tedxphteams)
    {
        return view('admin.team.index', compact(['teams']));
    }

      /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showData($id)
    {
        $tedxphteams = tedxphteams::find($id);
        return view('admin.team.edit', ['teams'=>$tedxphteams]); 
    }

    public function showAboutus($id)
    {
        $aboutus = AboutUs::find($id);
        return view('admin.team.editabout', ['aboutus'=>$aboutus]); 
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Teams  $teams
     * @return \Illuminate\Http\Response
     */
    public function edit(tedxphteams $tedxphteams)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Teams  $teams
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        
        try {

            $tedxphteams = tedxphteams::find($request->id);

              $tedxphteams->update([
                'name' => $request['name'],
                'position' => $request['position'],
                'about' => $request['about'],
            ]);
            
            if ($request->hasfile('file_path')) {
                $file = $request->file('file_path');
                $extension = $file->getClientOriginalExtension();
                $file_path = time() . '.' . $extension;
                $file->move('uploads/team/', $file_path);
                $tedxphteams->file_path = $file_path;
            } else {
                $tedxphteams->save();
            }


            $tedxphteams->save();
    
            return redirect('aboutevent')->with('message', 'Partners Updated  Succesfully!');
           

        } catch (\Throwable $th) {
   
            throw $th;
            $response = [
              'success' => false,
              'message' => "OOPS! Something fucking wennt wrong"
            ];
            return response()->json($response, 422);
        }
   }

   public function updateAU(Request $request)
   {
       
       try {

           $aboutus = AboutUs::find($request->id);

           $aboutus->update([
               'header' => $request['header'],
               'details' => $request['details'],
           ]);

           $aboutus->save();
   
           return redirect('aboutevent')->with('message', 'About Us Updated  Succesfully!');
          

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
     * @param  \App\Models\Teams  $teams
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tedxphteams = tedxphteams::find($id);

        $tedxphteams->delete('delete from teams where id = ?',[$id]);
        
        return redirect('aboutevent')->with('message','Team Member deleted successfully');
      
    }
}
