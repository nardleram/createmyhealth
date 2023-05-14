@extends('layouts.layout')

@section('content')

<h1 class="mt-36 text-3xl font-serif text-center text-slate-800">The Create My Health survey</h1>

@if(Session::has('success'))
    <div class="rounded-md shadow-md mt-4 py-4 px-2 border border-green-700">
        <p class="text-center text-green-600 font-bold">{{ Session::get('success') }}</p>
    </div>
@endif

@if($errors)
   @foreach ($errors->all() as $error)
      <small class="text-red-600">{{ $error }}</small>
  @endforeach
@endif

<div class="mx-auto px-2 md:px-12 lg:px-24 mt-10 text-slate-700">
    <p>Create My Health is a people-led grassroots organisation that promotes and facilitates community and individual health for all people in Leeds and surrounding areas. Our motivating conviction is this: True health flourishes through an integrative approach that considers mind, body and spirit as an interdependent unity.</p>
    <p class="mt-3">To be more effective in our goals, we want to learn from the people of Leeds which priorities they have in terms of control over and opportunities for creating their health. The answers, experiences and knowledge shared will be of invaluable help to us as we focus on what is most important.</p> 
    <p class="mt-3">We greatly appreciate you taking the time to complete this survey!</p>
    <p class="mt-3 italic text-slate-800 text-sm">The information you share by completing this survey will be handled in strictest confidence. We do <strong>not</strong> share data submitted to us with any third party.</p> 
</div>

