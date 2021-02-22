<?php

namespace App\Http\Controllers;

use App\Models\Partners;
use Illuminate\Http\Request;

class PartnersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $partners = Partners::all();
        return view('admin.partners.index', compact(['partners']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('eventpartners');
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
            $partners = new Partners();

            $partners->name = $request->name;
            $partners->type = $request->type;

            if ($request->hasfile('file_path')) {
                $file = $request->file('file_path');
                $extension = $file->getClientOriginalExtension();
                $filename = time() . '.' . $extension;
                $file->move('uploads/partners/', $filename);
                $partners->file_path = $filename;
            } else {
                return $request;
                $partners->file_path = '';
            }


            $partners->save();
     
            return redirect('eventpartners')->with('message', 'Partner Added Succesfully!');
            

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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $partners = Partners::where('type', 'hospitality');
        return view('pages.partners', compact(['partners']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showData($id)
    {
        $partners = Partners::find($id);
        return view('admin.partners.edit', ['partners'=>$partners]); 
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        
        try {

            $partners = Partners::find($request->id);

            $partners->update([
                'name' => $request['name'],
                'type' => $request['type'],
            ]);

            if ($request->hasfile('file_path')) {
                $file = $request->file('file_path');
                $extension = $file->getClientOriginalExtension();
                $file_path = time() . '.' . $extension;
                $file->move('uploads/partners/', $file_path);
                $partners->file_path = $file_path;
            } else {
                $partners->save();
            }

            $partners->save();
    
            return redirect('eventpartners')->with('message', 'Partners Updated  Succesfully!');
           

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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $partners = Partners::find($id);

        $partners->delete('delete from partners where id = ?',[$id]);
        
        return redirect('eventpartners')->with('message','Partner deleted successfully');
      
    }
}
