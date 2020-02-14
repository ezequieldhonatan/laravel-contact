<?php

namespace App\Models\Api\V1\System\Panel\Support\Contact;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable =
    [
        /* DADOS DO CONTATO
        ================================================== */
        'ip', 'name', 'email', 'cell_phone', 'annex', 'message'

    ]; // protected fillable

    public function getResults($data, $total)
    {
        if 
        (
            !isset( $data['ip'] ) &&
            !isset( $data['name'] ) &&
            !isset( $data['email'] ) &&
            !isset( $data['cell_phone'] )
        )

        return $this->orderBy('id', 'DESC')->paginate($total);

        return $this->where
        (
            function ($query) use ($data)
            {
                if ( isset( $data['ip'] ) )
                    $query->where('ip', $data['ip'] );

                if ( isset( $data['name'] ) )
                    $query->where('name', $data['name'] );
                    
                if ( isset( $data['email'] ) )
                    $query->where('email', $data['email'] );

                if ( isset( $data['cell_phone'] ) )
                    $query->where('cell_phone', $data['cell_phone'] );
                    
            } // function

        ) // return

        ->orderBy('id', 'DESC')
        ->paginate($total);

    } // getResults

} // Contact
