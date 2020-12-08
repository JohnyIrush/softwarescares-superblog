<?php

use SoftwaresCares\SuperBlog\Http\Controllers\SuperblogController;

Route::get('/superblog', [SuperblogController::class, 'index']);


