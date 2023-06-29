<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;

/**
 * @property int $id
 * @property string $name
 * @property Article[] $articles
 * @property User[] $users
 */
class Country extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    /**
     * @return HasManyThrough
     */
    public function articles(): HasManyThrough
    {
        return $this->hasManyThrough(Article::class, User::class);
    }

    /**
     * @return BelongsToMany
     */
    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class);
    }
}
