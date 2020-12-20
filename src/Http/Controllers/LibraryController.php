<?php

namespace SoftwaresCares\SuperBlog\Http\Controllers;

use Illuminate\Http\Request;
use SoftwaresCares\SuperBlog\Models\Media;
use SoftwaresCares\SuperBlog\Http\Drivers\StorageCapacityDriver;
use SoftwaresCares\SuperBlog\Http\Drivers\FileManagerDriver;

class LibraryController extends Controller
{
    /**
     * Displays all Media in our 
     * Library -> For Management(
     * Delete, Rename, Creation, edit etc) 
     */
    public function mediaLibrary()
    {
        $type = "all";
        $media = new StorageCapacityDriver();
        //dd($media->getTotalFilesCount());

        return view('superblog::Plugins.Library.Media.media')->with(
            [
                'type'=>$type,
                'totalFilesCount' => $media->getTotalFilesCount(),
                'imagesCount' => $media->getTotalImagesCount(),
                'audiosCount' => $media->getTotalAudiosCount(),
                'videosCount' => $media->getTotalVideosCount(),
                'textCount' => $media->getTotalTextFilesCount()
                ]);
    }

    /**
     * return all images
     */
    public function images()
    {
        $images = Media::where('type', 'image')->get();
        $type = 'image';
        
        return view('superblog::Plugins.Library.Media.media')->with(['images'=>$images,'type'=>$type]);
    }

    /**
     * return all text files
     */
    public function text()
    {
        $text = Media::where('type', 'text')->get();
        $type = 'text';
        return view('superblog::Plugins.Library.Media.media')->with(['text'=>$text,'type'=>$type]);
    }

    /**
     * return all images
     */
    public function videos()
    {
        $videos = Media::where('type', 'video')->get();
        $type = 'video';
        return view('superblog::Plugins.Library.Media.media')->with(['videos'=>$videos,'type'=>$type]);
    }

    /**
     * return all images
     */
    public function audios()
    {
        $audios = Media::where('type', 'audio')->get();
        $type = 'audio';
        return view('superblog::Plugins.Library.Media.media')->with(['audios'=>$audios,'type'=>$type]);
    }

     /**
     * Get Storage Capacity and media
     * capacity coverage
     */
    public function capacity()
    {
        $capacity = new StorageCapacityDriver();
        $capacity->diskSize();
    }


    /**
     * 
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
        $media = new FileManagerDriver($id);
        $media->deleteFile();
    }
}
