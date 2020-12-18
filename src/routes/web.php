<?php

use SoftwaresCares\SuperBlog\Http\Controllers\SuperblogController;
use SoftwaresCares\SuperBlog\Http\Controllers\LibraryController;
use SoftwaresCares\SuperBlog\Http\Controllers\UploaderController;

Route::get('/superblog', [SuperblogController::class, 'index']);

/**
 * Library Plugin -> Handles Media storage 
 * For The superblog package but can also
 * be used to manage the application storage
 * Media(video, audio, text files) -> All 
 * uploads
*/

//Media Display
Route::get('media', [LibraryController::class, 'media'])->name('media'); //Media Dashboard Display
Route::get('images', [LibraryController::class, 'images'])->name('images'); //Images Display
Route::get('videos', [LibraryController::class, 'videos'])->name('videos'); //videos Display
Route::get('text', [LibraryController::class, 'text'])->name('text'); //text Display
Route::get('audios', [LibraryController::class, 'audios'])->name('audios'); //audio Display


//library Media Management
Route::post('upload', [UploaderController::class, 'upload'])->name('upload'); //upload files
Route::post('delete/{id}', [LibraryController::class, 'destroy'])->name('delete'); //delete file


//content Editor Plugin
Route::get('editor', [EditorController::class, 'editor'])->name('editor'); //Content Editor






