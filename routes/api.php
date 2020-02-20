<?php

use Illuminate\Http\Request;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});



/**
 * JWT AUTH
*/
Route::group
(
    [
        'namespace'                 => 'Api\v1\System\Panel', // namespace
        // 'middleware'                => 'jwt.auth', // middleware
    ],
    
    function () 
    {

        /**
         * JWT AUTH
        */

        /* TOKEN
        ================================================== */
        Route::post('authenticate', 'Auth\JWT\JWTController@authenticate'); ## AUTHENTICATE
        Route::post('update-token', 'Auth\JWT\JWTController@updateToken'); ## UPDATE TOKEN


        /**
         * SETTINGS
        */
              
        /* USER
        ================================================== */
        Route::get('user', 'Auth\JWT\JWTController@getAuthenticatedUser'); ## USER (RECOVER)
        Route::post('user', 'Settings\User\IndexController@store'); ## USER (STORE)
        Route::put('user', 'Settings\User\IndexController@update'); ## USER (UPDATE)
        
    
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
