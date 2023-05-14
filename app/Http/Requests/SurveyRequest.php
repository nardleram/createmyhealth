<?php

namespace App\Http\Requests;

use App\Rules\Phonenumber;
use Illuminate\Foundation\Http\FormRequest;

class SurveyRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => 'nullable|string|max:150',
            'company' => 'nullable|string|max:150',
            'email' => 'nullable|email',
            'phone' => ['nullable', 'string', new Phonenumber],
            'address1' => 'nullable|string|max:255',
            'address2' => 'nullable|string|max:255',
            'city_town' => 'nullable|string|max:100',
            'postcode' => 'nullable|string|max:7',
            'age_range' => 'nullable|string|max:5',
            'leeds_locale' => 'nullable|string|max:20',
            'current_health_status' => 'nullable|string|max:255',
            'current_health_conditions' => 'nullable|string|max:255',
            'healthcare_barriers_none' => 'nullable|string|max:1',
            'healthcare_barriers_waiting_lists' => 'nullable|string|max:1',
            'healthcare_barriers_costs' => 'nullable|string|max:1',
            'other_bariers' => 'nullable|string|max:1',
            'healthcare_barriers_other' => 'nullable|string|max:500',
            'more_info_wanted' => 'nullable|string|max:1',
            'help_w_costs' => 'nullable|string|max:1',
            'support_groups' => 'nullable|string|max:1',
            'education_workshops' => 'nullable|string|max:1',
            'more_local' => 'nullable|string|max:1',
            'accessible_childcare' => 'nullable|string|max:1',
            'practitioners_directory' => 'nullable|string|max:1',
            'other_healthcare_assistance' => 'nullable|string|max:500',
            'holistic_therapies' => 'nullable|string|max:1',
            'first_aid' => 'nullable|string|max:1',
            'dementia' => 'nullable|string|max:1',
            'home_remedies' => 'nullable|string|max:1',
            'mental_health' => 'nullable|string|max:1',
            'nutritional_health' => 'nullable|string|max:1',
            'homeopathy' => 'nullable|string|max:1',
            'childrens_health' => 'nullable|string|max:1',
            'meditation' => 'nullable|string|max:1',
            'other_services' => 'nullable|string|max:1',
            'other_services_requested' => 'nullable|string|max:500',
            'offer_practitioner_professional' => 'nullable|string|max:1',
            'offer_skills_volunteer' => 'nullable|string|max:1',
            'offer_space_resources' => 'nullable|string|max:1',
            'leeds_org_offer_help' => 'nullable|string|max:1',
            'loan_equipment' => 'nullable|string|max:1',
            'i_can_help_details' => 'nullable|string|max:1000'
        ];
    }
}
