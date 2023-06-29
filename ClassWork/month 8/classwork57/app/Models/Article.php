<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * @package App\Models
 *
 * @property int       $id
 * @property string    $title
 * @property string    $content
 * @property Comment[] $comments
 * @property User|null $user
 * @property int|null  $user_id
 * @property Carbon    $created_at
 * @property Carbon    $updated_at
 */
class Article extends Model
{
    use HasFactory;

    /** @var string[] $fillable */
    protected $fillable = ['title', 'content'];

    /**
     * @return HasMany
     */
    public function comments(): HasMany
    {
        return $this->hasMany(Comment::class);
    }

    /**
     * @return BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
