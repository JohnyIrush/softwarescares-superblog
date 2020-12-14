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

Route::get('media', [LibraryController::class, 'media'])->name('media');
Route::get('images', [LibraryController::class, 'images'])->name('images');
Route::get('videos', [LibraryController::class, 'videos'])->name('videos');
Route::get('text', [LibraryController::class, 'text'])->name('text');
Route::get('audios', [LibraryController::class, 'audios'])->name('audios');

Route::post('upload', [UploaderController::class, 'upload'])->name('upload');




