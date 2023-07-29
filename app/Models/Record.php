<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Record extends Model
{
    use HasFactory;

    protected $fillable = [
        'record_type_id',
        'education_id',
        'guardian_id',
        'first_name',
        'middle_name',
        'last_name',
        'suffix',
        'birth_date',
        'course',
        'college',
        'school_year',
        'level',
        'section',
        'school_ID',
        'signature',
        'picture',
    ];

    public function recordType()
    {
        return $this->belongsTo(Record::class);
    }

    public function education()
    {
        return $this->belongsTo(Education::class);
    }

    public function guardian()
    {
        return $this->belongsTo(Guardian::class);
    }

    public function transactions()
    {
        return $this->hasMany(Transaction::class);
    }
}