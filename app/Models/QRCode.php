<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QRCode extends Model
{
    use HasFactory;

    protected $fillable = ['record_id', 'qr_code'];

    public function record()
    {
        return $this->belongsTo(Record::class);
    }
}