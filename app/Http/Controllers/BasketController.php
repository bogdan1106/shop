<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;

class BasketController extends Controller
{
    public function basket()
    {
        $orderId  = session('orderId');
        if(!is_null($orderId))
            //find currend order
            $order = Order::find($orderId);
            else $order = 'empty';
        return view('pages.basket', compact('order'));
    }


    public function basketPlace()
    {
        $order = Order::find(session('orderId'));
        if (!$order)
            return abort(404);
        $price = $order->getTotalPrice();
        return view('pages.order', compact('price'));
    }

    public function add($productId)
    {
        $order = $this->getOrder();

       if ($order->products->contains($productId)){
         $pivotRow = $order->products()->where('product_id', $productId)->first()->pivot;
         $pivotRow->count++;
         $pivotRow->update();
       }
       else $order->products()->attach($productId);

       return redirect(route('basket'));
    }


    public function remove($productId)
    {
        $orderId = session('orderId');
        if (is_null($orderId))
            return redirect(route('basket'));

        $order = Order::find($orderId);
        $pivotRow = $order->products()->where('product_id', $productId)->first()->pivot;
        if ($pivotRow->count < 2) {
           $order->products()->detach($productId);
        }  else {

            $pivotRow->count --;
            $pivotRow->update();
            }

        return redirect(route('basket'));
    }


    public function basketConfirm(Request $request)
    {
        $order = Order::findOrFail(session('orderId'));

        if($order->saveOrder($request)){

            return redirect('/')->with('success', 'Заказ принят' );
        }
        else return 'error';

    }


    public function getOrder()
    {
        $orderId = session('orderId');
        if(!$orderId) {
            $order = Order::create();
            session()->put('orderId', $order->id);
        } else $order = Order::find($orderId);

        return $order;

    }


}
