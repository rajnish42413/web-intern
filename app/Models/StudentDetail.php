<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentDetail extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    protected $table = 'student_detail';

    protected $dates = [
		'created_at',
		'updated_at',
	
	];
}
