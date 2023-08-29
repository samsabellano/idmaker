<?php

namespace App\Http\Controllers\Connict\Administrator;

use App\Http\Controllers\Controller;
use App\Http\Requests\Connict\StoreEducationRequest;
use App\Http\Requests\Connict\UpdateEducationRequest;
use App\Models\Education;
use Illuminate\Http\Request;


class EducationController extends Controller
{
    public function index()
    {
        $educations = Education::latest()->get();
        return view('layouts.connict.administrator.education.index', [
            'educations' => $educations
        ]);
    }

    public function store(StoreEducationRequest $request)
    {
        Education::create(array_merge($request->validated(), [
            'slug' => \Str::slug($request->name)
        ]));

        return back();
    }

    public function show($id)
    {
        //
    }

    public function update(UpdateEducationRequest $request, Education $education)
    {
        if (isset($request->validator) && $request->validator->fails()) {
            $request->session()->put('updateError', $education->id);
            return back()->withErrors($request->validator, 'updateEducation')->withInput();
        }

        $education->update(array_merge($request->validated(), [
            'slug' => \Str::slug($request->name)
        ]));

        $request->session()->forget('updateErrpr');
        return back()->with('success', 'Education successfully updated.');
    }

    public function destroy($id)
    {
        //
    }
}