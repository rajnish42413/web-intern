<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserPackage extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    protected $table = 'user_packages';

    protected $dates = [
		'created_at',
		'updated_at'
	];

	const ALLOWED_ONLY_OLYMPIAD = 0;
	const ALLOWED_OLYMPIAD_AND_MOCKTEST = 1;

}
