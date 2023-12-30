<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //show cart
        $cart = session()->get('cart');
        if ($cart) {
            $cart = new Cart($cart);
        } else {
            $cart = null;
        }
        $cate=Category::get();
    // dd( $cart);
          return view('cart.show',compact('cart','cate')); 
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {//put order in db
        if(auth()->check()){
            auth()->user()->orders()->create([ 
    'cart'=>serialize(session()->get('cart'))
            ]);
           return redirect()->route('order.index');
        
          }
          else{
            return redirect()->route('login');
          }
    
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, $id)
    {//add to cart
        $product = Product::find($id);
      if(session()->has('cart')){
       $cart=new Cart(session()->get('cart'));
      }
      else{
       $cart=new Cart();
      }
      $cart->add($product);
      session()->put('cart', $cart);
      //dd( $cart);
      return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show()
    { 
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $id)
    {//update the cart
        $request->validate([
            'qty'=>'numeric|required'
          ]);
          $product = Product::find($id);
          $cart=new Cart(session()->get('cart'));
          $cart->updateQty($product->id,$request->qty);
          session()->put('cart', $cart);
          return redirect()->route('cart.index');

        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( Product $product)
    {//remove from cart
        $cart = new Cart(session('cart'));
        $cart->remove($product->id);
        if ($cart->totalQty <=0) {
          session()->forget('cart');
        } else {
          session()->put('cart', $cart);
        }

    return redirect()->route('cart.index');
    }
}
