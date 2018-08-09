<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreLinkRequest;
use App\Link;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class LinkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $links = Link::all();
        return view('index',compact('links'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreLinkRequest  $request)
    {
        $link= new \App\Link;
        $link->id=$request->get('id');
        $link->title=$request->get('title');
        $link->url=$request->get('url');
        $link->description=$request->get('description');
       
        $link->save();
        
        return redirect('links')->with('success', 'Information has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $link = \App\Link::find($id);
        return view('edit',compact('link','id'));
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
         $link= \App\Link::find($id);
        $link->title=$request->get('title');
        $link->url=$request->get('url');
        $link->description=$request->get('description');
    
        $link->save();
        return redirect('links');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $link = \App\Link::find($id);
        $link->delete();
        return redirect('links')->with('success','Information has been  deleted');
    }
}
