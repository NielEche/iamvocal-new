<?php

namespace App\Http\Controllers;

use App\Models\Events;
use Illuminate\Http\Request;

class EventsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = Events::all();
        return view('admin.events.index', compact(['events']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('events');
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
            $events = new Events();

            $events->event_name = $request->event_name;
            $events->event_theme = $request->event_theme;
            $events->date = $request->date;
            $events->time = $request->time;
            $events->venue = $request->venue;
            $events->about = $request->about;

            if ($request->hasfile('file_path')) {
                $file = $request->file('file_path');
                $extension = $file->getClientOriginalExtension();
                $filename = time() . '.' . $extension;
                $file->move('uploads/events/', $filename);
                $events->file_path = $filename;
            } else {
                return $request;
                $events->file_path = '';
            }


            if ($request->hasfile('file_path1')) {
                $file = $request->file('file_path1');
                $extension = $file->getClientOriginalExtension();
                $filename = time() . '.' . $extension;
                $file->move('uploads/events/', $filename);
                $events->file_path1 = $filename;
            } else {
                return $request;
                $events->file_path1 = '';
            }

            $events->save();
     
            return redirect('events')->with('message', 'Event Added Succesfully!');
            

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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Events $events)
    {
        return view('admin.events', compact(['events']));
    }

       /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showData($id)
    {
        $events = Events::find($id);
        return view('admin.events.edit', ['events'=>$events]); 
    }

    public function showall($id)
    {
        $events = Events::find($id);
        return view('pages.event-details', ['events'=>$events]); 
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

            $events = Events::find($request->id);

            if ($request->hasfile('file_path')) {
                $file = $request->file('file_path');
                $extension = $file->getClientOriginalExtension();
                $file_path = time() . '.' . $extension;
                $file->move('uploads/events/', $file_path);
                $events->file_path = $file_path;
            } else {
                $events->save();
            }

            if ($request->hasfile('file_path1')) {
                $file = $request->file('file_path1');
                $extension = $file->getClientOriginalExtension();
                $file_path1 = time() . '.' . $extension;
                $file->move('uploads/events/', $file_path1);
                $events->file_path1 = $file_path1;
            } else {
                $events->save();
            }        
        
          
             $events->update([
                 'event_name' => $request['event_name'],
                 'event_theme' => $request['event_theme'],
                 'date' => $request['date'],
                 'time' => $request['time'],
                 'venue' => $request['venue'],
                 'about' => $request['about'],
             ]);

             $events->save();
     
             return redirect('events')->with('message', 'Event Updated  Succesfully!');
            

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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $events = Events::find($id);

        $events->delete('delete from events where id = ?',[$id]);
        
        return redirect('events')->with('message','Event deleted successfully');
      
    }

}
