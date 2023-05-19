<?php

namespace App\Http\Controllers;

use App\Actions\Surveys\CollateData;
use App\Http\Requests\SurveyRequest;
use App\Models\Survey;

class SurveyController extends Controller
{
    public function __construct(private CollateData $collateData)
    {}

    public function index()
    {
        return view('surveys.index')
            ->with(['responses' => $this->collateData->handle(Survey::all())]);
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
