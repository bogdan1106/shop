<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class WishlistController extends Controller
{

    public function like(Request $request)
    {
        //get our product by id
        $product = Product::findOrFail($request->id);
        // get registered user or new guest id
        $userId = User::getUserId();
        $product->userLike($userId);

        $countUserLikes = User::countLikedProducts();
        $countProductLikes = $product->countLikes();
        return [
            'success' => true,
            'countProductLikes' => $countProductLikes,
            'statusLike' => 1,
          'countUserLikes' => $countUserLikes,
            ];
    }


    public function unlike(Request $request)
    {
        //get our product by id
        $product = Product::findOrFail($request->id);
        // get registered user or new guest id
        $userId = User::getUserId();
        $product->userUnlike($userId);
        $countProductLikes = $product->countLikes();
        $countUserLikes = User::countLikedProducts();
        return [
            'success' => true,
            'statusLike' => 0,
            'countProductLikes' => $countProductLikes,
            'countUserLikes' => $countUserLikes,
        ];
    }


    public function wishlist()
    {
       $likedProductIds = User::getAllMemberLikedProducts();
       $products = Product::whereIn('id', $likedProductIds)->get();
        return view('pages.wishlist', compact('products'));
    }


    public function update(Request $request)
    {
        $user = auth()->user();
        $user->activation_code = $request->code;
        $user->save();
        return [
            'success' => true,
            'code' => $user->activation_code,
        ];
    }


}