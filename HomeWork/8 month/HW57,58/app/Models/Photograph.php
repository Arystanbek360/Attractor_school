<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * @property string $name
 * @property int $id
 * @property int $user_id
 * @property string $about
 * @property string $picture
 * @property string $experience
 * @property string $number
 * @property string $email
 * @property string $address
 * @property Work[] $works
 *  */
// * @property string $review
class Photograph extends Model
{
    use HasFactory;

    /**
     * @var string[]
     */
    protected $fillable = ['name', 'user_id', 'about', 'picture', 'experience', 'number', 'email', 'address'];

    /**
     * @return HasMany
     */
    public function works(): HasMany
    {
        return $this->hasMany(Work::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
