<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Cart;
class CartController extends Controller
{
    private $product,$cart;

    public function cartAdd()
    {
        $product_id = $_GET['id'];
        $qty = $_GET['qty'];
        $this->product = Product::find($product_id);
        if ($this->product)
        {
            Cart::add(
                [
                    'id' => $this->product->id,
                    'name' => $this->product->name,
                    'qty' => $qty,
                    'price' => $this->product->offer_price,
                    'options' =>
                        [
                            'min' => 1,
                            'max' => $this->product->stock,
                            'image' => $this->product->image
                        ]
                ]);

            return response(['status'=>'success']);
        }
        elseif ($this->product->stock < 1)
        {
            return back()->with('message','Sorry ! The Product is Out of Stock..');
        }
    }

    public function cartShow()
    {
        return view('website.cart.show');
    }

    public function cartDelete()
    {
        $rowId = $_GET['id'];
        Cart::remove($rowId);
        return response(['status'=>'deleted']);
    }

    public function cartDestroy()
    {
        Cart::destroy();
//        return back()->with('message','All Products Deleted From Cart.');
        return response(['status'=>'success']);
    }

    public function cartUpdate()
    {
        $rowId = $_GET['rowId'];
        $qty = $_GET['qty'];
        Cart::update($rowId, $qty);
        return response(['status'=>'update']);
    }
}
