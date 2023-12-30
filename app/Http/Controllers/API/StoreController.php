<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\store;
use Illuminate\Support\Facades\Validator;
use App\Models\user;
use App\Models\subcategory;
use App\Models\Category;
use App\Models\Tenant;
use App\Notifications\createstore;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Notification;
class StoreController extends Controller
{
    //
    //يرجع المتاجر مع ال category ,subcategort ,,بحدد اسماء الجداول لي بدي ياهن يظهروا
    public function index(){

        $image=store::select('image');
    return $p=store::with('subcategory:id,name','category:id,name')
    ->
    paginate(3);
    }
        


    public function store(Request $request){
        $validator=Validator::make($request->all(),[
            'name' => 'required | max:191',

              'image'  => 'mimes:jpg,bmp,png',
        
        
        
          ],
          
        
        );
        if($validator->fails()){
            return $validator->errors();
          }
          else{  
            
            $imagePath = null;
                if ($request->hasFile('image')) {
                    $image = $request->file('image');
                    $path = $image->store('images', 'public');
                }}
        $store=store::create([
            'name' => $request->name,
           'tenant'=>$request->tenant,
           'user_id'=>$request->user_id,
           'status'=>$request->status,

           
              'category_id' => $request->category_id,
              'subcategory_id' => $request->subcategory_id,
              
              'image' => $path,
          ]);
        return response([
        'store'=>$store,
        ]);
    }
}
