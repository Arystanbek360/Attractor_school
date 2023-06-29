<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * @property string $name
 * @property int $id
 * @property string $picture
 * @property string $description
 * @property integer $delivery
 * @property Carbon $created_at
 * @property Carbon $updated_at
 */
class Institution extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'name',
        'picture',
        'description',
        'category_id',
        'delivery'
    ];

    /**
     * @return BelongsTo
     */
    public function category(): BelongsTo
    {
        return $this->belongsTo(InstitutionCategory::class);
    }

    /**
     * @return HasMany
     */
    public function dishes(): HasMany
    {
        return $this->hasMany(Dish::class);
    }

    /**
     * @return int
     */
    public function averageCheck(): int
    {
        $dishes = $this->dishes()->get();
        $amount = 0;
        if ($dishes->count() == 0) {
            return 0;
        } else {
            foreach ($dishes as $dish) {
                $amount += $dish->price;
            }
            $average = ceil($amount / $dishes->count() / 50) * 50;
            return $average;
        }
    }
}
