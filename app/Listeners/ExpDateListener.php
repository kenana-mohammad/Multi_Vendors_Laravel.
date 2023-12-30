<?php

namespace App\Listeners;

use App\Events\ExpDateEvent;
use App\Models\Product;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class ExpDateListener
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(ExpDateEvent $event): void
    {
        $product=Product::find($event->product->id);

        $product->hasoffer= 0;
        $product->discount=0;
        $product->save();
    
    }
}
