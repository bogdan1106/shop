<?php

namespace App\Http\Controllers;

use App\Mail\UserConfirmMail;
use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redis;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\DB;

class MainController extends Controller
{
    use HasFactory;

    public function index()
    {
        $user = User::first();
//
        $products = Product::all();
        return view('pages.index', compact('products'));
    }


    public function categories()
    {
        $categories = Category::all();
        return view('pages.categories' ,compact('categories'));
    }

      public function category($id)
    {
        $products = Product::where('category_id', $id)->get();
    return view('pages.category', compact('products'));
    }


    public function single($id)
    {
        $product = Product::findOrFail($id);
        return view('pages.single',compact('product'));
    }







}
