<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Package;

class Olympiad extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $dates = [
		'created_at',
		'updated_at',
	];

    protected $casts = [
        'exam_at' => 'date',
    ];


	public function scopeActive($query)
    {
        return $query->where('status', 1);
    }

    public function packages()
    {
        return $this->hasMany(Package::class, 'product');
    }

    public function notMockPackages()
    {
       return $this->packages()->where('type', '!=', Package::ONLY_MOCKTEST);
    }


    public function mockPackages()
    {
       return $this->packages()->where('type', Package::ONLY_MOCKTEST);
    }

}
