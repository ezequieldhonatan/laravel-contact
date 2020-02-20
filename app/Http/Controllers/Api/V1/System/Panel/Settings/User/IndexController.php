<?php

namespace App\Http\Controllers\Api\V1\System\Panel\Settings\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\User;
use App\Http\Requests\Api\V1\System\Panel\Settings\User\StoreUpdateFormRequest;
use App\Http\Controllers\Api\V1\System\Panel\Auth\Traits\AuthTrait;

class IndexController extends Controller
{
    use AuthTrait;

    public function __construct()
    {
        $this->middleware
        (
            'auth:api',
            [
                'except' => [ 'store' ]
            ]
            
        ); // middleware

    } // __construct

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUpdateFormRequest $request, User $user)
    {
        // RECUPERA
        $data = $request->all();
        
        // PASSWORD
        $data['password'] = bcrypt( $data[ 'password' ] );
        
        // CADASTRA
        $user->create( $data );
        
        // AUTENTICA
        $authenticate();
        
        // RETORNA
        return $this->authenticate();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreUpdateFormRequest $request)
    {
        // RECUPERA
        $response = $this->getUser();
        
        // VERIFICA
        if ( $response[ 'status' ] != 200 )
            return response()->json( [ $response[ 'response' ] ], $response[ 'status' ] );
        
        // STATUS
        $user = $response[ 'response' ];
        
        // ATUALIZA
        $user->update( $request->all() );
        
        // RETORNA
        return response()->json( compact( 'user' ) );
    }

} // IndexController
