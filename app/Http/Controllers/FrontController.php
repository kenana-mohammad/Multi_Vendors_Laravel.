<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\store;
use App\Models\subcategory;
use App\Models\user;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;

class FrontController extends Controller
{
    //
    //details-store
    public function index($id){
        $store=store::find($id);
    
        $category=category::get();
        return view('front-end.details-store',['cate'=>$category,'stores'=>$store]);
    }
   /*view store active*/
public function show($id){

    $cat=category::find($id);
    $subcategory=subcategory::where('id',$id)->first();
    $catt=$subcategory->category;
    $store=store::where('subcategory_id','=',$subcategory->id)->where('status','active')->paginate(10);
    $categorys=category::get();
    return view('front-end.show',['store'=>$store,'cate'=>$categorys,'cat'=>$catt,'subcategory'=>$store,'subcategory'=>$subcategory]);
}

//view_catrgory
public function showcategory(){
    $category=category::paginate(10);
    return view('front-end.categories',['categorys'=>$category,'cat'=>$category,'cate'=>$category]);
}
//subcategory
public function showsubcategory($id){
    $categorys=category::find($id);
    $category=category::get();

    $sub=subcategory::where('category_id',$categorys->id)->paginate(10);
    return view('front-end.subcategories',['subcategory'=>$sub,'cate'=>$category,'cat'=>$category]);
}
//show allstore(admin)
public function showstores($id){


    $cat=category::find($id);

    $subcategory=subcategory::where('id',$id)->first();
    $c=$subcategory->category;
    $store=store::where('subcategory_id',$subcategory->id)->paginate(10);
    $categorys=category::get();
   

return view('front-end.show-stores',['store'=>$store,'cate'=>$categorys,'cat'=>$c,'subcategory'=>$store,'subcategory'=>$subcategory]);
}
}