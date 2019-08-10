<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

/**
 * @bodyParam name string required The name of the group.
 * @bodyParam description string  The description of the group.
 * @bodyParam amount float The fixed amount for saving contribution.
 * @bodyParam max_capacity int The maximum amount of group members.
 * @bodyParam start_date date The date savings would commence for the group
 * @bodyParam private boolean The group type if private or public. Defaults to false.
 */
class CreateGroup extends FormRequest
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
            'name' => 'required|string|unique:groups',
            'description' => 'nullable|string|max:255',
            'amount' => 'required|numeric|between:0,999999999999',
            'start_date' => 'required|date|after:yesterday',
            'max_capacity' => 'nullable|integer',
            'private' => 'boolean'
        ];
    }
}
