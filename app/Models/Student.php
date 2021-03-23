<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Student extends User
{

    protected $guarded = ['id'];
    protected $table = 'student_detail';
	

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

    public function detail()
    {
        return $this->hasOne(StudentDetail::class,'user_id');
    }
}
