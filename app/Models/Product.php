<?php

namespace App\Models;

use App\Traits\UploadImage;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Redis;


class Product extends Model
{
    use HasFactory;
    use UploadImage;

    const IMAGE_PATH = '/images/';

    protected $fillable = ['name', 'description', 'discount', 'price'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }



    public function getCategory()
    {
        return Category::where('id', $this->category_id)->first();
    }



    public function orders()
    {
        return $this->belongsToMany(Order::class, 'order_product');
    }



    public function getCountPrice($count)
    {
        return $this->price * $count;
    }



    public static function add($request)
    {
        $product = new static();
        $product->fill($request->all());
        $product->uploadImage($request->image);
        $product->category_id = $request->category_id;
        $product->user_id = 1;
        if($product->save()) return true;
        else return false;
    }



    public function edit($request)
    {
        $this->fill($request->all());
        if ($request->image) $this->uploadImage($request->image);
        $this->category_id = $request->category_id;
        if ($this->save()) return true;
        else return false;
    }



    public function userLike($userId)
    {
        $redis = Redis::connection();
        $redis->sadd("product:{$this->id}:likes", $userId);
        $redis->sadd("user:{$userId}:likes", $this->id);
    }



    public function userUnlike($userId)
    {
        $redis = Redis::connection();
        $redis->srem("product:{$this->id}:likes", $userId);
        $redis->srem("user:{$userId}:likes", $this->id);
    }



    public function countLikes()
    {
        $redis = Redis::connection();
        $count = $redis->scard("product:{$this->id}:likes");
        return $count;
    }


    // check the product add to wishlist or not
    // return 1 or 0
    public function checkProductLike()
    {
       if(auth()->user()) $userId = auth()->id();
       else $userId = User::setMemberCookies();
      $redis = Redis::connection();
      return $redis->sismember("product:{$this->id}:likes", $userId);
    }



    public function getPrice()
    {
        $price = ceil($this->price / 28);
        if ($this->discount) {
             $endPrice = $price - ($price / 100 * $this->discount);
            return ceil($endPrice);
        }
        return $price;
    }


    

}
