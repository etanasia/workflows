<?php 

namespace Jawaraegov\Workflows;

use Jawaraegov\Workflows\Models\WorkflowTransition;
use Jawaraegov\Workflows\Models\WorkflowState;
use That0n3guy\Transliteration;
use Illuminate\Http\Request;
/**
 * The Workflows class.
 *
 * @package Jawaraegov\Workflows
 * @author  Jawaraegov <unme.loved@gmail.com>
 */
class Workflow
{
    protected $workflowTransition;
    protected $workflowState;

    public function __construct()
    {
        $this->workflowTransition = new WorkflowTransition();
        $this->workflowState = new WorkflowState();        
    }

    public function welcome()
    {
        return 'Welcome to Jawaraegov\Workflows package';
    }

    public function getStateName($id)
    {
        return $this->workflowState->where('id',$id)->first()->name;
    }

    public function getTransitionName($id)
    {
        return $this->workflowTranstion->where('id',$id)->first()->name;
    }

    
}
