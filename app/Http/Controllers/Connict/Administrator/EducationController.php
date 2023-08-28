<?php

namespace App\Http\Controllers\Connict\Administrator;

use App\Http\Controllers\Controller;
use App\Http\Requests\Connict\StoreEducationRequest;
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
            'slug' => \Str::slug($request->slug)
        ]));

        return back();
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}