<form class="cmhSurveyForm" action="{{ route('storeSurveyResponse') }}" method="post" enctype="multipart/form-data">
    @csrf
    
    <h2 class="mb-5 text-xl font-semibold tracking-tight text-center text-slate-800">Create My Health Survey</h2>

    <div class="w-full mb-4">
        <label for="leeds_locale" class="surveyLabel">Where in Leeds do you live?</label>
        <input id="leeds_locale" class="cmhSurveyInput" type="text" name="leeds_locale" value="{{ old('leeds_locale') }}" required>
    </div>

    <div class="flex w-full mb-4 items-center">
        <p class="text-gray-700 text-sm mr-2">Select your age range</p>
        <select id="age_range" name="age_range" class="text-xs font-sans bg-lmhlBgInput pr-8 text-slate-600 rounded-md focus:outline-none focus:border-transparent border-none outline-none" data-sm-select>
            <option value="0-17">Under 18</option>
            <option value="18-25">18-25</option>
            <option value="26-35">26-35</option>
            <option value="36-50">36-50</option>
            <option value="51-65">51-65</option>
            <option value="66-75">66-75</option>
            <option value="76+">76+</option>
        </select>
    </div>

    <div class="w-full mb-4">
        <label for="current_health_status" class="surveyLabel">How do you currently feel about your health?</label>
        <input id="current_health_status" class="cmhSurveyInput" type="text" name="current_health_status" value="{{ old('current_health_status') }}">
    </div>

    <div id="current-health-conditions" class="w-full mb-4">
        <p class="text-sm mb-2">Are you currently dealing with any health conditions?<br><span class="text-gray-500"><em>(Only answer if you are comfortable sharing this information. It will help us to form a clearer idea of which areas of health we should prioritise.)</em></span></p>
        
        <textarea class="cmhSurveyTextarea" rows="5" cols="50" name="current_health_conditions" maxlength=20000>{{ old('current_health_conditions') }}</textarea>
    </div>

    <div id="healthcare-barriers" class="w-full">
        <p class="text-sm mb-2 text-left">Do you have to overcome any barriers when accessing healthcare? (Tick all that apply)</p>

        <div class="flex flex-wrap w-11/12 justify-start items-center mx-auto">
            <div class="w-full sm:w-1/2">
                <label for="healthcare_barriers_none" class="surveyCbxLabel">No barriers</label>
                <input id="healthcare_barriers_none" type="checkbox" name="healthcare_barriers_none" value="t" {{ old('healthcare_barriers_none') == 't' ? 'checked' : '' }}>
            </div>

            <div class="w-full sm:w-1/2">
                <label for="healthcare_barriers_waiting_lists" class="surveyCbxLabel">Yes - waiting lists</label>
                <input id="healthcare_barriers_waiting_lists" type="checkbox" name="healthcare_barriers_waiting_lists" value="t" {{ old('healthcare_barriers_waiting_lists') == 't' ? 'checked' : '' }}>
            </div>

            <div class="w-full sm:w-1/2">
                <label for="healthcare_barriers_costs" class="surveyCbxLabel">Yes - cost</label>
                <input id="healthcare_barriers_costs" type="checkbox" name="healthcare_barriers_costs" value="t" {{ old('healthcare_barriers_costs') == 't' ? 'checked' : '' }}>
            </div>

            <div class="w-full sm:w-1/2">
                <label for="other_barriers" class="surveyCbxLabel">Yes - other barriers (specify below)</label>
                <input id="other_barriers" type="checkbox" name="other_barriers" value="t" {{ old('other_barriers') == 't' ? 'checked' : '' }}>
            </div>
        </div>

        <div class="w-full mt-2 mb-4">
            <label for="healthcare_barriers_other" class="surveyLabel">Enter other barriers to health care</label>
            <textarea id="healthcare_barriers_other" class="cmhSurveyTextarea" rows="5" cols="50" name="healthcare_barriers_other">{{ old('healthcare_barriers_other') }}</textarea>
        </div>
    </div>

    <div id="wider-range-services" class="w-full">
        <p class="text-sm mt-5 mb-2">Create My Health aims to help people access a wider range of health services through a directory of practitioners, and by leveraging funds to support people with the related costs as needed. What would help you most to access a wider range of health services? (Tick all that apply)</p>

        <div class="w-11/12 justify-start items-center mx-auto">
            <div class="w-full flex items-center my-3">
                <input id="more_info_wanted" type="checkbox" name="more_info_wanted" value="t" {{ old('more_info_wanted') == 't' ? 'checked' : '' }}>
                <p class="pLabel">More information about alternative / holistic therapies</p>
            </div>

            <div class="w-full flex items-center my-3">
                <input id="help_w_costs" class="" type="checkbox" name="help_w_costs" value="t" {{ old('help_w_costs') == 't' ? 'checked' : '' }}>
                <p class="pLabel">Help with costs</p>
            </div>

            <div class="w-full flex items-center my-3">
                <input id="support_groups" type="checkbox" name="support_groups" value="t" {{ old('support_groups') == 't' ? 'checked' : '' }}>
                <p class="pLabel mt-0">Supportive group / people who understand my health experiences</p>
            </div>

            <div class="w-full flex items-center my-3">
                <input id="education_workshops" type="checkbox" name="education_workshops" value="t" {{ old('education_workshops') == 't' ? 'checked' : '' }}>
                <p class="pLabel">Accessible education and practical workshops</p>
            </div>

            <div class="w-full flex items-center my-3">
                <input id="more_local" type="checkbox" name="more_local" value="t" {{ old('more_local') == 't' ? 'checked' : '' }}>
                <p class="pLabel">Something more local to me</p>
            </div>

            <div class="w-full flex items-center my-3">
                <input id="accessible_childcare" type="checkbox" name="accessible_childcare" value="t" {{ old('accessible_childcare') == 't' ? 'checked' : '' }}>
                <p class="pLabel">Accessible childcare</p>
            </div>
            
            <div class="w-full flex items-center my-3">
                <input id="practitioners_directory" type="checkbox" name="practitioners_directory" value="t" {{ old('practitioners_directory') == 't' ? 'checked' : '' }}>
                <p class="pLabel">Informative directory of practitioners</p>
            </div>

            <div class="w-full flex items-center my-3">
                <input id="other_services" type="checkbox" name="other_services" value="t" {{ old('other_services') == 't' ? 'checked' : '' }}>
                <p class="pLabel">Other (specify below)</p>
            </div>
        </div>

        <div class="w-full mb-4 mt-2">
            <label for="other_healthcare_assistance" class="surveyLabel">Enter other forms of assistance</label>
            <textarea id="other_healthcare_assistance" class="cmhSurveyTextarea" rows="5" cols="50" name="other_healthcare_assistance">{{ old('other_healthcare_assistance') }}</textarea>
        </div>
    </div>

    <div id="services-offered">
        <p class="text-sm mt-5 mb-2">We offer talks, training, groups and workshops on a wide range of health and wellbeing issues. Please tick those you find interesting and add any suggestions you have in the comment box below.</p>

        <div class="flex flex-wrap w-11/12 justify-start items-center mx-auto">
            <div class="w-full sm:w-1/2">
                <label for="holistic_therapies" class="surveyCbxLabel">Holistic therapies</label>
                <input id="holistic_therapies" type="checkbox" name="holistic_therapies" value="t" {{ old('holistic_therapies') == 't' ? 'checked' : '' }}>
            </div>
            <div class="w-full sm:w-1/2">
                <label for="first_aid" class="surveyCbxLabel">First-aid training</label>
                <input id="first_aid" class="" type="checkbox" name="first_aid" value="t" {{ old('first_aid') == 't' ? 'checked' : '' }}>
            </div>
            <div class="w-full sm:w-1/2">
                <label for="dementia" class="surveyCbxLabel">Dementia</label>
                <input id="dementia" class="" type="checkbox" name="dementia" value="t" {{ old('dementia') == 't' ? 'checked' : '' }}>
            </div>
            
            <div class="w-full sm:w-1/2">
                <label for="home_remedies" class="surveyCbxLabel">Home remedies</label>
                <input id="home_remedies" type="checkbox" name="home_remedies" value="t" {{ old('home_remedies') == 't' ? 'checked' : '' }}>
            </div>
            <div class="w-full sm:w-1/2">
                <label for="mental_health" class="surveyCbxLabel">Mental-health issues</label>
                <input id="mental_health" class="" type="checkbox" name="mental_health" value="t" {{ old('mental_health') == 't' ? 'checked' : '' }}>
            </div>
            <div class="w-full sm:w-1/2">
                <label for="nutritional_health" class="surveyCbxLabel">Nutritional health</label>
                <input id="nutritional_health" class="" type="checkbox" name="nutritional_health" value="t" {{ old('nutritional_health') == 't' ? 'checked' : '' }}>
            </div>

            <div class="w-full sm:w-1/2">
                <label for="homeopathy" class="surveyCbxLabel">Homeopathy</label>
                <input id="homeopathy" type="checkbox" name="homeopathy" value="t" {{ old('homeopathy') == 't' ? 'checked' : '' }}>
            </div>
            <div class="w-full sm:w-1/2">
                <label for="childrens_health" class="surveyCbxLabel">Children’s health</label>
                <input id="childrens_health" class="" type="checkbox" name="childrens_health" value="t" {{ old('childrens_health') == 't' ? 'checked' : '' }}>
            </div>
            <div class="w-full sm:w-1/2">
                <label for="meditation" class="surveyCbxLabel">Meditation</label>
                <input id="meditation" class="" type="checkbox" name="meditation" value="t" {{old('meditation') == 't' ? 'checked' : '' }}>
            </div>
            <div class="w-full sm:w-1/2">
                <label for="other_services" class="surveyCbxLabel">Other (please specify)</label>
                <input id="other_services" class="" type="checkbox" name="other_services" value="t" {{ old('other_services') == 't' ? 'checked' : '' }}>
            </div>
        </div>
        <div class="w-full mt-2 mb-4">
            <label for="other_services_requested" class="surveyLabel">Enter your suggestions here</label>
            <textarea id="other_services_requested" class="cmhSurveyTextarea" rows="5" cols="50" name="other_services_requested">{{ old('other_services_requested') }}</textarea>
        </div>
    </div>

    <div id="i-can-offer">
        <p class="text-sm mt-5 mb-2">Create My Health is a grassroots, people-powered organisation; people will always be at the heart of what we do. If you can contribute in any way at all, we would love to hear from you!<br>I...</p>

        <div class="w-11/12 justify-start items-center mx-auto">
            <div class="w-full flex items-center my-3">
                <input id="offer_practitioner_professional" type="checkbox" name="offer_practitioner_professional" value="t" {{ old('offer_practitioner_professional') == 't' ? 'checked' : '' }}>
                <p class="pLabel">can offer my practitioner or professional services</p>
            </div>
            <div class="w-full flex items-center my-3">
                <input id="offer_skills_volunteer" type="checkbox" name="offer_skills_volunteer" value="t" {{ old('offer_skills_volunteer') == 't' ? 'checked' : '' }}>
                <p class="pLabel">can offer my skills as a volunteer</p>
            </div>
            <div class="w-full flex items-center my-3">
                <input id="offer_space_resources" type="checkbox" name="offer_space_resources" value="t" {{ old('offer_space_resources') == 't' ? 'checked' : '' }}>
                <p class="pLabel">can offer space or other type of resource</p>
            </div>
            
            <div class="w-full flex items-center my-3">
                <input id="leeds_org_offer_help" type="checkbox" name="leeds_org_offer_help" value="t" {{ old('leeds_org_offer_help') == 't' ? 'checked' : '' }}>
                <p class="pLabel">am from a Leeds-based organisation and would like to work with/support Create My Health.</p>
            </div>
            <div class="w-full flex items-center my-3">
                <input id="loan_equipment" type="checkbox" name="loan_equipment" value="t" {{ old('loan_equipment') == 't' ? 'checked' : '' }}>
                <p class="pLabel">can offer or loan equipment</p>
            </div>
        </div>

        <div class="w-full mt-2 mb-4">
            <label for="i_can_help_details" class="surveyLabel">Enter additional details below</label>
            <textarea id="i_can_help_details" class="cmhSurveyTextarea" rows="5" cols="50" name="i_can_help_details">{{ old('i_can_help_details') }}</textarea>
        </div>
    </div>

    <div id="contact-details" class="mb-8">
        <p class="text-sm mt-5 mb-2">Please enter your contact details if you would like to be on our mailing list, or if you have indicated above that you would like to support / work with Create My Health Leeds.</p>

        <div class="w-full mb-4">
            <label for="name" class="surveyLabel">Name</label>
            <input id="name" class="cmhSurveyInput" type="text" name="name" value="{{ old('name') }}">
        </div>

        <div class="w-full mb-4">
            <label for="company" class="surveyLabel">Company</label>
            <input id="company" class="cmhSurveyInput" type="text" name="company" value="{{ old('company') }}">
        </div>

        <div class="w-full mb-4">
            <label for="address1" class="surveyLabel">Address 1</label>
            <input id="address1" class="cmhSurveyInput" type="text" name="address1" value="{{ old('address1') }}">
        </div>

        <div class="w-full mb-4">
            <label for="address2" class="surveyLabel">Address 2</label>
            <input id="address2" class="cmhSurveyInput" type="text" name="address2" value="{{ old('address2') }}">
        </div>

        <div class="w-full mb-4">
            <label for="city_town" class="surveyLabel">City/town</label>
            <input id="city_town" class="cmhSurveyInput" type="text" name="city_town" value="{{ old('city_town') }}">
        </div>

        <div class="w-full mb-4">
            <label for="postcode" class="surveyLabel">Postcode</label>
            <input id="postcode" class="cmhSurveyInput" type="text" name="postcode" value="{{ old('postcode') }}">
        </div>

        <div class="w-full mb-4">
            <label for="email" class="surveyLabel">Email</label>
            <input id="email" class="cmhSurveyInput" type="email" name="email" value="{{ old('email') }}">
        </div>

        <div class="w-full mb-4">
            <label for="phone" class="surveyLabel">Phone number</label>
            <input id="phone" class="cmhSurveyInput" type="text" name="phone" value="{{ old('phone') }}">
        </div>
    </div>

    <button type="submit" class="w-full px-2 py-3 bg-cmhLogoGreen text-lmhlBg1 text-lg cursor-pointer tracking-tight font-bold rounded-lg shadow-md text-center mx-auto hover:shadow-lg">Submit</button>
    
</form>

@endsection