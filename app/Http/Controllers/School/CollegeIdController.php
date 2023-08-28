<?php

namespace App\Http\Controllers\School;

use App\Http\Controllers\Controller;
use App\Http\Requests\EducationLevel\StoreCollegeIdRequest;
use App\Models\Record;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CollegeIdController extends Controller
{
    public function store(StoreCollegeIdRequest $request)
    {
        try {
            dd($request->validated());
            DB::transaction(function () use ($request) {
                $record = Record::create([
                    // 'education_id' => Education::
                    $request->validated()
                ]);
                $record->transactions()->attach($record);

                return back()->with('success', 'New record is saved.');
            });
        } catch (\Exception $e) {
            dd($e->getMessage());
            return back();
        }
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