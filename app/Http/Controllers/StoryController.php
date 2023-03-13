<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\StoryManage;
use Illuminate\Support\Facades\DB;

class StoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $storydata = StoryManage::all();
        return view('showStory',['storydata'=>$storydata]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('addStory');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $story = new StoryManage();
        $story->story_name = $request->input('sname');
        $story->story_type = $request->input('stype');
        $story->story_path = $request->input('spath');
        $story->save();
        return redirect()->back();
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
        $story = StoryManage::find($id);
        $data = compact('story');
        return view('updateStory')->with($data);
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
        $story = StoryManage::find($id);
        $story->story_name = $request->input('usname');
        $story->story_type = $request->input('ustype');
        $story->story_path = $request->input('uspath');
        $story->save();
        return redirect('/story');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        StoryManage::where('id',$id)->delete();
        return redirect()->back();
    }
}
