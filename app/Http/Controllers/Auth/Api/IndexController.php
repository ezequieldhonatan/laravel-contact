<?php

namespace App\Http\Controllers\Auth\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;
use App\User;
use App\Http\Requests\Api\V1\System\Panel\Settings\User\StoreUpdateFormRequest;

class IndexController extends Controller
{
    public function __construct(User $user)
    {
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
        $response = $this->getUser();
        
        if ( $response[ 'status' ] != 200 )
            return response()->json( [ $response[ 'response' ] ], $response[ 'status' ] );

        $user = $response[ 'response' ];

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

    public function register(StoreUpdateFormRequest $request, User $user)
    {
        // $data = $request->only( [ 'name', 'email', 'password' ] );
        $data = $request->all();
        
        $data['password'] = bcrypt( $data[ 'password' ] );

        $user->create( $data );

        $this->authenticate();

        return $this->authenticate();

    } // register

    public function update(StoreUpdateFormRequest $request)
    {
        $response = $this->getUser();
        
        if ( $response[ 'status' ] != 200 )
            return response()->json( [ $response[ 'response' ] ], $response[ 'status' ] );

        $user = $response[ 'response' ];

        $user->update( $request->all() );

        return response()->json( compact( 'user' ) );

    } // update

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

        return
        [
            'response'       => $user,
            'status'        => 200,

        ]; // return

    } // getUser

} // IndexController
