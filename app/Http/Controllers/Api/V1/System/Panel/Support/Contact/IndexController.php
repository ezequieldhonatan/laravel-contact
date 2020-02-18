<?php

namespace App\Http\Controllers\Api\V1\System\Panel\Support\Contact;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Api\V1\System\Panel\Support\Contact\Contact;
use App\Http\Requests\Api\V1\System\Panel\Support\Contact\StoreUpdateFormRequest;

class IndexController extends Controller
{
    private $contact;
    private $totalPage = 10;
    private $path = 'Api/V1/System/Panel/Support/Contact/Cloud';

    public function __construct(Contact $contact)
    {
        $this->contact = $contact;

        /*
        $this->middleware('auth:api')->except
        (
            [
                'show'
            ]

        ); // except
        */
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        ## CONTATO
        $contacts = $this->contact->getResults( $request->all(), $this->totalPage );

        ## RETORNO
        return response()->json( $contacts );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUpdateFormRequest $request)
    {
        ## RECUPERA
        $data = $request->all();

        ## UPLOAD
        if ( $request->hasFile('annex') && $request->file('annex')->isValid() ) {

            $name               = uniqid( date('dmYHis') ); ## NAME
            $extension          = $request->annex->extension(); ## EXTENSION
            $nameFile           = "{$name}.$extension"; ## NAME + EXTENSION
            $data['annex']      = $nameFile; ## FILE
            $upload             = $request->annex->storeAs($this->path, $nameFile); ## UPLOAD

            ## VERIFICA | UPLOAD
            if ( !$upload )
                return response()->json( ['error' => 'Fail_Upload'], 500);
        }

        ## CADASTRA
        $contact = $this->contact->create( $data );

        ## RETORNA
        return response()->json( $contact, 201 );
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        ## VERIFICA
        if ( !$contact = $this->contact->find( $id ) )
            return response()->json( ['error' => 'Not_Found'], 404 );

        ## RETORNA
        return response()->json( $contact );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreUpdateFormRequest $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

} // IndexController