<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Models\Olympiad;
use App\Models\Package;

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

    const DOCUMENT_NOT_UPLOADED = 0;
    const VERIFIED              = 1;
    const REJECTED              = 2;
    const UNDER_VERIFICATION    = 3;


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

    public function isVerified()
    {
        return $this->status === static::VERIFIED;
    }

    public function isUnderVerification()
    {
        return $this->status === static::UNDER_VERIFICATION;
    }

    public function isDocumnetNotUploaded()
    {
        return $this->status === static::DOCUMENT_NOT_UPLOADED;
    }

    public function isRejected()
    {
        return $this->status === static::REJECTED;
    }


    public function assignProduct($product_id, $type, $expire_at)
    {
       $userPackage = UserPackage::where('user_id',$this->id)
                                   ->where('product_id',$product_id)->first();
      if ($userPackage) {
         $userPackage->type = $type;
         $userPackage->expire_at = $expire_at;
         $userPackage->save();
      }else{
        UserPackage::create([
            'user_id' => $this->id,
            'product_id' => $product_id,
            'expire_at' => $expire_at,
        ]);
      }
      return true;
    }

    public function isBuyedandNotExpired($olympiad_id)
    {
      $up = UserPackage::find($olympiad_id);
      if (!$up) return false;
      return $up->isExpired();
    }
}
