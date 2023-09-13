<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Record extends Model
{
    use HasFactory;

    protected $fillable = [
        'role_id',
        'id_type',
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
        'student_id_number',
        'signature',
        'guardian_full_name',
        'guardian_contact_number',
        'guardian_complete_address'
    ];

    public function role()
    {
        return $this->belongsTo(Role::class);
    }

    public function transactions()
    {
        return $this->hasMany(Transaction::class);
    }
}