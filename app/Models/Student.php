<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Student extends User
{
	

   public static function boot()
    {
        parent::boot();
        static::addGlobalScope('latest', function ($q) {
            $q->latest();
        });

        static::addGlobalScope('students', function ($q) {
            $q->where('role', 'student');
        });
    }
}
