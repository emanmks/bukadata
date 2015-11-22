<?php namespace BukaData\Providers;

use Illuminate\Support\ServiceProvider;

class BukaDataServiceProvider extends ServiceProvider
{
    /**
     * Register available services
     *
     * @return void
     */
    public function register()
    {
        $this->registerRepositories();
    }

    /**
     * Register model repositories
     *
     * @return void
     */
    protected function registerRepositories()
    {
        $this->app->bind('\BukaData\Contracts\OrganizationInterface', '\BukaData\Repositories\Organization');
        $this->app->bind('\BukaData\Contracts\UomInterface', '\BukaData\Repositories\Uom');
    }
}
