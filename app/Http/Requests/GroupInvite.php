<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

/**
 * @bodyParam emails string required The list of the emails to be invited to the group. Example example@gmail.com, jon@snow.com
 * @bodyParam message string  The inivitation message.
 */
class GroupInvite extends FormRequest
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
            'emails' => 'required|string',
            'message' => 'nullable|string',
        ];
    }
}
