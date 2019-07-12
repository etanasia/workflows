<?php
namespace Jawaraegov\Workflows\database\seeds;
use Illuminate\Database\Seeder;

class WorkflowStatesSeeder extends Seeder {

	public function run()
	{
		//DB::table('workflow_states')->delete();
		$data1 = array(
					'name' => 'propose',
					'label' => 'Propose',
					'status' => '1'
				);
		\DB::table('workflow_states')->insert($data1);
		$data2 = array(
					'name' => 'request',
					'label' => 'Request',
					'status' => '1'
				);
		\DB::table('workflow_states')->insert($data2);
		$data3 = array(
					'name' => 'approved',
					'label' => 'Approved',
					'status' => '1'
				);
		\DB::table('workflow_states')->insert($data3);
		$data4 = array(
					'name' => 'rejected',
					'label' => 'Rejected',
					'status' => '1'
				);
		\DB::table('workflow_states')->insert($data4);
		$data5 = array(
					'name' => 'needs_completed_document',
					'label' => 'Needs Dompleted Document',
					'status' => '1'
				);
		\DB::table('workflow_states')->insert($data5);
		$data6 = array(
					'name' => 'document_submitted',
					'label' => 'Document Submitted',
					'status' => '1'
				);
		\DB::table('workflow_states')->insert($data6);
	}
}
