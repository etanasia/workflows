<?php
namespace Jawaraegov\Workflows\database\seeds;
use Illuminate\Database\Seeder;

class WorkflowsSeeder extends Seeder {

	public function run()
	{
		//DB::table('workflows')->delete();
		$data = array(
					'content_type' => 'App\\ApiKeys',
					'content_id' => '0',
					'name' => 'api_key',
					'label' => 'Api Key'
				);
		\DB::table('workflows')->insert($data);
	}
}
