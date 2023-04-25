<?php

namespace App\Http\Controllers;

use App\Http\Requests\AffiliateRequest;
use App\Mail\InterestRegistered;
use Illuminate\Support\Facades\Mail;

class AffiliateController extends Controller
{
    public function index()
    {
        return view('affiliates.index');
    }

    public function send(AffiliateRequest $request)
    {
        Mail::to('createmyhealth@proton.me')->send(new InterestRegistered($request));

        return redirect()->route('affiliate')->with('success', 'Details emailed successfully. We will be in touch shortly! (Click box to dismiss.)');
    }
}
