<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'phone'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function student()
    {
        return $this->hasOne(StudentDetail::class);
    }

    public function strength()
    {
       $total = 0;
       $user = $this;

       if ($user->name) $total++;
       if ($user->student && $user->student->standard)  $total++;
       if ($user->student && $user->student->school_name)  $total++;
       if ($user->student && $user->student->id_proof)  $total++;
       if ($user->student && $user->student->id_front)  $total++;
       if ($user->student && $user->student->id_back)  $total++;
       if ($user->student && $user->profile_photo)  $total++;
       if ($user->student && $user->student->date_of_birth)  $total++;
       return (int) round(($total / 7) * 100);
    }
}
