<?php

namespace App\Http\Controllers\Auth\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;
use App\User;

class IndexController extends Controller
{
    public function __construct(User $user)
    {
        $this->user = $user;

        $this->middleware
        (
            'auth:api',
            [
                'except' => [ 'authenticate', 'register' ]
            ]
            
        ); // middleware

    } // __construct

    public function authenticate()
    {
        // grab credentials from the request
        $credentials = request()->only('email', 'password');

        try {

            // attempt to verify the credentials and create a token for the user
            if ( !$token = JWTAuth::attempt($credentials) ) {

                return response()->json( [ 'error' => 'invalid_credentials' ], 401 );

            }

        } catch (JWTException $e) {

            // something went wrong whilst attempting to encode the token
            return response()->json( [ 'error' => 'could_not_create_token' ], 500 );

        }

        // Get user authenticated
        $user = auth()->user();

        // all good so return the token
        return response()->json(compact( 'token', 'user' ) );

    } // authenticate

    public function getAuthenticatedUser()
    {
        try {

            if ( !$user = JWTAuth::parseToken()->authenticate() ) {
                return response()->json( [ 'user_not_found' ], 404 );
            }

        } catch (TokenExpiredException $e) {

            return response()->json( ['token_expired'], $e->getStatusCode() );

        } catch (TokenInvalidException $e) {

            return response()->json( ['token_invalid'], $e->getStatusCode() );

        } catch (JWTException $e) {

            return response()->json( ['token_absent'], $e->getStatusCode() );

        }

        // the token is valid and we have found the user via the sub claim
        return response()->json( compact( 'user' ) );

    } // getAuthenticatedUser

    public function refreshToken()
    {
        if ( !$token = JWTAuth::getToken() )
            return response()->json( [ 'error' => 'token_not_send' ], 401 );

        try {

            $token = JWTAuth::refresh();

        } catch (TokenInvalidException $e) {

            return response()->json( [ 'token_invalid' ], $e->getStatusCode() );

        }
        
        return response()->json( compact( 'token' ) );

    } // refreshToken

    public function register(Request $request)
    {
        // $data = $request->only( [ 'name', 'email', 'password' ] );
        $data = $request->all();
        
        $data['password'] = bcrypt( $data[ 'password' ] );

        $this->user->create( $data );

        $this->authenticate();

        return $this->authenticate();

    } // register

} // IndexController
