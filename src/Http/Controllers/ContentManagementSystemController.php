<?php

namespace SoftwaresCares\SuperBlog\Http\Controllers;

use Illuminate\Http\Request;
use SoftwaresCares\SuperBlog\Models\Media;
use SoftwaresCares\SuperBlog\Http\Drivers\StorageCapacityDriver;

class ContentManagementSystemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function cms()
    {
        $type = "all";
        $images = Media::where('type', 'image')->get();
        $text = Media::where('type', 'text')->get();
        $videos = Media::where('type', 'video')->get();
        $audios = Media::where('type', 'audio')->get();
        $media = new StorageCapacityDriver();

        return view('superblog::Plugins.CMS.cms')->with(
            [
                'type'=>$type,
                'images'=>$images,
                'text'=>$text,
                'videos'=>$videos,
                'audios'=>$audios,
                'totalFilesCount' => $media->getTotalFilesCount(),
                'imagesCount' => $media->getTotalImagesCount(),
                'audiosCount' => $media->getTotalAudiosCount(),
                'videosCount' => $media->getTotalVideosCount(),
                'textCount' => $media->getTotalTextFilesCount()
                ]);
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
        //
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
        //
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
