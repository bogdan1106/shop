<?php

namespace App\Models;

use App\Traits\UploadImage;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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








}
