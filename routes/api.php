<?php

use Illuminate\Http\Request;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});



/**
 * JWT Auth
*/
Route::group
(
    [
        'namespace'                 => 'Auth\Api',
        'middleware'                => 'jwt.auth',
    ],
    
    function () 
    {
    
        /**
         * JWT Auth
        */
        Route::post('auth', 'IndexController@authenticate'); ## AUTH
        Route::post('auth-refresh', 'IndexController@refreshToken'); ## AUTH REFRESH
        Route::get('user', 'IndexController@getAuthenticatedUser'); ## USER
        
    
    } // function

); // Route



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
