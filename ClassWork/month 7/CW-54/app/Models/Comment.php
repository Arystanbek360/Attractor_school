<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @package App\Models
 *
 * @property int     $id
 * @property string  $body
 * @property string  $author
 * @property Article $article
 * @property int     $article_id
 * @property Carbon  $created_at
 * @property Carbon  $updated_at
 */
class Comment extends Model
{
    use HasFactory;

    /**
     * @var string[] $fillable
     */
    protected $fillable=['body','author','article_id'];

    /**
     * @return BelongsTo
     */
    public function article():BelongsTo
    {
        return $this->belongsTo(Article::class);
    }
}
