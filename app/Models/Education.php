<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    use HasFactory;

    protected $table = 'educations';
    protected $fillable = [
        'name',
        'icon',
        'slug'
    ];

    const GRADE_SCHOOL = 'Grade School';
    const HIGH_SCHOOL = 'High School';
    const SENIOR_HIGH_SCHOOL = 'Senior High School';
    const COLLEGE = 'College';
    const EDUCATIONS = [
        ['name' => self::GRADE_SCHOOL],
        ['name' => self::HIGH_SCHOOL],
        ['name' => self::SENIOR_HIGH_SCHOOL],
        ['name' => self::COLLEGE],
    ];

    public function records()
    {
        return $this->hasMany(Record::class);
    }
}