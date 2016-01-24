<?php

namespace Kryptonit3\TMDBLaravel;

use Illuminate\Support\ServiceProvider;

class TMDBServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/config/kryptonit3_tmdb.php' => config_path('kryptonit3_tmdb.php'),
        ]);
    }
    /**
     * Register bindings in the container.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__.'/config/kryptonit3_tmdb.php', 'kryptonit3_tmdb'
        );
    }
    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [
            'kryptonit3_tmdb',
        ];
    }
}