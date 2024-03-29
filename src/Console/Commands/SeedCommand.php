<?php namespace Jawaraegov\Workflows\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;

/**
 * The WorkflowCommand class.
 *
 * @package Jawaraegov\Workflows
 * @author  Jawaraegov <unme.loved@gmail.com>
 */
class SeedCommand extends Command
{

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'jawaraegov:workflow:seed';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Seed Database';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        Artisan::call('db:seed', ['--class' => 'Jawaraegov\Workflows\database\seeds\DatabaseSeeder']);
        $this->info('Seeded: Jawaraegov\Workflows\database\seeds\DatabaseSeeder');
    }
}
