<?php

Route::get('/', function () {
    return view('master');
});

Auth::routes
(
    [

        'register'      => false, // Register
        'verified'      => true, // Verified
        
    ] //

); // Auth routes


/**
 * SYSTEM
*/
Route::group
(
    [
        'namespace'     => 'Api\v1\System\Panel'
    ],
    
    function () 
    {
        /**
         * DASHBOARD (MODULE 1.0)
        */

        /* OVERVIEW (MODULE 1.1)
        ================================================== */
        Route::get('dashboard/overview', 'Dashboard\Overview\IndexController@index')->name('dashboard.overview');


    } // function

); // Route
