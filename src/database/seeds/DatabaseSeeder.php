<?php
namespace Jawaraegov\Workflows\database\seeds;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		$this->clear_data();
        $this->call(WorkflowsSeeder::class);
        $this->call(WorkflowStatesSeeder::class);
        $this->call(WorkflowTransitionsSeeder::class);
    }
	
    function clear_data(){
        \DB::table('workflows')->delete();
        \DB::table('workflow_states')->delete();
        \DB::table('workflow_transitions')->delete();
    }
}
