<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    protected $fillable = ['name'];
    public $timestamps = false;

    const SUPER_ADMIN = 1;
    const SCHOOL_ADMIN = 2;
    const STAFF = 3;
    const STUDENT = 4;

    private $role_label = 'role:';

    public static function superAdmin(): string
    {
        return self::$role_label . self::SUPER_ADMIN;
    }

    public static function schoolAdmin(): string
    {
        return self::$role_label . self::SCHOOL_ADMIN;
    }

    public function staff(): string
    {
        return self::$role_label . self::STAFF;
    }

    public function student()
    {
        return self::$role_label . self::STUDENT;
    }

    public function users()
    {
        return $this->hasMany(User::class);
    }

    public function records()
    {
        return $this->hasMany(Record::class);
    }
}