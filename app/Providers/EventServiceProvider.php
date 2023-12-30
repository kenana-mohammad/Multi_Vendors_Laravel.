<?php

namespace App\Providers;

use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\Carbon;
use App\Events\ExpDateEvent;
use App\Models\Product;
use   App\Listeners\ExpDateListener;


class EventServiceProvider extends AppServiceProvider
{
    /**
     * The event to listener mappings for the application.
     *
     * @var array<class-string, array<int, class-string>>
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
        ExpDateEvent::class => [
            ExpDateListener::class,
          ],
           
    ];

    /**
     * Register any events for your application.
     */
    public function boot(): void
    {
            
/*
      $product = Product::all();
        foreach($product as $products){
        $expDate= Carbon::parse($products->Expdate)->format('Y-m-d\TH:i:s');
        $mytime = Carbon::now();
        if($mytime > $expDate ){
      event(new ExpDateEvent($products));
        }}
        */
    }
    
    /**
     * Determine if events and listeners should be automatically discovered.
     */
    public function shouldDiscoverEvents(): bool
    {
        return false;
    }

}