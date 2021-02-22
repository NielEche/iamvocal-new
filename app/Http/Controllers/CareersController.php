<?php

namespace App\Http\Controllers;

use App\Models\Careers;
use Illuminate\Http\Request;

class CareersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $careers = Careers::all();
        return view('admin.career.index', compact(['careers']));
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
            $careers = new Careers();

            $careers->position = $request->position;
            $careers->location = $request->location;
            $careers->about = $request->about;
            $careers->apply = $request->apply;

            $careers->save();
     
            return redirect('career')->with('message', 'Career Added Succesfully!');
            

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
     * @param  \App\Models\Careers  $careers
     * @return \Illuminate\Http\Response
     */
    public function show(Careers $careers)
    {
        //
    }

    public function showData($id)
    {
        $careers = Careers::find($id);
        return view('admin.career.edit', ['careers'=>$careers]); 
    }

    public function showall($id)
    {
        $careers = Careers::find($id);
        return view('pages.allcareers', ['careers'=>$careers]); 
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Careers  $careers
     * @return \Illuminate\Http\Response
     */
    public function edit(Careers $careers)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Careers  $careers
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        
        try {

            $careers = Careers::find($request->id);

            $careers->update([
                'position' => $request['position'],
                'location' => $request['location'],
                'about' => $request['about'],
                'apply' => $request['apply'],
            ]);

            $careers->save();
    
            return redirect('career')->with('message', 'Career Updated  Succesfully!');
           

        } catch (\Throwable $th) {
   
            throw $th;
            $response = [
              'success' => false,
              'message' => "OOPS! Something wennt wrong"
            ];
            return response()->json($response, 422);
        }

   
   }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Careers  $careers
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $careers = Careers::find($id);

        $careers->delete('delete from careers where id = ?',[$id]);
        
        return redirect('career')->with('message','Career deleted successfully');
      
    }
}
