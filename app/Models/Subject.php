<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Standard;
use App\Models\Syllabus;

class Subject extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $dates = [
		'created_at',
		'updated_at',
	
	];

	public function standards()
    {
         return Standard::where('id',$this->class_id);
    }
}
