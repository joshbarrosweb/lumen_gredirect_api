<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use App\Contracts\{
    ILink
};

use App\Repositories\Eloquent\{
    LinkRepository
};

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->bind(ILink::class, LinkRepository::class);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
