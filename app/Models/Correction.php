<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Correction extends Model
{
    use HasFactory;

    protected $fillable = [
        'transaction_id',
        'status_id',
        'remarks',
        'description'
    ];

    public function transaction()
    {
        return $this->belongsTo(Transaction::class);
    }

    public function status()
    {
        return $this->belongsTo(Status::class);
    }
}