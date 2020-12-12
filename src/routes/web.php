<?php

use SoftwaresCares\SuperBlog\Http\Controllers\SuperblogController;
use SoftwaresCares\SuperBlog\Http\Controllers\LibraryController;

Route::get('/superblog', [SuperblogController::class, 'index']);

/**
 * Library Plugin -> Handles Media storage 
 * For The superblog package but can also
 * be used to manage the application storage
 * Media(video, audio, text files) -> All 
 * uploads
*/

Route::get('/media', [LibraryController::class, 'media']);




