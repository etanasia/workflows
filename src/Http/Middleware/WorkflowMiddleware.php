<?php namespace Jawaraegov\Workflows\Http\Middleware;

use Closure;

/**
 * The WorkflowMiddleware class.
 *
 * @package Jawaraegov\Workflows
 * @author  Jawaraegov <unme.loved@gmail.com>
 */
class WorkflowMiddleware
{

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        return $next($request);
    }
}
