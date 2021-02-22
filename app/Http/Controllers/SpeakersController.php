<?php

namespace App\Http\Controllers;

use App\Models\Speakers;
use App\Models\Events;
use Illuminate\Http\Request;

class SpeakersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $speakers = Speakers::all();
        return view('admin.speakers.index', compact(['speakers']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('eventspeakers');
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
            $speakers = new Speakers();

            $speakers->name = $request->name;
            $speakers->date = $request->date;
            $speakers->venue = $request->venue;
            $speakers->time = $request->time;
            $speakers->event_id = $request->event_id;
            $speakers->flickr = $request->flickr;
            $speakers->embed = $request->embed;
            $speakers->register = $request->register;
            $speakers->bio = $request->bio;

            if ($request->hasfile('file_path')) {
                $file = $request->file('file_path');
                $extension = $file->getClientOriginalExtension();
                $filename = time() . '.' . $extension;
                $file->move('uploads/speakers/', $filename);
                $speakers->file_path = $filename;
            } else {
                return $request;
                $speakers->file_path = '';
            }


            $speakers->save();
     
            return redirect()->back()->with('message', 'Event Added Succesfully!');
            

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
     * @param  \App\Models\Speakers  $speakers
     * @return \Illuminate\Http\Response
     */
    public function show(Speakers $speakers)
    {
        return view('admin.speakers.index', compact(['speakers']));
    }


    public function showSpeaker($id)
    {

        $speakers = Speakers::where('event_id', $id)->get(); 
        return view('admin.speakers.index',compact('speakers'))->with('id', $id);
    }

    public function showData($id)
    {
        $speakers = Speakers::find($id);
        return view('admin.speakers.edit', ['speakers'=>$speakers]); 
    }

    public function showall($id)
    {
        $speakers = Speakers::where('event_id', $id)
        ->join('events', 'events.id', 'event_id')
        ->select('events.*' , 'speakers.*')
        ->get();
        $eventss = Events::where('id', $id)->get();
        return view('pages.event-details', compact('speakers'), compact('eventss')) ; 
    }

    public function displaySpeakers($id)
    {
        $speakers = Speakers::find($id);
        return view('pages.speakers.speakers', ['speakers'=>$speakers]); 
    }

    public function displaynow($id)
    {
        $speakers = Speakers::find($id);
        return view('pages.speakers.speakers', ['speakers'=>$speakers]); 
    }

    public function displaynoww($id)
    {
        $speakers = Speakers::find($id);
        return view('pages.speakers.speakers', ['speakers'=>$speakers]); 
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Speakers  $speakers
     * @return \Illuminate\Http\Response
     */
    public function edit(Speakers $speakers)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Speakers  $speakers
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        
         try {

            $speakers = Speakers::find($request->id);

            
            if ($request->hasfile('file_path')) {
                $file = $request->file('file_path');
                $extension = $file->getClientOriginalExtension();
                $file_path = time() . '.' . $extension;
                $file->move('uploads/speakers/', $file_path);
                $speakers->file_path = $file_path;
            } else {
                $speakers->save();
            }
    
            
             $speakers->update([

                'name' => $request['name'],
                'date' => $request['date'],
                'venue' => $request['venue'],
                'time' => $request['time'],
                'event_id' => $request['event_id'],
                'flickr' => $request['flickr'],
                'embed' => $request['embed'],
                'register' => $request['register'],
                'bio' => $request['bio'],
             ]);

             $speakers->save();
     
             return redirect('events' )->with('message', 'Event Updated  Succesfully!');
            

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
     * @param  \App\Models\Speakers  $speakers
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $speakers = Speakers::find($id);

        $speakers->delete('delete from speakers where id = ?',[$id]);
        
        return redirect('events')->with('message','Speaker deleted successfully');
      
    }
}
