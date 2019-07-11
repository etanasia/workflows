<?php

namespace Jawaraegov\Workflows\Models;

use Illuminate\Database\Eloquent\Model;

class WorkflowState extends Model
{
    
    protected $table ='workflow_states';
    protected $fillable = ['name','label','status',];

}
