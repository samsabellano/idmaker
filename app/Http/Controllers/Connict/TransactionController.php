<?php

namespace App\Http\Controllers\Connict;

use App\Http\Controllers\Controller;
use App\Models\Transaction;

class TransactionController extends Controller
{
    public function index()
    {
        $tranactions = Transaction::orderBy('created_at', 'desc')->get();

        return view('layouts.connict.transaction', [
            'transactions' => $tranactions
        ]);
    }
}