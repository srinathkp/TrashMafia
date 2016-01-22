<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class CreateComplaintRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return yes;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
           
       
        'name' => 'required|unique:posts|max:255',
        'contact_no' => 'required|min:8',
        'city' => 'required|min:3',
        'locality' => 'required',
        'street' => 'required',
        'pincode' => 'required',
        'comments' => '',
 
        ];
    }
}
