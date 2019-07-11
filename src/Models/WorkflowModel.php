<?php namespace Jawaraegov\Workflows\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * The WorkflowModel class.
 *
 * @package Jawaraegov\Workflows
 * @author  Jawaraegov <unme.loved@gmail.com>
 */
class WorkflowModel extends Model
{
    /**
    * Table name.
    *
    * @var string
    */
    protected $table = 'workflows';

    /**
    * The attributes that are mass assignable.
    *
    * @var mixed
    */
    protected $fillable = ['name', 'label', 'content_type'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [];
}
