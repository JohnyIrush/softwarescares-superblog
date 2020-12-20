<?php

/*use SoftwaresCares\SuperBlog\Http\Controllers\SuperblogController;
use SoftwaresCares\SuperBlog\Http\Controllers\LibraryController;
use SoftwaresCares\SuperBlog\Http\Controllers\UploaderController;*/

use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Illuminate\Http\File;

use SoftwaresCares\SuperBlog\Http\Drivers\UploadStorageDriver;
use SoftwaresCares\SuperBlog\Models\Media;
use SoftwaresCares\SuperBlog\Http\Drivers\StorageCapacityDriver;
use SoftwaresCares\SuperBlog\Http\Drivers\FileManagerDriver;

//Route::get('/superblog', [SuperblogController::class, 'index']);

Route::get('/superblog',function(){
    //return view('superblog::blog');
    return 'superblog';
});

/**
 * Library Plugin -> Handles Media storage 
 * For The superblog package but can also
 * be used to manage the application storage
 * Media(video, audio, text files) -> All 
 * uploads
*/

//Media Display
/*
Route::get('media', [LibraryController::class, 'media'])->name('media'); //Media Dashboard Display
Route::get('images', [LibraryController::class, 'images'])->name('images'); //Images Display
Route::get('videos', [LibraryController::class, 'videos'])->name('videos'); //videos Display
Route::get('text', [LibraryController::class, 'text'])->name('text'); //text Display
Route::get('audios', [LibraryController::class, 'audios'])->name('audios'); //audio Display
*/
Route::get('/media',function(){
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
});


Route::get('/images',function(){
    $images = Media::where('type', 'image')->get();
    $type = 'image';
    
    return view('superblog::Plugins.Library.Media.media')->with(['images'=>$images,'type'=>$type]);
});


Route::get('videos',function(){
    $videos = Media::where('type', 'video')->get();
    $type = 'video';
    return view('superblog::Plugins.Library.Media.media')->with(['videos'=>$videos,'type'=>$type]);
});




Route::get('/text',function(){
    $text = Media::where('type', 'text')->get();
    $type = 'text';
    return view('superblog::Plugins.Library.Media.media')->with(['text'=>$text,'type'=>$type]);
});

Route::get('/audios',function(){
    $audios = Media::where('type', 'audio')->get();
    $type = 'audio';
    return view('superblog::Plugins.Library.Media.media')->with(['audios'=>$audios,'type'=>$type]);
});

//library Media Management
/*
Route::post('upload', [UploaderController::class, 'upload'])->name('upload'); //upload files
Route::post('delete/{id}', [LibraryController::class, 'destroy'])->name('delete'); //delete file
*/
Route::get('/upload',function(Request $request)
{
    //dd($request);
   $uploadDriver = new UploadStorageDriver($request->file('upload'));
   $uploadDriver->uploadToDisk();
});

Route::get('/delete/{id}',function($id){
    $media = new FileManagerDriver($id);
    $media->deleteFile();
});
//content Editor Plugin
//Route::get('editor', [EditorController::class, 'editor'])->name('editor'); //Content Editor
Route::get('/editor',function(){
    return view('superblog::Plugins.Editor.Editor');
});

//Disk Management
//Route::get('capacity', [LibraryController::class, 'capacity'])->name('capacity'); //audio Display

Route::get('/capacity',function(){
    $capacity = new StorageCapacityDriver();
    $capacity->diskSize();
});
