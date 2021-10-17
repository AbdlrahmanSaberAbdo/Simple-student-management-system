<?php

namespace Core\Learning;

use Illuminate\Support\ServiceProvider;
use Core\Base\Traits\ServiceProvider\File;

class ModuleServiceProvider extends ServiceProvider
{
    use File;

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->loadFiles(__DIR__, 'learning');
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
