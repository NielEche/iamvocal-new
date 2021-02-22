<?php

namespace App\Http\Controllers;

use App\Models\Media;
use Illuminate\Http\Request;

class MediaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $media = Media::all();
        return view('admin.gallery.index', compact(['media']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('eventgallery');
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
            $media = new Media();
           
            $media->event_theme = $request->event_theme;
            $media->event_name = $request->event_name;
            $media->embed = $request->embed;

            if ($request->hasfile('file_path')) {
                $file = $request->file('file_path');
                $extension = $file->getClientOriginalExtension();
                $filename = time() . '.' . $extension;
                $file->move('uploads/eventgallery/', $filename);
                $media->file_path = $filename;
            } else {
                return $request;
                $media->file_path = '';
            }

            $media->save();
     
            return redirect('eventgallery')->with('message', 'Video Added Succesfully!');
            

        } catch (\Throwable $th) {
    
            //throw $th;
            
            return redirect('eventgallery')->with('error', 'OOPS! Something wennt wrong');
        }
 
    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Media  $media
     * @return \Illuminate\Http\Response
     */
    public function show(Media $media)
    {
        return view('admin.gallery.index', compact(['media']));
    }


           /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showData($id)
    {
        $media = Media::find($id);
        return view('admin.gallery.edit', ['media'=>$media]); 
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Media  $media
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        try {

           $media = Media::find($request->id);

           $media->update([
            'event_theme' => $request['event_theme'],
            'event_name' => $request['event_name'],
            'embed' => $request['embed'],
        ]);

           if ($request->hasfile('file_path')) {
            $file = $request->file('file_path');
            $extension = $file->getClientOriginalExtension();
            $file_path = time() . '.' . $extension;
            $file->move('uploads/eventgallery/', $file_path);
            $media->file_path = $file_path;
        } else {
            $media->save();
        }

            $media->save();
    
            return redirect('eventgallery')->with('message', 'Video Updated  Succesfully!');
           

        } catch (\Throwable $th) {
   
            return redirect('eventgallery')->with('error', 'OOPS! Something wennt wrong');
        }

   
   }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Media  $media
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $media = Media::find($id);

        $media->delete('delete from media where id = ?',[$id]);
        
        return redirect('eventgallery')->with('message','Video deleted successfully');
    }
}
