<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrderRequest extends FormRequest
{

    public function rules()
    {
        return [
            'name'                 => 'required|min:3|max:30|regex:/^[a-zA-ZşŞıİçÇöÖüÜĞğ]+$/',
            'surname'              => 'required|min:2|max:30|regex:/^[a-zA-ZşŞıİçÇöÖüÜĞğ]+$/',
            'phone'                => 'required|numeric|digits:10',
            'address'              => 'required|min:25',
            'email'                => 'nullable|email',
        ];
    }

    public function messages()
    {
        return [
            'name.required'            => 'İsim alanı boş bırakılamaz',
            'name.max'                 => 'İsim en fazla 30 karakter olabilir',
            'name.min'                 => 'İsim en az 3 karakter olabilir',
            'name.regex'               =>  'Geçerli bir isim giriniz',

            'surname.required'         => 'Soyisim alanı boş bırakılamaz',
            'surname.max'              => 'Soyisim en fazla 30 karakter olabilir',
            'surname.min'              => 'Soyisim en az 2 karakter olabilir',
            'surname.regex'            =>  'Geçerli bir soyisim giriniz',

            'phone.required'           => 'Telefon alanı boş bırakılamaz',
            'phone.max'                => 'Telefon en fazla 11 karakter olabilir',
            'phone.digits'             => 'Telefon numaranız en az 10 karakter olabilir',

            'address.required'         => 'Adres alanı boş bırakılamaz',
            'address.min'              => 'Adres en az 25 karakterden oluşmalıdır',

            'email.email'              => 'Geçerli bir email giriniz',

        ];
    }
}