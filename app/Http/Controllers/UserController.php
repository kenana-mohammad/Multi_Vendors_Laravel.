<?php

namespace App\Http\Controllers;
use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Database\Console\DbCommand;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Arr;
use Spatie\Permission\Models\Role;
use App\Notifications\createuser;
use Illuminate\Support\Facades\Notification;
use App\Models\Notifications;

class UserController extends Controller
{
    function __construct()
    {

         $this->middleware('permission:User Mangement|edit User|creat User|delete User', ['only' => ['index']]);
         $this->middleware('permission:creat User', ['only' => ['create', 'store']]);
         $this->middleware('permission:edit User', ['only' => ['edit', 'update']]);
         $this->middleware('permission:delete User', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = User::orderBy('id', 'DESC')->paginate(3);
        return view('backend.users.index', compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $roles = Role::pluck('name', 'name')->all();
        return view('backend.users.create', compact('roles'));
    }

    /**
     * Store a newly created resource in storage
     * 
     */

    public function store(Request $request)
    {   
        $user = new User();
        $input = $request->all();
        $input['password'] = Hash::make($input['password']);
        if($request -> hasFile('image')){
           
            $filename=time().'.'.$request->file('image')->getClientOriginalName();
            $path = $request->file('image')->storeAs('image',$filename,'public');
            $input['image'] = $path;
           
        }
       // return $input;

        $user = User::create($input);
         $user->assignRole($request->input('role'));
         //send notification
         $users=User::all();

         Notification::send($users,new createuser($user->id,$user->name));
         return redirect()->route('user.index')
           ->with('success', 'User created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $user = User::find($id);
        return view('backend.users.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     */

    public function edit(string $id)
    {$user = User::find($id);
        $roles = Role::pluck('name','name')->all();
        $userRole = $user->roles->pluck('name','name')->all();
    
        return view('backend.users.edit',compact('user','roles','userRole'));
   

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $id)
    {

        $input = $request->all();
        if (!empty($input['password'])) {
            $input['password'] = Hash::make($input['password']);
        } else {
            $input = Arr::except($input, array('password'));

        }
        if($request -> hasFile('image')){
           
            $filename=time().'.'.$request->file('image')->getClientOriginalName();
            $path = $request->file('image')->storeAs('image',$filename,'public');
            $input['image'] = $path;
           
        }
    
        $user = User::find($id);

   
       
   
        $user->update($input);
        DB::table('model_has_roles')->where('model_id',$id)->delete();

       // DB::table('roles')->where('id',$id)->delete();
    
        $user->assignRole($request->input('role'));
    
        return redirect()->route('user.index')
        ->with('success', 'User updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

        User::find($id)->delete();
        return redirect()->route('user.index')
        ->with('success', 'User deleted successfully');
}
    //قراءة جميع الاشعارات بزر واحد
    public function markAsRead(){
        $unreadNotifications=  auth()->user()->unreadNotifications;
        if($unreadNotifications){
          $unreadNotifications->markAsRead();
          return redirect()->back();
  
        }
      }
      //قراءة حسب رقم الاشعار 
      public function mark($id){
          
          $notification = auth()->user()->notifications()->where('id', $id)->first();
  
          if ($notification) {
              $notification->markAsRead();
      }
      return redirect()->back();
  
  }
}
