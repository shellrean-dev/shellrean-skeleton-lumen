<?php

namespace App\Providers;

use Laravel\Lumen\Providers\EventServiceProvider as ServiceProvider;
use App\Listeners\FinishCommandListener;
use App\Listeners\StartCommandListener;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        \App\Events\ExampleEvent::class => [
            \App\Listeners\ExampleListener::class,
        ],
        \Illuminate\Console\Events\CommandStarting::class => [
            StartCommandListener::class,
        ],
        \Illuminate\Console\Events\CommandFinished::class => [
            FinishCommandListener::class,
        ],
    ];
}
