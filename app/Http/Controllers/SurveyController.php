<?php

namespace App\Http\Controllers;

use App\Http\Requests\SurveyRequest;
use App\Models\Survey;

class SurveyController extends Controller
{
    public function index()
    {
        return view('survey.index')->with(['responses' => Survey::all()]);
    }

    public function store(SurveyRequest $request)
    {
        Survey::create($request->all());

        return redirect()->route('survey')->with('success', 'Survey responses stored successfully!');
    }

    public function create()
    {
        return view('surveys.create');
    }
}
