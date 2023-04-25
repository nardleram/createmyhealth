@extends('layouts.layout')

@section('content')

<h1 class="mt-36 text-3xl font-serif text-center text-slate-800">Apply to affiliate with Create My Health</h1>

<div class="w-full md:w-3/4 mx-auto pt-5 px-5">
    <div class="text-sm md:text-base mb-5">
        <p class="md:leading-loose leading-relaxed text-justify">If our and the PHA’s vision of a more organic, more <em>human</em> way of organising health care and enabling health independence appeals to you, perhaps you would like to join us at Create My Health. Please fill out the form below, and we’ll get in touch with you to discuss how we might help each other.</p>
    </div>
        
    <form action="{{ route('addAffiliate') }}" method="POST" class="w-full mt-12 sm:w-11/12 lg:w-5/6 lg:max-w-xl lg:p-12 mx-auto flex flex-col items-center justify-between p-6 rounded-lg shadow-md">
        @csrf

        <h2 class="mt-2 mb-5 text-2xl font-bold text-center text-slate-800">Application form</h2>

        <div class="w-full mb-4">
            <label for="name" class="cmhLabel">Your name</label>
            <input id="name" class="cmhInput" type="text" name="name">
        </div>

        <div class="w-full mb-4">
            <label for="email" class="cmhLabel">Email</label>
            <input id="email" class="cmhInput" type="email" name="email">
        </div>

        <div class="w-full mb-4">
            <label for="phone" class="cmhLabel">Phone</label>
            <input id="phone" class="cmhInput" type="text" name="phone">
        </div>

        <div class="flex w-4/5 justify-end items-center mx-auto">
            <div class="w-1/2 pr-1 py-2">
                <label for="pract" class="text-lmhlMain1 text-sm tracking-tight -pt-2">Practitioner?</label>
                <input id="pract" class="mt-2" type="checkbox" name="pract">
            </div>
            <div class="w-1/2 pl-1 py-2 text-right">
                <label for="volunteer" class="text-lmhlMain1 text-sm tracking-tight -pt-2">Volunteer?</label>
                <input id="volunteer" class="" type="checkbox" name="volunteer">
            </div>
        </div>
        <small class="text-center mb-4 -mt-2 text-slate-500">(Check both if desired)</small>

        <h3 class="mt-5 mb-2 text-2xl font-serif text-center text-slate-700">Practioners</h3>

        <div class="w-full mb-4">
            <label for="expertise" class="cmhLabel">Expertise</label>
            <input id="expertise" class="cmhInput" type="text" name="expertise">
        </div>

        <div class="w-full mb-4">
            <label for="quals" class="cmhLabel">Professional qualifications</label>
            <input id="quals" class="cmhInput" type="text" name="quals">
        </div>

        <div class="w-full mb-4">
            <label for="reg_body" class="cmhLabel">Regulatory body</label>
            <input id="reg_body" class="cmhInput" type="text" name="reg_body">
        </div>

        <div class="w-full mb-4">
            <label for="b_name" class="cmhLabel">Business name</label>
            <input id="b_name" class="cmhInput" type="text" name="b_name">
        </div>

        <div class="w-full mb-4">
            <label for="website" class="cmhLabel">Website</label>
            <input id="website" class="cmhInput" type="text" name="website">
        </div>

        <div class="w-4/5 mt-4 mb-4 flex justify-between items-center px-3">
            <div>
                <h4 class="text-sm font-semibold text-lmhlMain1 tracking-tight">Liability insurance</h4>
            </div>
            <div>
                <label for="liability_yes" class="text-lmhlMain1 text-sm tracking-tight -pt-2">Yes</label>
                <input id="liability_yes" class="" type="radio" name="liability">
            </div>
            <div>
                <label for="liability_no" class="text-lmhlMain1 text-sm tracking-tight -pt-2">No</label>
                <input id="liability_no" class="" type="radio" name="liability">
            </div>
        </div>

        <h3 class="mt-5 mb-2 text-2xl font-serif text-center text-slate-700">Volunteers</h3>
        <small class="w-full pl-1 mb-1 -mt-1 text-slate-700 text-left">Please describe the skills you have and ways you can help.</small>
        <textarea name="volunteer_skills" id="volunteer_skills" class="w-full text-sm" rows="10"></textarea>

        <div class="mt-5">
            <input id="accept" class="" type="checkbox" name="accept">
            <label for="accept" class="text-lmhlMain1 text-sm tracking-tight -pt-2">I declare that I accept and understand the CMH privacy policy.</label>
        </div>
    </form>
</div>