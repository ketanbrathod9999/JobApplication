<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ApplyJobRequest extends FormRequest
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
        // return [];
        return [
            'first_name' => 'required|string|max:50',
            'last_name' => 'required|string|max:50',
            'designation' => 'required|string|max:50',
            'address1' => 'required|string|max:50',
            'address2' => 'required|string|max:50',
            'email' => 'required|email|string|max:50',
            'phone_number' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'city' => 'required|string|max:50',
            'gender' => 'required',
            'state' => 'required',
            'zip_code' => 'required|numeric|digits:6',
            'relationship_status' => 'required',
            'date_of_birth' => 'required',
            'ssc_board_name' => 'required',
            'ssc_passing_year' => 'required|digits:4|integer|min:2004|max:2022',
            'ssc_percentage' => 'required|numeric|between:0,99.99',
            'hsc_board_name' => 'required',
            'hsc_passing_year' => 'required|digits:4|integer|min:2004|max:2022',
            'hsc_percentage' => 'required|numeric|between:0,99.99',
            'bachelor_course_name' => 'required',
            'bachelor_university' => 'required',
            'bachelor_passing_year' => 'required|digits:4|integer|min:2004|max:2022',
            'bachelor_percentage' => 'required|numeric|between:0,99.99',
            'master_course_name' => 'required',
            'master_university' => 'required',
            'master_passing_year' => 'required|digits:4|integer|min:2004|max:2022',
            'master_percentage' => 'required|numeric|between:0,99.99',
            'languages' => 'required',
            'technologies' => 'required',
            "work_designation.*"  => [
                    'required',
                    'string',   // input must be of type string
            ],
            "from_experience.*"  => [
                'required',
                'string',   // input must be of type string
            ],
            "to_experience.*"  => [
                'required',
                'string',   // input must be of type string
            ],
            'prefered_location' => 'required',
            'notice_period' => 'required',
            'expacted_ctc' => 'required|numeric',
            'current_ctc' => 'required|numeric',
            'department' => 'required',
        ];

        
    }

    public function messages()
    {
        return [
            'work_designation.*.required' => 'The work designation field is required.',
            'from_experience.*.required' => 'The from experience field is required.',
            'to_experience.*.required' => 'The to experience field is required.',
            
        ];
    }
}
