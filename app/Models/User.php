<?php
  
  namespace App\Models;
    
  use Illuminate\Contracts\Auth\MustVerifyEmail;
  use Illuminate\Database\Eloquent\Factories\HasFactory;
  use Illuminate\Foundation\Auth\User as Authenticatable;
  use Illuminate\Notifications\Notifiable;
  use Laravel\Sanctum\HasApiTokens;
  use Spatie\Permission\Traits\HasRoles;

  class User extends Authenticatable
  {
      use HasApiTokens, HasFactory, Notifiable, HasRoles;
    
      /**
       * The attributes that are mass assignable.
       *
       * @var array
  
       */
      protected $fillable = [
        'name',
        'email',
        'password',
        'photo',
        'phone',
        'address',
        'role',
        'status',
        'device_token'
      ];
    
      /**
       * The attributes that should be hidden for serialization.
       *
       * @var array
  
       */
      protected $hidden = [
          'password',
          'remember_token',
      ];
    
      /**
       * The attributes that should be cast.
       *
       * @var array
  
       */
      protected $casts = [
          'email_verified_at' => 'datetime',
          'role' => 'array',
      ];
      public function store(){
        return $this->hasMany(store::class);//one to many
    }

    public function orders(){
      return $this->hasMany(Order::class);


  }

  public function routeNotificationForOneSignal()
  {
      return 'ONE_SIGNAL_PLAYER_ID';
  }


  public function sendNotification()
  {
      $this->notify(new signal($this)); //Pass the model data to the OneSignal Notificator
  }
  
  public function routesNotificationForOneSignal()
      {
          /*
           * you have to return the one signal player id tat will 
           * receive the message of if you want you can return 
           * an array of players id
           */
  
           return $this->user;
      }
    


   
  }