<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Syllabus extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    protected $table = 'syllabuses';

    protected $dates = [
		'created_at',
		'updated_at',
	
	];
}
