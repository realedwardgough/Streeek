<?php

/**
 * Import necessary controllers and models for route definitions.
 */
use Illuminate\Support\Facades\Route;


/**
 * Web Routes for the Application
 */

Route::get('/', function () {
    return view('home');
});
