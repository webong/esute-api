<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

/**
 * @bodyParam name string required The name of the group.
 * @bodyParam description string  The description of the group.
 * @bodyParam amount float The fixed amount for saving contribution.
 * @bodyParam max_capacity int The maximum amount of group members.
 * @bodyParam private boolean The group type if private or public. Defaults to false.
 */
class UpdateGroup extends FormRequest
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
            'max_capacity' => 'nullable|integer',
            'private' => 'boolean'
        ];
    }
}
