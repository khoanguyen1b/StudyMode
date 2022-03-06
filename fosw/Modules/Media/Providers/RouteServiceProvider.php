<?php

namespace Modules\Media\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

class RouteServiceProvider extends ServiceProvider
{
    protected $moduleNamespace = 'Modules\Media\Http\Controllers';

    public function boot()
    {
        parent::boot();
    }

    public function map()
    {
        $this->mapWebRoutes();
    }

    protected function mapWebRoutes()
    {
        Route::prefix('web')
            ->middleware('api')
            ->namespace($this->moduleNamespace)
            ->group(module_path('Media', 'Routes/api-web.php'));
    }
}
