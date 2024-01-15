<?php

namespace Hrsa\BetterCommands\Commands;

use Illuminate\Console\ConfirmableTrait;
use Illuminate\Database\Console\Migrations\BaseCommand;
use Symfony\Component\Console\Input\InputOption;

class RedoCommand extends BaseCommand
{
    use ConfirmableTrait;

    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'migrate:redo';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Rollback and rerun 1 or more latest database migrations';

    public function handle(): int
    {
        if (! $this->confirmToProceed()) {
            return 1;
        }

        $this->call('migrate:refresh', array_filter([
            '--step' => $this->option('step') ?? 1,
        ]));

        return 0;
    }

    protected function getOptions(): array
    {
        return [
            ['step', null, InputOption::VALUE_OPTIONAL, 'The number of migrations to be reverted and re-applied'],
        ];
    }
}
