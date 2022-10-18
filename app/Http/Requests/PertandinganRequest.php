<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PertandinganRequest extends FormRequest
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
            //
            'id_tim_home' => 'required',
            'id_tim_away' => 'required',
            'score_home' => 'required|integer',
            'score_away' => 'required|integer',
        ];
    }
}
