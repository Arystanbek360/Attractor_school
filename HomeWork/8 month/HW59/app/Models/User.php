<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

/**
 * @package App\Models
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property boolean $is_admin
 * @property boolean $active
 * @property string $password
 * @property Comment[] $comments
 * @property Post[] $posts
 * @property Carbon $created_at
 * @property Carbon $deleted_at
 * @property Carbon $updated_at
 */
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
        'is_admin',
        'active'
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

    /**
     * @return HasMany
     */
    public function comments(): HasMany
    {
        return $this->hasMany(Comment::class);
    }

    /**
     * @return HasMany
     */
    public function posts(): HasMany
    {
        return $this->hasMany(Post::class);
    }

    /**
     * @param $value
     * @return void
     */
    public function setActiveAttribute($value)
    {
        $this->attributes['active'] = (bool)$value;
    }

    /**
     * @param $value
     * @return string
     */
    public function getActiveAttribute($value)
    {
        return $value ? 'Активен' : 'Не активен';
    }

    /**
     * @param $value
     * @return string
     */
    public function getIsAdminAttribute($value)
    {
        return $value ? 'Админ' : 'Не админ';
    }

    /**
     * @param $value
     * @return void
     */
    public function setIsAdminAttribute($value)
    {
        $this->attributes['is_admin'] = (bool)$value;
    }
}
