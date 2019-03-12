<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class JobListingStoreRequest extends FormRequest
{
    public $validator = null;
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
            'title' => 'required|min:5|max:60',
            'description' => 'required|min:20',
            'position' =>'required|min:3',
            'requirements' =>'required|min:10',
            'location' =>'required|min:2',
            'user_id' => 'required|exists:users,id'
        
        ];
    }

    

    protected function failedValidation(\Illuminate\Contracts\Validation\Validator $validator)
    {
   
        $this->validator = $validator;
    }

    
}
