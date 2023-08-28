<?php

namespace App\Http\Controllers\School;

use App\Http\Controllers\Controller;

class IDController extends Controller
{
    public function __invoke()
    {
        return view('layouts.school.create_id');
    }
}