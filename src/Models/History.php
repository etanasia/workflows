<?php

namespace Jawaraegov\Workflows\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class History extends Model
{
    use Notifiable;

    protected $table = 'historys';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $fillable = array('content_id', 'workflow_id', 'from_state', 'to_state', 'user_id');

    public function getApiKeys()
    {
        return $this->belongsTo('App\ApiKeys', 'content_id', 'id');
    }

    public function getWorkflow()
    {
        return $this->belongsTo('Jawaraegov\Workflows\Models\WorkflowModel', 'workflow_id', 'id');
    }

    public function getStateFrom()
    {
        return $this->belongsTo('Jawaraegov\Workflows\Models\WorkflowState', 'from_state', 'id');
    }

    public function getStateTo()
    {
        return $this->belongsTo('Jawaraegov\Workflows\Models\WorkflowState', 'to_state', 'id');
    }

    public function getUserName()
    {
        return $this->belongsTo('App\User','user_id','id');
    }

}
