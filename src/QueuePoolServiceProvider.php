<?php

namespace Wanghanlin\QueuePool;

use Illuminate\Support\ServiceProvider;

class QueuePoolServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        $this->app->singleton('queue.pool', function () {
            return new QueuePool($this->app->basePath());
        });

        $this->app->singleton('command.queue.pool', function ($app) {
            return new QueuePoolCommand($app['queue.pool']);
        });
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        //
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [
            'queue.pool', 'command.queue.pool',
        ];
    }
}
