<?php

namespace App\Http\Requests\Penitipan;

use Illuminate\Foundation\Http\FormRequest;

class StorePenitipan extends FormRequest
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
            'id_kucing' => 'required',
            'id_user' => 'required',
            'tanggal_titip' => 'required',
            'tanggal_checkout' => 'required',
            'lama_titip' => 'required',
            'layanan' => 'required',
            'antar_jemput' => 'required'
        ];
    }
}
