@extends('layouts.layout')

@section('content')

@if(Session::has('success'))
    <div id="successMess" 
        class="fixed top-28 right-8 w-1/3 py-2 px-4 bg-cmhLogoGreen border border-green-500 text-white text-sm font-semibold rounded-md shadow-md z-50 cursor-pointer"
        onclick="closeSuccMess()">
        {{Session::get('success')}}
    </div>
@endif

<h1 class="mt-36 text-3xl font-serif text-center text-slate-800">Register your interest with Create My Health</h1>

<div class="w-full md:w-3/4 mx-auto pt-5 px-5">
    <div class="text-sm md:text-base mb-5">
        <p class="md:leading-loose leading-relaxed text-justify">If our and The PHA’s vision of a more organic, more <em>human</em> way of organising health care and empowering health independence appeals to you, perhaps you would like to help. Please complete the form below, and we’ll get in touch with you to discuss how we might collaborate.</p>
    </div>
        
    <form action="{{ route('addAffiliate') }}" method="POST" class="cmhForm">
        @csrf

        <h2 class="mb-5 text-xl font-semibold tracking-tight text-center text-slate-800">Your contact details and message</h2>

        @if ($errors->any())
            <div class="w-full bg-red-700 border border-red-600 py-5 px-3 rounded-md shadow-md mb-4">
                    @foreach ($errors->all() as $error)
                        <p class="text-white text-sm text-center font-semibold">{{ $error }}</p>
                    @endforeach
            </div>
        @endif

        <div class="w-full mb-4">
            <label for="name" class="cmhLabel">Your name</label>
            <input id="name" class="cmhInput" type="text" name="name" value="{{ old('name') }}" required>
        </div>

        <div class="w-full mb-4">
            <label for="email" class="cmhLabel">Email</label>
            <input id="email" class="cmhInput" type="email" name="email" value="{{ old('email') }}" required>
        </div>

        <div class="w-full mb-4">
            <label for="phone" class="cmhLabel">Phone</label>
            <input id="phone" class="cmhInput" type="text" name="phone" value="{{ old('phone') }}">
        </div>

        <div class="flex w-4/5 justify-end items-center mx-auto">
            <div class="w-1/2 pr-1 py-2">
                <label for="pract" class="text-lmhlMain1 text-sm tracking-tight -pt-2">Practitioner?</label>
                <input id="pract" class="mt-2" type="checkbox" name="pract" {{ old('pract') == 'checked' ? 'checked' : '' }} value="checked">
            </div>
            <div class="w-1/2 pl-1 py-2 text-right">
                <label for="volunteer" class="text-lmhlMain1 text-sm tracking-tight -pt-2">Volunteer?</label>
                <input id="volunteer" class="" type="checkbox" name="volunteer" {{ old('volunteer') == 'checked' ? 'checked' : '' }} value="checked">
            </div>
        </div>
        <small class="text-center mb-4 -mt-2 text-slate-500">(Check both if desired)</small>

        <div class="w-full mb-4 mt-8">
            <textarea name="message" class="w-full bg-lmhlBgInput focus:border-lmhlMain1 focus:ring-1 focus:ring-lmhlMain1 focus:shadow-md p-2 border-b border-slate-400 outline-none resize-none overflow-auto text-sm rounded-xl text-slate-600 tracking-tighter" rows="10" placeholder="Enter your message here..." required></textarea>
        </div>

        <button type="submit" class="w-full px-2 py-3 bg-cmhLogoGreen text-lmhlBg1 text-lg cursor-pointer tracking-tight font-bold rounded-lg shadow-md text-center mx-auto hover:shadow-lg">Submit</button>
    </form>
</div>

<script>
    function closeSuccMess() {
        let el = document.getElementById('successMess')
        el.classList.toggle('hidden')
    }
</script>