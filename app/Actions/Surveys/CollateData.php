<?php

namespace App\Actions\Surveys;

class CollateData
{
    public function __construct(
        public $healthcareBarriers = [
            'healthcare_barriers_none' => 0,
            'healthcare_barriers_waiting_lists' => 0,
            'healthcare_barriers_costs' => 0,
            'healthcare_barriers_other' => 0
        ],
        public $healthServicesWanted = [
            'more_info_wanted' => 0,
            'help_w_costs' => 0,
            'support_groups' => 0,
            'education_workshops' => 0,
            'more_local' => 0,
            'accessible_childcare' => 0,
            'practitioners_directory' => 0,
            'other_healthcare_services' => 0
        ],
        public $healthEducation = [
            'holistic_therapies' => 0,
            'first_aid' => 0,
            'dementia' => 0,
            'home_remedies' => 0,
            'mental_health' => 0,
            'nutritional_health' => 0,
            'homeopathy' => 0,
            'meditation' => 0,
            'other_educational_services' => 0
        ],
        public $contribute = [
            'offer_practitioner_professional' => 0,
            'offer_skills_volunteer' => 0,
            'offer_space_resources' => 0,
            'leeds_org_offer_help' => 0,
            'loan_equipment' => 0,
            'i_can_help_details' => 0
        ]
    )
    {}

    public function handle($surveys)
    {
        foreach($surveys as $survey) {
            //Barriers
            $survey->healthcare_barriers_none
            ? ++$this->healthcareBarriers['healthcare_barriers_none']
            : null;

            $survey->healthcare_barriers_waiting_lists
            ? ++$this->healthcareBarriers['healthcare_barriers_waiting_lists']
            : null;

            $survey->healthcare_barriers_costs
            ? ++$this->healthcareBarriers['healthcare_barriers_costs']
            : null;

            $survey->healthcare_barriers_other
            ? ++$this->healthcareBarriers['healthcare_barriers_other']
            : null;

            //Services wanted
            $survey->more_info_wanted
            ? ++$this->healthServicesWanted['more_info_wanted']
            : null;

            $survey->help_w_costs
            ? ++$this->healthServicesWanted['help_w_costs']
            : null;

            $survey->support_groups
            ? ++$this->healthServicesWanted['support_groups']
            : null;

            $survey->education_workshops
            ? ++$this->healthServicesWanted['education_workshops']
            : null;

            $survey->more_local
            ? ++$this->healthServicesWanted['more_local']
            : null;

            $survey->accessible_childcare
            ? ++$this->healthServicesWanted['accessible_childcare']
            : null;

            $survey->practitioners_directory
            ? ++$this->healthServicesWanted['practitioners_directory']
            : null;

            $survey->other_healthcare_services
            ? ++$this->healthServicesWanted['other_healthcare_services']
            : null;

            //Education
            $survey->holistic_therapies
            ? ++$this->healthEducation['holistic_therapies']
            : null;

            $survey->first_aid
            ? ++$this->healthEducation['first_aid']
            : null;

            $survey->dementia
            ? ++$this->healthEducation['dementia']
            : null;

            $survey->home_remedies
            ? ++$this->healthEducation['home_remedies']
            : null;

            $survey->mental_health
            ? ++$this->healthEducation['mental_health']
            : null;

            $survey->nutritional_health
            ? ++$this->healthEducation['nutritional_health']
            : null;

            $survey->homeopathy
            ? ++$this->healthEducation['homeopathy']
            : null;

            $survey->meditation
            ? ++$this->healthEducation['meditation']
            : null;

            $survey->other_educational_services
            ? ++$this->healthEducation['other_educational_services']
            : null;

            //Contribution offered
            $survey->offer_practitioner_professional
            ? ++$this->contribute['offer_practitioner_professional']
            : null;

            $survey->offer_skills_volunteer
            ? ++$this->contribute['offer_skills_volunteer']
            : null;

            $survey->offer_space_resources
            ? ++$this->contribute['offer_space_resources']
            : null;

            $survey->leeds_org_offer_help
            ? ++$this->contribute['leeds_org_offer_help']
            : null;

            $survey->loan_equipment
            ? ++$this->contribute['loan_equipment']
            : null;

            $survey->i_can_help_details
            ? ++$this->contribute['i_can_help_details']
            : null;
        }

        return $this;
    }
}