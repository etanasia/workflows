<?php namespace Jawaraegov\Workflows\Console\Commands;

use Illuminate\Console\Command;

/**
 * The WorkflowCommand class.
 *
 * @package Jawaraegov\Workflows
 * @author  Jawaraegov <unme.loved@gmail.com>
 */
class WorkflowCommand extends Command
{

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'jawaraegov:workflow';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Demo command for Jawaraegov\Workflows package';

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
        $this->info('Welcome to command for Jawaraegov\Workflows package');
    }
}
