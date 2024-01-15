<?php

namespace Hrsa\BetterCommands\Commands;

use Illuminate\Console\Command;

class BetterCommandsCommand extends Command
{
    public $signature = 'better-commands';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
