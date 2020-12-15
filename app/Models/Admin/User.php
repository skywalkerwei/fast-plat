<?php
/**
 * Created by PhpStorm.
 * User: zengfanwei
 * Date: 2018/11/7
 * Time: 14:31
 */

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Tymon\JWTAuth\Contracts\JWTSubject;

class User extends Authenticatable  implements JWTSubject
{
    use Notifiable;


    protected $table = 'auth_admin';

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password'
    ];

    public static $instance;

    public static function getInstance()
    {
        if(!self::$instance) {
            self::$instance = new self();
        }

        return self::$instance;
    }


    /**
     * Get the identifier that will be stored in the subject claim of the JWT.
     *
     * @return mixed
     */
    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    /**
     * Return a key value array, containing any custom claims to be added to the JWT.
     *
     * @return array
     */
    public function getJWTCustomClaims()
    {
        return ['role' => 'admin'];
    }
}
