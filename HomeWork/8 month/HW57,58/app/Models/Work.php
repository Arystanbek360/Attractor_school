<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

/**
 * @property int $id
 * @property string $work
 * @property string $description
 * @property integer $rating
 * @property Photograph $photograph
 * @property int $photograph_id
 */
class Work extends Model
{
    use HasFactory;

    /**
     * @var string[]
     */
    protected $fillable = ['picture', 'photograph_id', 'description', 'rating'];

    /**
     * @return BelongsTo
     */
    public function photograph(): BelongsTo
    {
        return $this->belongsTo(Photograph::class);
    }
}
