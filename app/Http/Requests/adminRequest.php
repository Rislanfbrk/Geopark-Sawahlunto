<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class adminRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */


    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */

    public function messages()
    {
        return [
            'dest_name.required' => 'Isi Form Nama',
            'dest_category.required' => 'Pilih Kategori',
            'dest_location.required' => 'Isi Form Lokasi',
            'dest_desc.required' => 'Tambahkan Deskripsi',
            'image_task_1.required' => 'Tambahkan Foto',
        ];
    }
    public function rules()
    {
        return [
            'dest_name' => 'required',
            'dest_category' => 'required',
            'dest_location' => 'required',
            'dest_desc' => 'required',
            'image_task_1' => 'required',
        ];
    }
}
