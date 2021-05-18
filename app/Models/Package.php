<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    protected $table = 'packages';


    protected $dates = [
		'created_at',
		'updated_at'
	];


	const OLYMPIAD                            = 0;
	const OLYMPIAD_PLUS_MOCKTEST              = 1;
	const ALL_OLYMPIAD                        = 2;
	const ALL_OLYMPIAD_PLUS_MOCKTEST          = 3;
	const ONLY_MOCKTEST                       = 4;


	public function scopeActive($query)
    {
        return $query->where('status', 1);
    }

}
