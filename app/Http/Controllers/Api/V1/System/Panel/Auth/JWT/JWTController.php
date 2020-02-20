<?php

namespace App\Http\Controllers\Api\V1\System\Panel\Auth\JWT;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;
use App\Http\Controllers\Api\V1\System\Panel\Auth\Traits\AuthTrait;

class JWTController extends Controller
{
    use AuthTrait;

    public function __construct()
    {
        $this->middleware
        (
            'auth:api',
            [
                'except' => [ 'authenticate' ]
            ]
            
        ); // middleware

    } // __construct

    public function getAuthenticatedUser()
    {
        // RECUPERA
        $response = $this->getUser();
        
        // VERIFICA
        if ( $response[ 'status' ] != 200 )
            return response()->json( [ $response[ 'response' ] ], $response[ 'status' ] );

        // STATUS
        $user = $response[ 'response' ];

        // RETORNA
        return response()->json( compact( 'user' ) );

    } // getAuthenticatedUser

    public function updateToken()
    {
        if ( !$token = JWTAuth::getToken() )
            return response()->json( [ 'error' => 'token_not_send' ], 401 );

        try {

            $token = JWTAuth::refresh();

        } catch (TokenInvalidException $e) {

            return response()->json( [ 'token_invalid' ], $e->getStatusCode() );

        }
        
        // RETORNA
        return response()->json( compact( 'token' ) );

    } // updateToken

} // JWTController
