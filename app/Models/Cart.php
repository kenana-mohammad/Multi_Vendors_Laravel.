<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    public $items=[];
    public $totalQty;
    public $totalPrice;
    public function __construct(Cart $cart = null) {
        if($cart){
        $this->items = $cart->items;
        $this->totalQty=$cart->totalQty;
        $this->totalPrice=$cart->totalPrice;
    }
    else{
        $this->items = [];
        $this->totalQty=0;
        $this->totalPrice=0;
    }
}
//add items 
public function add($product){
    $item=[
     'id'=>$product->id,
     'name'=>$product->name,
     'price'=>$product->price,
     'qty'=>0,
     'photo'=>$product->photo,
     'hasoffer'  => $product->hasoffer,
     'discounted_price'  => 0,
     'removed'  => false,
    
     ];
    $discount= $product->price-($product->discount*$product->price/100);
    if(!array_key_exists($product->id,$this->items)){
     $this->items[$product->id]=$item;
     $this->totalQty +=1;
     if($product->hasoffer==1){
        $this->totalPrice +=$discount;
        $this->items[$product->id]['discounted_price'] = $discount;}
        else{
         $this->totalPrice +=$product->price;
        }

    }
    else{
     $this->totalQty +=1;

     if($product->hasoffer==1){
        $this->totalPrice +=$discount;
        $this->items[$product->id]['discounted_price'] = $discount;}
        else{
         $this->totalPrice +=$product->price;
        }
    }
    $this->items[$product->id]['qty'] +=1;



}
//this is the updateQty function
public function updateQty($id,$qty){
    $this->totalQty -=$this->items[$id]['qty'];
    if ($this->items[$id]['hasoffer']==1){
      $this->totalPrice -=$this->items[$id]['qty']* $this->items[$id]['discounted_price'];
    } else{
    $this->totalPrice -=$this->items[$id]['qty']* $this->items[$id]['price'];}
    $this->items[$id]['qty']=$qty;
    $this->totalQty +=$qty;
    if ($this->items[$id]['hasoffer']==1){
      $this->totalPrice +=$qty* $this->items[$id]['discounted_price'];
    }
    else{
    $this->totalPrice +=$qty * $this->items[$id]['price'];}

}
//this is the remove items function
public function remove($id) {
    if (array_key_exists($id, $this->items)) {
      $this->items[$id]['removed'] = true;
      $item = $this->items[$id];
      $this->totalQty -= $item['qty'];
      if ($item['hasoffer']==1) {
        $discountedPrice = $item['price'] - ($item['discounted_price'] * $item['price'] / 100);
        $this->totalPrice -= $discountedPrice * $item['qty'];
      } else {
        $this->totalPrice -= $item['price'] * $item['qty'];
      }
      unset($this->items[$id]);
    }
  }


}
