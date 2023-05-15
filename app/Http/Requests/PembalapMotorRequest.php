<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PembalapMotorRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'nama_pembalap' => 'required',
            'asal_negara' => 'required',
        ];
    }

    public function messages()
    {
        return[
            'nama_pembalap.required' => 'Nama Pembalap tidak boleh kosong',
            'asal_negara.required' => 'Asal Negara tidak boleh kosong',
        ];
    }
}
