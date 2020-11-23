<?php

namespace App\Models;

use App\Traits\UploadImage;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    use UploadImage;

    const IMAGE_PATH = '/images/categories/';
    protected $fillable = ['title', 'description'];


    public function products()
    {
        return $this->hasMany(Product::class);
    }


    public static function add($request)
    {
        $category = new self();
        $category->fill($request->all());
        $category->uploadImage($request->image);
        $category->save();
    }


    public function edit($request)
    {
        $this->fill($request->all());
        if ($request->image) {
            $this->uploadImage($request->image);
        }
         $this->save();
    }
}
