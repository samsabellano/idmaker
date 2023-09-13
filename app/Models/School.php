<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'address',
        'logo',
        'background_image',
        'has_olsis',
        'contact_number',
    ];

    public function transactions()
    {
        return $this->hasMany(Transaction::class);
    }
}