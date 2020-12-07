<?php

/**
 * Having Problem With Laravel 8
 * Controller namespacing
 * use SoftwaresCares\SuperBlog\Http\Controllers\SuperBlogController;
 * Route::get('/superblog','SuperBlogController@index');
 * Route::group(['namespace'=>'SoftwaresCares\SuperBlog\Http\Controllers'],function(){
 *   Route::get('/superblog','SuperBlogController@index')->name('superblog');
 *});

 * The package will use closure
 * Until the problem is fixed
*/



Route::get('/superblog',function(){
    return view('superblog::blog');
}); 

