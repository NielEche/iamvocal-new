<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news = News::all();
        return view('admin.news.index', compact(['news']));
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
            $news = new News();

            $news->title = $request->title;
            $news->date = $request->date;
            $news->details = $request->details;

            if ($request->hasfile('file_path')) {
                $file = $request->file('file_path');
                $extension = $file->getClientOriginalExtension();
                $filename = time() . '.' . $extension;
                $file->move('uploads/news/', $filename);
                $news->file_path = $filename;
            } else {
                return $request;
                $news->file_path = '';
            }

            $news->save();
     
            return redirect('news')->with('message', 'News Added Succesfully!');
            

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
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $news = News::find($id);
        return view('pages.news-page', ['news'=>$news]); 
    }

    public function showData($id)
    {
        $news = News::find($id);
        return view('admin.news.edit', ['news'=>$news]); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function edit(News $news)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        
        try {

            $news = News::find($request->id);

            $news->update([
                'title' => $request['title'],
                'date' => $request['date'],
                'details' => $request['details'],
            ]);

            if ($request->hasfile('file_path')) {
                $file = $request->file('file_path');
                $extension = $file->getClientOriginalExtension();
                $file_path = time() . '.' . $extension;
                $file->move('uploads/news/', $file_path);
                $news->file_path = $file_path;
            } else {
                $news->save();
            }

            $news->save();
    
            return redirect('news')->with('message', 'News Updated  Succesfully!');
           

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
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $news = News::find($id);

        $news->delete('delete from news where id = ?',[$id]);
        
        return redirect('news')->with('message','News deleted successfully');
      
    }
}
