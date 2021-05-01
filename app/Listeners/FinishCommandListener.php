<?php

namespace App\Listeners;

use Illuminate\Console\Events\CommandFinished;

class FinishCommandListener
{
    /**
     * Handle the event.
     *
     * @param  CommandFinished  $event
     * @return void
     */
    public function handle(CommandFinished $event)
    {
        $message = sprintf('Thanks for using shellrean-dev %s version %s', config('shellrean.version.name'), config('shellrean.version.code'));
        $event->output->writeln('');
        $event->output->writeln($message);
    }
}
