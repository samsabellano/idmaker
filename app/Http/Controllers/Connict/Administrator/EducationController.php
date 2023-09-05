<?php

namespace App\Http\Controllers\Connict\Administrator;

use App\Http\Controllers\Controller;
use App\Http\Requests\Connict\StoreEducationRequest;
use App\Http\Requests\Connict\UpdateEducationRequest;
use App\Models\Education;

class EducationController extends Controller
{
    public function index()
    {
        $educations = Education::latest()->get();
        return view('layouts.connict.administrator.educations.index', [
            'educations' => $educations
        ]);
    }

    public function create()
    {
        return view('layouts.connict.administrator.educations.create_education');
    }

    public function store(StoreEducationRequest $request)
    {
        if (isset($request->validator) && $request->validator->fails()) {
            return back()->withErrors($request->validator, 'storeEducation')->withInput();
        }

        Education::create(array_merge($request->validated(), [
            'slug' => \Str::slug($request->name)
        ]));

        return back();
    }

    public function show(Education $education)
    {
        $educations = Education::where('id', '!=', $education->id)->latest()->get();
        return view('layouts.connict.administrator.educations.update_education', [
            'education' => $education,
            'educations' => $educations
        ]);
    }

    public function update(UpdateEducationRequest $request, Education $education)
    {
        if (isset($request->validator) && $request->validator->fails()) {
            return back()->withErrors($request->validator)->withInput();
        }

        $education->update(array_merge($request->validated(), [
            'slug' => \Str::slug($request->name)
        ]));

        return back()->with('success', 'Education successfully updated.');
    }

    public function destroy(Education $education)
    {
        $education->delete();
        return back()->with('success', 'Education successfully deleted,');
    }
}