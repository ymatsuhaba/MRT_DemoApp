<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;


class ValiDoctorRequest extends Request
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'doctor_name' => 'required',
            'birthplace' => 'messages_place',
            'sex' => 'male_or_female',
            'date_of_birth' => 'message_of_date',
        ];
    }

    public function messages()
    {
        return [
            "required" => '必須項目です',
            "messages_place" => 'アルファベットで入力',
            "male_or_female" => 'male もしくはfemale',
            "message_of_date" => 'YYYY-MM-DDで入力してください'
        ];
    }
}
