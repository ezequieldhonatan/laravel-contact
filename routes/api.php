<?php

use Illuminate\Http\Request;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

/**
 * SYSTEM
*/
Route::group
(
    [
        'prefix'            => 'v1', // prefix
        'namespace'         => 'Api\v1\System\Panel', // namespace
    ],
    
    function () 
    {
        /**
         * SUPPORT (MODULE 2.0)
        */

        /* CONTAT (MODULE 2.1)
        ================================================== */
        Route::apiResource('support/contact', 'Support\Contact\IndexController');


    } // function

); // Route
