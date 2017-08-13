<?php

declare(strict_types=1);

namespace Rinvex\Subscribable\Console\Commands;

use Illuminate\Console\Command;

class MigrateCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'rinvex:migrate:subscribable';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Migrate Rinvex Subscribable Tables.';

    /**
     * Execute the console command.
     *
     * @return void
     */
    public function handle()
    {
        $this->warn('Migrate rinvex/subscribable:');
        $this->call('migrate', ['--step' => true, '--path' => 'vendor/rinvex/subscribable/database/migrations']);
    }
}
