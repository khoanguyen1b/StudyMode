<?php

namespace Modules\User\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Laravel\Passport\Console\InstallCommand;
use Laravel\Passport\Console\ClientCommand;
use Laravel\Passport\Console\KeysCommand;
use Laravel\Passport\Passport;

class AuthServiceProvider extends ServiceProvider
{
    protected $policies = [
    ];

    public function boot()
    {

        $this->registerPolicies();

        Passport::routes();

        $this->commands([
            InstallCommand::class,
            ClientCommand::class,
            KeysCommand::class,
        ]);

        Passport::tokensExpireIn(\Carbon\Carbon::now()->addDays(365));
        Passport::refreshTokensExpireIn(\Carbon\Carbon::now()->addDays(365));
    }
}
