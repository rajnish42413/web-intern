<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Syllabus;

class Standard extends Model
{
    use HasFactory;

    protected $table = 'classes';
    protected $guarded = ['id'];

    protected $dates = [
		'created_at',
		'updated_at',
	
	];


	public function syllabuses()
	{
		 return $this->hasMany(Syllabus::class,'class_id');
	}
}
