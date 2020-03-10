<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\CreateNewsAdmin;

class EditNewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news = CreateNewsAdmin::all();
        return view('admin.edit-news-admin') -> with('news', $news);
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $find_news = CreateNewsAdmin::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $news = CreateNewsAdmin::find($id);
        return view('admin.edit-news-admin')->with('news', $news);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $news = CreateNewsAdmin::find($id);

        $save_path_image = $news -> path_image;
        $new_path_image = $request -> file('image_news');
          

        $news -> title_news = $request -> input('title_news');
        $news -> text_news = $request -> input('text_news');
        if(Storage::exists($new_path_image))
            $news -> path_image = $save_path_image;
        else
            $news -> path_image =$request -> input('image_news') ->store('uploads', 'public');

        $news -> save();
        
        return redirect('/news-page-admin')->with('success', 'News edit!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
