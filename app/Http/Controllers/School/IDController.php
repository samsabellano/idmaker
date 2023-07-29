<?php

namespace App\Http\Controllers\School;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IDController extends Controller
{
    public function index()
    {
        return view('layouts.school.create_id');
    }
}