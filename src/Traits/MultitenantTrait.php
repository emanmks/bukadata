<?php

namespace BukaData\Traits;

use BukaData\Scopes\MultiTenantScope;

trait MultiTenantTrait
{
	/**
     * Boot the scope.
     * 
     * @return void
     */
    public static function bootMultiTenantTrait()
    {
        static::addGlobalScope(new MultiTenantScope);
    }
}