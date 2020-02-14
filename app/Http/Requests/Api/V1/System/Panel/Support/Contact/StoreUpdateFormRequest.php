<?php

namespace App\Http\Requests\Api\V1\System\Panel\Support\Contact;

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
        return [

            /* DADOS DO CONTATO
            ================================================== */
            'ip'                                => '',

            'name'                              => 'required',
            'email'                             => 'required|email',
            'cell_phone'                        => 'required',
            'annex'                             => 'required|mimes:pdf,doc,docx,odt,txt|max:500',
            'message'                           => 'required'

        ]; // return

    } // rules

    public function messages()
    {
        return [
            'image.max' => 'O anexo pode ter no máximo 1MB',
        ];
    }

} // StoreUpdateFormRequest
