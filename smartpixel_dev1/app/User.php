<?php

namespace App;

use Illuminate\{Contracts\Auth\MustVerifyEmail, Notifications\Notifiable};
use Laravel\Passport\HasApiTokens;
use Overtrue\LaravelFollow\Followable;
use Overtrue\LaravelLike\Traits\Liker;


/**
 * @method static first()
 * @method static find(int|string|null $id)
 */
class User extends \TCG\Voyager\Models\User implements MustVerifyEmail
{
    use  HasApiTokens, Notifiable, Followable, Liker;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'firstname', 'lastname', 'email', 'password', 'country', 'phone', 'google_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

	public function profile()
	{
		return $this->hasOne(Profile::class);
	}

	public function bank ()
	{
		return $this->hasOne (Banking::class);
	}

    public function payments ()
    {
        return $this->hasMany (Payments::class);
    }

    public function orders() {
	    return $this->hasMany (Orders::class);
    }

    public function earning() {
	    return $this->hasOne (Earning::class);
    }
}
