<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'total'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function items()
    {
        return $this->hasMany(CartItem::class);
    }

    public function calculateTotal()
    {
        $total = 0;
        foreach ($this->items as $item) {
            $total += $item->quantity * $item->price;
        }
        $this->total = $total;
        $this->save();
    }

    public function removeItem($id)
    {
        dump('hello');
        foreach ($this->items as $index => $item) {
            if ($item['dish_id'] == $id) {
                unset($this->items[$index]);
                break;
            }
        }
        $this->calculateTotal();
    }

}
