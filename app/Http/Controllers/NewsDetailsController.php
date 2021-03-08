<?php

namespace App\Http\Controllers;

use App\Models\NewsDetails;
use App\Models\News;
use Illuminate\Http\Request;

class NewsDetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $newsDetails = NewsDetails::all();
        return view('admin.newsdetails.index', compact(['newsDetails']));
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
            $newsDetails = new NewsDetails();

            $newsDetails->news_id = $request->news_id;
            $newsDetails->details = $request->details;

            if ($request->hasfile('file_path')) {
                $file = $request->file('file_path');
                $extension = $file->getClientOriginalExtension();
                $filename = time() . '.' . $extension;
                $file->move('uploads/news/', $filename);
                $newsDetails->file_path = $filename;
            } else {
                $newsDetails->file_path = '';
            }

            $newsDetails->save();
     
            return redirect()->back()->with('message', 'News Details Added Succesfully!');
            

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
     * @param  \App\Models\NewsDetails  $newsDetails
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $newsDetails = NewsDetails::where('news_id', $id)->get(); 
        $news = News::where('id', $id)->get();
        return view('pages.news-page',compact('newsDetails'), compact('news'))->with('id', $id); 
    }


    public function showNews($id)
    {
        $newsDetails = NewsDetails::where('news_id', $id)->get(); 
        $news = News::where('id', $id)->get();
        return view('admin.newsdetails.index',compact('newsDetails'), compact('news'))->with('id', $id);
    }

    public function showData($id)
    {
        $newsDetails = NewsDetails::find($id);
        return view('admin.newsdetails.edit', ['newsDetails'=>$newsDetails]); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\NewsDetails  $newsDetails
     * @return \Illuminate\Http\Response
     */
    public function edit(NewsDetails $newsDetails)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\NewsDetails  $newsDetails
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        
        try {

            $newsDetails = NewsDetails::find($request->id);

            $newsDetails->update([
                'news_id' => $request['news_id'],
                'details' => $request['details'],
            ]);

            if ($request->hasfile('file_path')) {
                $file = $request->file('file_path');
                $extension = $file->getClientOriginalExtension();
                $file_path = time() . '.' . $extension;
                $file->move('uploads/news/', $file_path);
                $newsDetails->file_path = $file_path;
            } else {
                $newsDetails->save();
            }


            $newsDetails->save();
    
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
     * @param  \App\Models\NewsDetails  $newsDetails
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $newsDetails = NewsDetails::find($id);

        $newsDetails->delete('delete from newsdetails where id = ?',[$id]);
        
        return redirect('news')->with('message','News Detail deleted successfully');
      
    }
}
