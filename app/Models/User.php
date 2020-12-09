<?php

namespace App\Models;

use App\Traits\UploadImage;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Redis;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Jetstream\HasTeams;
use Laravel\Sanctum\HasApiTokens;
use Jenssegers\Date\Date;

class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use HasTeams;
    use Notifiable;
    use TwoFactorAuthenticatable;
    use UploadImage;

    const IMAGE_PATH = '/images/users/';


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'profile_photo_url',
    ];

    public static function add($request)
    {
        $user = new static;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->active = 0;
        $user->is_admin = 1;
        $user->activation_code = rand(2355, 93554);
        $user->save();
        return $user;
    }

    public function edit($request)
    {
        $this->name = $request->name;
        $this->email = $request->email;
        $this->city = $request->city;
        $this->address = $request->address;
        $this->post_office_number = $request->post_office_number;
        $this->phone_number = $request->phone_number;

        $this->save();
    }


    public function updateSecretCode()
    {
        $this->activation_code = rand(2355, 93554);
        $this->save();
    }

    public function updateName($name)
    {
        $this->name = $name;
        $this->save();
    }


    public function changePassword($password)
    {
        $this->password = bcrypt($password);
        $this->save();
    }


    public function status()
    {
        if ($this->active == 1) return 'Подтвержен';
        elseif ($this->active == 2) return 'Забанен';
        return 'Не подтвержен';
    }


    public function getUserLikedProductIds()
    {
        $redis = Redis::connection();
        $productsIds =  $redis->smembers("user:{$this->id}:likes");
        return $productsIds;
    }



    public static function countLikedProducts()
    {
        return  count(User::getAllMemberLikedProducts());
    }


    public static function getAllMemberLikedProducts()
    {
        //get register user or guest id
        $userId = self::getUserId();
        //get all liked ids
        $redis = Redis::connection();
        $productsIds =  $redis->smembers("user:{$userId}:likes");

        return $productsIds;
    }


    // if user not register - set cookies or get old.
    public static function setMemberCookies()
    {
        if($_COOKIE['memberId']) return $_COOKIE['memberId'];
        else {
            //set time 3 month
            $time = time() + (86400 * 90);
            setcookie('memberId', rand(234342343, 299879837892), $time);
            $memberId = $_COOKIE['memberId'];
            return $memberId;
        }

    }

    public static function getUserId()
    {
        return $userId = auth()->user() ? auth()->id() : User::setMemberCookies();
    }

    public function getDateRegistration()
    {
        return  Date::parse($this->created_at)->format('j F Y г.');
    }



}
