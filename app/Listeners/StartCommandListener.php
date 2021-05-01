<?php

namespace App\Listeners;

use Illuminate\Console\Events\CommandStarting;

class StartCommandListener
{
    /**
     * Handle the event.
     *
     * @param  CommandStarting  $event
     * @return void
     */
    public function handle(CommandStarting $event): void
    {
        $event->output->write("
        _          _ _                      
       | |        | | |                     
    ___| |__   ___| | |_ __ ___  __ _ _ __  
   / __| '_ \ / _ \ | | '__/ _ \/ _` | '_ \ 
   \__ \ | | |  __/ | | | |  __/ (_| | | | |
   |___/_| |_|\___|_|_|_|  \___|\__,_|_| |_|
                                            
                                            
  ");
    }
}
