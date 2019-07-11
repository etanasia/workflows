<?php namespace Jawaraegov\Workflows\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * The Workflow facade.
 *
 * @package Jawaraegov\Workflows
 * @author  Jawaraegov <unme.loved@gmail.com>
 */
class Workflow extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'workflow';
    }
}
