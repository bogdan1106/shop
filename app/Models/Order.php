<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;


    public function products()
    {
        return $this->belongsToMany(Product::class, 'order_product')
            ->withPivot('count')->withTimestamps();
    }

    public function getTotalPrice()
    {
        $sum = null;
        foreach ($this->products as $product)
        {
            $sum += $product->getCountPrice($product->pivot->count);
        }
        return $sum;
    }


    public function saveOrder($request)
    {
        if ($this->status == 0) {
            $this->name = $request->name;
            $this->phone = $request->phone;
            $this->status = 1;
            $this->save();
            session()->forget('orderId');
            return true;
        } return false;
    }
}
