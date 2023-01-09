<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            'name' => 'min:2',
            'email' => 'email|min:10',
            'message'=> 'min:10|max:200'
        ];
    }

    public function attributes(){
        return [
            'name' => 'your fucking name'
        ];
    }

    public function messages(){
        return [
            'name.min' => 'Нужно больше 2 букав в поле "Имя"',
            'email.min' => 'Нужно больше 10 букав в поле "email"',
            'message.min' => 'Нужно больше 10 букав в поле "Сообщение"',
        ];
    }
}
