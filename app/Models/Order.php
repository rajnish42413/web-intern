<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    protected $table = 'orders';

    protected $dates = [
		'created_at',
		'updated_at'
	];

    const PAID = 1;
    const UNPAID = 0;
    const FAILED = 2;

	public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function package()
    {
        return $this->belongsTo(Package::class);
    } 

}
