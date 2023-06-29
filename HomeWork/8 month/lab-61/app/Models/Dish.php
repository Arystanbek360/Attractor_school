<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @property string $name
 * @property string $description
 * @property string $picture
 * @property Institution $institution
 * @property int $institution_id
 * @property int $price
 */
class Dish extends Model
{
    use HasFactory;

    /**
     * @var string[]
     */
    protected $fillable = ['name', 'description', 'picture', 'price', 'institution_id', 'kitchen_id', 'type_id'];

    /**
     * @return BelongsTo
     */
    public function institution()
    {
        return $this->belongsTo(Institution::class);
    }

    /**
     * @return BelongsTo
     */
    public function kitchen()
    {
        return $this->belongsTo(Kitchen::class);
    }

    /**
     * @return BelongsTo
     */
    public function type()
    {
        return $this->belongsTo(DishType::class);
    }
}
