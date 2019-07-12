<?php
namespace Jawaraegov\Workflows\database\seeds;
use Illuminate\Database\Seeder;

class WorkflowTransitionsSeeder extends Seeder {

	public function run()
	{
		//DB::table('workflow_transitions')->delete();
		$data1 = array(
					'name' => 'propose-to-propose',
					'label' => 'Propose To Propose',
					'from' => 'propose',
					'to' => 'propose',
					'message' => 'propose To Propose',
					'status' => '1'
				);
		\DB::table('workflow_transitions')->insert($data1);
		$data2 = array(
					'name' => 'propose-to-request',
					'label' => 'Propose To Request',
					'from' => 'propose',
					'to' => 'request',
					'message' => 'propose To Request',
					'status' => '1'
				);
		\DB::table('workflow_transitions')->insert($data2);
		$data3 = array(
					'name' => 'request-to-approved',
					'label' => 'Request To Approved',
					'from' => 'request',
					'to' => 'approved',
					'message' => 'Request To Approved',
					'status' => '1'
				);
		\DB::table('workflow_transitions')->insert($data3);
		$data4 = array(
					'name' => 'request-to-rejected',
					'label' => 'Request To Rejected',
					'from' => 'request',
					'to' => 'rejected',
					'message' => 'Request To Rejected',
					'status' => '1'
				);
		\DB::table('workflow_transitions')->insert($data4);
		$data5 = array(
					'name' => 'approved-to-rejected',
					'label' => 'Approved To Rejected',
					'from' => 'approved',
					'to' => 'rejected',
					'message' => 'Approved To Rejected',
					'status' => '1'
				);
		\DB::table('workflow_transitions')->insert($data5);
		$data6 = array(
					'name' => 'rejected-to-approved',
					'label' => 'Rejected To Approved',
					'from' => 'rejected',
					'to' => 'approved',
					'message' => 'Rejected To Approved',
					'status' => '1'
				);
		\DB::table('workflow_transitions')->insert($data6);
		$data7 = array(
					'name' => 'request-to-needs-completed-document',
					'label' => 'Request To Needs Completed Document',
					'from' => 'request',
					'to' => 'needs-completed-document',
					'message' => 'Request To Needs Completed Document',
					'status' => '0'
				);
		\DB::table('workflow_transitions')->insert($data7);
		$data8 = array(
					'name' => 'needs-completed-document-to-document-submitted',
					'label' => 'Needs Completed Document To Document Submitted',
					'from' => 'needs-completed-document',
					'to' => 'document-submitted',
					'message' => 'Needs Completed Document To Document Submitted',
					'status' => '0'
				);
		\DB::table('workflow_transitions')->insert($data8);
		$data9 = array(
					'name' => 'document-submitted-to-approved',
					'label' => 'Document Submitted To Approved',
					'from' => 'document-submitted',
					'to' => 'approved',
					'message' => 'Document Submitted To Approved',
					'status' => '0'
				);
		\DB::table('workflow_transitions')->insert($data9);
		$data = array(
					'name' => 'document-submitted-to-rejected',
					'label' => 'Document Submitted To Rejected',
					'from' => 'document-submitted',
					'to' => 'rejected',
					'message' => 'Document Submitted To Rejected',
					'status' => '0'
				);
		\DB::table('workflow_transitions')->insert($data);
	}
}
