<?php

Route::get('/', function () {
    return view('welcome');
});

Auth::routes
(
    [
        'register'      => false, // Register
        'verified'      => true, // Verified
    ]
);
