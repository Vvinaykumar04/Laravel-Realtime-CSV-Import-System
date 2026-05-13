<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Event;

class EventServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */

    // protected $listen = [
    //     \App\Events\CreateUser::class => [
    //         \App\Listeners\ProcessCsvImport::class,
    //     ],
    // ];


   

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        // Event::listen(
        //     \App\Events\CreateUser::class,
        //     \App\Listeners\ProcessCsvImport::class
        // );
    }

    public function shouldDiscoverEvents(): bool
    {
        return false;
    }
}
