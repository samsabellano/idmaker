<?php

namespace App\Http\Controllers\School;

use App\Http\Controllers\Controller;
use App\Models\Transaction;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function index()
    {
        $tranactions = Transaction::orderBy('created_at', 'desc')->get();
        return view('layouts.school.transaction', [
            'transactions' => $tranactions
        ]);
    }
}