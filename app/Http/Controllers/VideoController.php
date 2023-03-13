<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\VideoManage;
use Illuminate\Support\Facades\DB;

class VideoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $videodata = VideoManage::all();
        return view('showVideo',['videodata'=>$videodata]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('addVideo');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $video = new VideoManage();
        $video->video_title = $request->input('vtitle');
        $video->video_type = $request->input('vtype');
        $video->video_path = $request->input('vpath');
        $video->save();
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
        $video = VideoManage::find($id);
        $data = compact('video');
        return view('updateVideo')->with($data);
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
        $video = VideoManage::find($id);
        $video->video_title = $request->input('uvtitle');
        $video->video_type = $request->input('uvtype');
        $video->video_path = $request->input('uvpath');
        $video->save();
        return redirect('/video');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        VideoManage::where('id',$id)->delete();
        return redirect()->back();
    }
}
