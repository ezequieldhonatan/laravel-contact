<?php

namespace App\Http\Controllers\Api\V1\System\Panel\Auth\Traits;

use JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;

trait AuthTrait
{
    public function authenticate()
    {
        // CREDENCIAIS
        $credentials = request()->only( 'email', 'password' );

        try {

            // attempt to verify the credentials and create a token for the user
            if ( !$token = JWTAuth::attempt($credentials) ) {

                return response()->json( [ 'error' => 'invalid_credentials' ], 401 );

            }

        } catch (JWTException $e) {

            // something went wrong whilst attempting to encode the token
            return response()->json( [ 'error' => 'could_not_create_token' ], 500 );

        }

        // AUTENTICA
        $user = auth()->user();

        // RETORNA
        return response()->json(compact( 'token', 'user' ) );

    } // authenticate

    public function getUser()
    {
        try {

            if ( !$user = JWTAuth::parseToken()->authenticate() ) {
                // return response()->json( [ 'user_not_found' ], 404 );
                return
                [
                    'response'       => 'user_not_found',
                    'status'        => 404,

                ]; // return
            }

        } catch (TokenExpiredException $e) {

            // return response()->json( [ 'token_expired' ], $e->getStatusCode() );
            return
            [
                'response'       => 'token_expired',
                'status'        => $e->getStatusCode(),

            ]; // return

        } catch (TokenInvalidException $e) {

            // return response()->json( [ 'token_invalid' ], $e->getStatusCode() );
            return
            [
                'response'       => 'token_invalid',
                'status'        => $e->getStatusCode(),

            ]; // return

        } catch (JWTException $e) {

            // return response()->json( [ 'token_absent' ], $e->getStatusCode() );
            return
            [
                'response'       => 'token_absent',
                'status'        => $e->getStatusCode(),

            ]; // return

        } // try | catch

        // RETORNA
        return
        [
            'response'       => $user,
            'status'        => 200,

        ]; // return

    } // getUser   

} // AuthTrait
