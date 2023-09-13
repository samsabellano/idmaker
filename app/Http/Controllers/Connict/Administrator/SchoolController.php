<?php

namespace App\Http\Controllers\Connict\Administrator;

use App\Http\Controllers\Controller;
use App\Http\Requests\Connict\StoreSchoolRequest;
use App\Http\Requests\Connict\UpdateSchoolRequest;
use App\Http\Traits\Utils;
use App\Models\School;
use Illuminate\Support\Facades\Storage;

class SchoolController extends Controller
{
    use Utils;

    public function index()
    {
        $schools = School::orderBy("created_at", "desc")->get();
        return view('layouts.connict.administrator.schools.index', [
            'schools' => $schools
        ]);
    }

    public function create()
    {
        return view('layouts.connict.administrator.schools.create_school');
    }

    public function store(StoreSchoolRequest $request)
    {
        School::create(array_merge($request->validated(), [
            'logo' => $this->storeImage($request, 'logo', 'public/school-logo'),
        ]));

        return redirect()->route('connict.administrator.school.index');
    }

    public function show(School $school)
    {
        //
    }

    public function edit(School $school)
    {
        return view('layouts.connict.administrator.schools.edit_school', [
            'school' => $school
        ]);
    }

    public function update(UpdateSchoolRequest $request, School $school)
    {
        if (isset($request->validator) && $request->validator->fails()) {
            return back()->withErrors($request->validator)->withInput();
        }

        $school->update(array_merge($request->validated(), [
            'logo' => $this->storeImage($request, 'logo', 'public/school-logo', $school->logo, true),
        ]));

        return back()->with('success', 'School has been updated.');
    }


    public function destroy(School $school)
    {
        $school->delete();
        Storage::delete($school->logo);

        return redirect()->route('connict.administrator.school.index');
    }
}