<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


/**
 * @package App\Models
 *
 * @property int $id
 * @property string $body
 * @property User|null $user
 * @property int|null $user_id
 * @property Carbon $created_at
 * @property Carbon $updated_at
 */
class Note extends Model
{
    use HasFactory;

    /**
     * @var string[]
     */
    protected $fillable = ['body'];

    /**
     * @return BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
