<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Group extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|string|unique:groups',
            'description' => 'nullable|string|max:255',
            'amount' => 'required|numeric|between:0,999999999999',
            'start_date' => 'required|date|after:yesterday',
            'max_capacity' => 'nullable|integer',
            'private' => 'boolean'
        ];
    }
}
