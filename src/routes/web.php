<?php

use SoftwaresCares\SuperBlog\Http\Controllers\SuperblogController;
use SoftwaresCares\SuperBlog\Http\Controllers\LibraryController;
use SoftwaresCares\SuperBlog\Http\Controllers\UploaderController;
use SoftwaresCares\SuperBlog\Http\Controllers\SuperBlogInstallerController;
use SoftwaresCares\SuperBlog\Http\Controllers\ContentManagementSystemController;
use SoftwaresCares\SuperBlog\Http\Controllers\EditorController;
use SoftwaresCares\SuperBlog\Http\Controllers\PostController;

/*
 use Illuminate\Support\Facades\Storage;
 use Illuminate\Http\Request;
 use Illuminate\Http\File;
 
 use SoftwaresCares\SuperBlog\Http\Drivers\UploadStorageDriver;
 use SoftwaresCares\SuperBlog\Models\Media;
 use SoftwaresCares\SuperBlog\Http\Drivers\StorageCapacityDriver;
 use SoftwaresCares\SuperBlog\Http\Drivers\FileManagerDriver;
*/

Route::get('/superblog', [SuperblogController::class, 'index']);

/*
 Route::get('/superblog',function(){
     //return view('superblog::blog');
     return 'superblog';
 });
*/

/**
 * Library Plugin -> Handles Media storage 
 * For The superblog package but can also
 * be used to manage the application storage
 * Media(video, audio, text files) -> All 
 * uploads
*/

//Media Display

Route::get('medialibrary', [LibraryController::class, 'mediaLibrary'])->name('medialibrary'); //Media Dashboard Display
Route::get('images', [LibraryController::class, 'images'])->name('images'); //Images Display
Route::get('videos', [LibraryController::class, 'videos'])->name('videos'); //videos Display
Route::get('text', [LibraryController::class, 'text'])->name('text'); //text Display
Route::get('audios', [LibraryController::class, 'audios'])->name('audios'); //audio Display


/*
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
*/

//library Media Management
Route::post('upload', [UploaderController::class, 'upload'])->name('upload'); //upload files
Route::post('delete/{id}', [LibraryController::class, 'destroy'])->name('delete'); //delete file


/*
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
*/

//content Editor Plugin
Route::get('editor', [EditorController::class, 'editor'])->name('editor'); //Content Editor
/*
 Route::get('/editor',function(){
     return view('superblog::Plugins.Editor.Editor');
 });
*/

//Disk Management
Route::get('capacity', [LibraryController::class, 'capacity'])->name('capacity'); //audio Display
/*
 Route::get('/capacity',function(){
     $capacity = new StorageCapacityDriver();
     $capacity->diskSize();
 });
*/

//Package Installation
Route::get('scriptupdater', [SuperBlogInstallerController::class, 'scriptUpdater'])->name('scriptupdater'); //audio Display


//Content Management System Plugin
Route::get('cms', [ContentManagementSystemController::class, 'cms'])->name('cms'); //CMS Dashboard

//Post Management Plugin

/** Posts **/
Route::post('storepost', [PostController::class, 'store'])->name('storepost'); //Store Post
Route::get('getposts', [PostController::class, 'posts'])->name('getposts'); //Fetch Posts
Route::get('/showpost/{id}', [PostController::class, 'showPost'])->name('showpost'); //Show post
Route::post('/updatepost/{id}', [PostController::class, 'updatePost'])->name('updatepost'); //Updatepost
Route::post('/updatepostcontent/{id}', [PostController::class, 'updatePostContent'])->name('updatepostcontent'); //Update post content
Route::post('/deletepost/{id}', [PostController::class, 'deletePost'])->name('deletepost'); //Delete post

/** Categories **/
Route::get('getcategories', [PostController::class, 'categories'])->name('getcategories'); //Fetch Categories
Route::post('storecategory', [PostController::class, 'storeCategory'])->name('storecategory'); //Store Category
Route::get('/showcategory/{id}', [PostController::class, 'showCategory'])->name('showcategory'); //Show Category
Route::post('/updatecategory/{id}', [PostController::class, 'updateCategory'])->name('updatecategory'); //Update Category
Route::post('/deletecategory/{id}', [PostController::class, 'deleteCategory'])->name('deletecategory'); //Delete Category

//Display Plugin
Route::get('displaypost', [PostController::class, 'displayPost'])->name('displaypost'); //display post