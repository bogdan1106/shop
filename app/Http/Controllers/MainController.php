<?php

namespace App\Http\Controllers;

use App\Mail\UserConfirmMail;
use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Redis;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\DB;

class MainController extends Controller
{
    use HasFactory;


    public function test()
    {
        return User::countLikedProducts();

    }


    public function index()
    {
        $products = Product::paginate(5);
        return view('pages.index', compact('products'));
    }


    public function categories()
    {
        $categories = Category::all();
        return view('pages.categories' ,compact('categories'));
    }

      public function category($id)
    {
    $products = Product::where('category_id', $id)->paginate(3);
    return view('pages.category', compact('products'));
    }


    public function single($id)
    {
        $man = auth()->user() ;
        $product = Product::findOrFail($id);
        $city = 'Jonson';
        return view('pages.single',compact('product', 'man', 'city'));
    }








}
