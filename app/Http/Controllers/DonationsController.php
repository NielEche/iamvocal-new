<?php

namespace App\Http\Controllers;

use App\Models\Donations;
use Illuminate\Http\Request;

class DonationsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $donations = Donations::all();
        return view('admin.donations.index', compact(['donations']));
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
            $donations = new Donations();

            $donations->header = $request->header;
            $donations->date = $request->date;
            $donations->location = $request->location;
            $donations->caption = $request->caption;
            $donations->url = $request->url;
            $donations->amount = $request->amount;

            $donations->save();
     
            return redirect('donations')->with('message', 'Donation Added Succesfully!');
            

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
     * @param  \App\Models\Donations  $donations
     * @return \Illuminate\Http\Response
     */
    public function show(Donations $donations)
    {
        //
    }


    public function showData($id)
    {
        $donations = Donations::find($id);
        return view('admin.donations.edit', ['donations'=>$donations]); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Donations  $donations
     * @return \Illuminate\Http\Response
     */
    public function edit(Donations $donations)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Donations  $donations
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        
        try {

            $donations = Donations::find($request->id);

            $donations->update([
                'header' => $request['header'],
                'date' => $request['date'],
                'location' => $request['location'],
                'caption' => $request['caption'],
                'url' => $request['url'],
                'amount' => $request['amount'],
            ]);

            $donations->save();
    
            return redirect('donations')->with('message', 'Donation Updated  Succesfully!');
           

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
     * @param  \App\Models\Donations  $donations
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $donations = Donations::find($id);

        $donations->delete('delete from donations where id = ?',[$id]);
        
        return redirect('donations')->with('message','donation deleted successfully');
      
    }
}
