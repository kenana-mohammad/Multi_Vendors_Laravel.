<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Product_Category;
use App\Models\store;
class themController extends Controller
{
    //
     //them view
     public function them($id){
        $store=store::find($id);
       
       return view('selectthem.them',['id'=>$store]);
     
    }

//select them
public function select(Request $request,$id){
    
    if($request->get('thems')=='them1'){
        $store=store::find($id);

        $thems=store::find($id);
        $text='them1';
        $thems->thems=$text;
        $thems->save();
        $productcat=Product_Category::where('storeId',$store->id)->get();
        $productCat=Product_Category::select(['photo'])->where('storeId',$store->id)->get();

          return view('Them1.index',['id'=>$store,'productcat'=>$productcat,'productCat'=>$productCat]);
    }

if($request->get('thems')=='them2'){
    $store=store::find($id);

    $thems=store::find($id);
    $text='them2';
    $thems->thems=$text;
    $thems->save();
    $productcat=Product_Category::where('storeId',$store->id)->get();
    $ProductCat=Product_Category::select(['photo'])->where('storeId',$store->id)->get();

      return view('Them2.index',['productcat'=>$productcat,'ProductCat'=>$ProductCat]);

}
if($request->get('thems')=='them3'){
    $store=store::find($id);

    $thems=store::find($id);
    $text='them3';
    $thems->thems=$text;
    $thems->save();
    $l=Product_category::where('storeId',$store->id)->get();
    $ProductCat=Product_Category::select(['photo'])->where('storeId',$store->id)->get();

     }
      return view('Them3.index',['id'=>$store,'l'=>$l,'ProductCat'=>$ProductCat]);

}
//endselect//
////////
//them2
//viewproductthem2
public function productThem2($id){
    $store=store::find($id);

    $prod=Product_category::find($id);
    $product=product::where('ProductCategoryId',$prod->id)->get();
    $Products=product::where('ProductCategoryId',$prod->id)->select('photoslider')->get();

           return view('Them2.product',['product'=>$product,'Products'=>$Products]);

}
///
//viewproductthem1
public function productThem1($id){
    $store=store::find($id);
    $prod=Product_category::find($id);
    
           $products=product::where('ProductCategoryId',$prod->id)->select('photoslider')->get();

    $product=product::where('ProductCategoryId',$prod->id)->get();
                return view('Them1.product',['product'=>$product,'id'=>$store,'products'=>$products]);


}
//viewproductthem3
public function productThem3($id){
    $store=store::find($id);

$prod=Product_category::find($id);
$product=product::where('ProductCategoryId',$prod->id)->get();
$Products=product::where('ProductCategoryId',$prod->id)->select('photoslider')->get();

       return view('Them3.product',['product'=>$product,'id'=>$store,'Products'=>$Products]);

}
//multitenancy
public function themdomain(){

    $store=store::select(['id','Tenant_id'])->first();
    
    
    $e=store::select(['thems'])->first();
    if($e->thems=='them1'){
        $productcat=Product_Category::where('storeId',$store->id)->get();
        $productCat=Product_Category::select(['photo'])->where('storeId',$store->id)->get();
    
          return view('Them1.index',['id'=>$store,'productcat'=>$productcat,'productCat'=>$productCat]);
    
    }
    if($e->thems=='them2'){
        $productcat=Product_Category::where('storeId',$store->id)->get();
        $ProductCat=Product_Category::select(['photo'])->where('storeId',$store->id)->get();
    
        return view('Them2.index',['productcat'=>$productcat,'ProductCat'=>$ProductCat]);
    
    
        }if($e->thems=='them3'){
            $l=Product_Category::where('storeId',$store->id)->get();
            $ProductCat=Product_Category::select(['photo'])->where('storeId',$store->id)->get();
        
             }
              return view('Them3.index',['id'=>$store,'l'=>$l,'ProductCat'=>$ProductCat]);
        
    }

}
