<?php

namespace App\Http\Requests\Api\V1\System\Panel\Settings\User;

use Illuminate\Foundation\Http\FormRequest;

class StoreUpdateFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $id = $this->segment(2);

        return [
            
            /* DADOS DO USUÁRIO
            ================================================== */
            'name'                              => 'required|min:3|max:100',
            'email'                             => "required|email|max:150|unique:users,email,{$id},id",
            'password'                          => 'required|min:8|max:15',
    
        ]; // return
    
    } // rules
    
} // StoreUpdateFormRequest
