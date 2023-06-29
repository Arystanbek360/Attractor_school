<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

/**
 * @property int $id
 * @property string $name
 * @property string $description
 * @property User[] $users
 * @property Carbon $created_at
 * @property Carbon $updated_at
 */
class Role extends Model
{
    public const ROLES = ['Модератор', 'Админ', 'Владелец', 'Комментатор', 'Участник'];

    use HasFactory;

    protected $fillable = ['name', 'description'];

    /**
     * @return BelongsToMany
     */
    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class);
    }
}
