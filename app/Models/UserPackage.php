<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

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

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function olympiad()
    {
        return $this->belongsTo(Olympiad::class,'product_id');
    }


    public function isExpired()
    {
     	return ($this->expire_at > Carbon::now() && $this->status == 1);
    } 

    public function isAllowedOlympiad()
    {
     	return ($this->type == static::ALLOWED_ONLY_OLYMPIAD || $this->type == static::ALLOWED_OLYMPIAD_AND_MOCKTEST);
    } 

    public function isAllowedMockTest()
    {
     	return $this->type == static::ALLOWED_OLYMPIAD_AND_MOCKTEST;
    } 

}

