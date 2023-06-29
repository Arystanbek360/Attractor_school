<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @property int $id
 * @property User $user
 * @property int $user_id
 * @property string $number
 * @property Carbon $created_at
 * @property Carbon $updated_at
 */
class Phone extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'number'];

    /**
     * @return BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
