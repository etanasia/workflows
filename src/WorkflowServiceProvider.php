<?php namespace Jawaraegov\Workflows;

use Illuminate\Support\ServiceProvider;
use Jawaraegov\Workflows\Console\Commands\WorkflowCommand;

/**
 * The WorkflowServiceProvider class
 *
 * @package Jawaraegov\Workflows
 * @author  Jawaraegov <unme.loved@gmail.com>
 */
class WorkflowServiceProvider extends ServiceProvider
{

    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {
        // Bootstrap handles
        $this->routeHandle();
        $this->configHandle();
        $this->langHandle();
        $this->viewHandle();
        $this->assetHandle();
        $this->migrationHandle();
        $this->cssHandle();
        $this->jsHandle();
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('workflow', function ($app) {
            return new Workflow;
        });

        $this->app->singleton('command.workflow', function ($app) {
            return new WorkflowCommand;
        });

        $this->commands('command.workflow');
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [
            'workflow',
            'command.workflow',
        ];
    }

    /**
     * Loading package routes
     *
     * @return void
     */
    protected function routeHandle()
    {
        $this->loadRoutesFrom(__DIR__.'/routes/routes.php');
    }

    /**
     * Loading and publishing package's config
     *
     * @return void
     */
    protected function configHandle()
    {
        $packageConfigPath = __DIR__.'/config/config.php';
        $appConfigPath     = config_path('workflow.php');

        $this->mergeConfigFrom($packageConfigPath, 'workflow');

        $this->publishes([
            $packageConfigPath => $appConfigPath,
        ], 'config');
    }

    /**
     * Loading and publishing package's translations
     *
     * @return void
     */
    protected function langHandle()
    {
        $packageTranslationsPath = __DIR__.'/resources/lang';

        $this->loadTranslationsFrom($packageTranslationsPath, 'workflow');

        $this->publishes([
            $packageTranslationsPath => resource_path('lang/vendor/workflow'),
        ], 'lang');
    }

    /**
     * Loading and publishing package's views
     *
     * @return void
     */
    protected function viewHandle()
    {
        $packageViewsPath = __DIR__.'/resources/views';

        $this->loadViewsFrom($packageViewsPath, 'workflow');

        $this->publishes([
            $packageViewsPath => resource_path('views/'),
        ], 'workflow_views');
    }

    /**
     * Publishing package's assets (JavaScript, CSS, images...)
     *
     * @return void
     */
    protected function assetHandle()
    {
        $packageAssetsPath = __DIR__.'/resources/assets';

        $this->publishes([
            $packageAssetsPath => public_path('vendor/workflow'),
        ], 'public');
    }

    /**
     * Publishing package's migrations
     *
     * @return void
     */
    protected function migrationHandle()
    {
        $packageMigrationsPath = __DIR__.'/database/migrations';

        $this->loadMigrationsFrom($packageMigrationsPath);

        $this->publishes([
            $packageMigrationsPath => database_path('migrations')
        ], 'workflow_migrations');
    }

    public function cssHandle()
    {
        $packageMigrationsPath = __DIR__.'/public/css';                

        $this->publishes([
            $packageMigrationsPath => base_path('public/css')
        ], 'workflow_css');
    }

    public function jsHandle()
    {
        $packageMigrationsPath = __DIR__.'/public/js';                

        $this->publishes([
            $packageMigrationsPath => base_path('public/js')
        ], 'workflow_js');
    }
}
