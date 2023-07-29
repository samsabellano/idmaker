<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'color', 'slug'];

    const PICTURED = 1;
    const PRINTING = 2;
    const RECEIVED = 3;
    const DELIVERED = 4;
    const CORRECTION = 5;
    const RESOLVED = 6;

    const COLOR = [
        self::PICTURED => '#3F993F',
        self::PRINTING => '#1F75CC',
        self::RECEIVED => '#BD7332',
        self::DELIVERED => '#FF8B8B',
        self::CORRECTION => '#FD6852',
        self::RESOLVED => '#7A7E87'
    ];

    public function transactions()
    {
        return $this->hasMany(Transaction::class);
    }

}