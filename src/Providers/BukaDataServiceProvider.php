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
        $this->app->bind('\BukaData\Contracts\HierarchyInterface', '\BukaData\Repositories\Hierarchy');
        $this->app->bind('\BukaData\Contracts\OrganizationInterface', '\BukaData\Repositories\Organization');
        $this->app->bind('\BukaData\Contracts\OrganizationTypeInterface', '\BukaData\Repositories\OrganizationType');
        $this->app->bind('\BukaData\Contracts\PersonInterface', '\BukaData\Repositories\Person');
        $this->app->bind('\BukaData\Contracts\ProjectInterface', '\BukaData\Repositories\Project');
        $this->app->bind('\BukaData\Contracts\TaxrateInterface', '\BukaData\Repositories\Taxrate');
        $this->app->bind('\BukaData\Contracts\TransactionInterface', '\BukaData\Repositories\Transaction');
        $this->app->bind('\BukaData\Contracts\UomInterface', '\BukaData\Repositories\Uom');
        $this->app->bind('\BukaData\Contracts\CategoryInterface', '\BukaData\Repositories\Category');
    }
}
