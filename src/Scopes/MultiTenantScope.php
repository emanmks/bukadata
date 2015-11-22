<?php

namespace BukaData\Scopes;

use Illuminate\Database\Query\Builder as BaseBuilder;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\ScopeInterface;
use BukaData\Traits\AuthenticableTrait;

class MultiTenantScope implements ScopeInterface {
	
	private $enabled = true;

	private $model;

	use AuthenticableTrait;

	/**
	 * Apply the Scope to a give Eluqoent Query Builder
	 * 
	 * @param Illuminate\Database\Eloquent\Builder $builder
	 * @param Illuminate\Database\Eloquent\Model $model
	 * 
	 * @return  void
	 */
	public function apply(Builder $builder)
    {
        if (! $this->enabled) {
            return;
        }

        $column = 'organization_id';

        $builder->where('organization_id','=',$this->getCurrentUser()->organization_id);
    }

    /**
     * Remove scope from the query.
     * 
     * @param  Builder $builder
     * @return void
     */
    public function remove(Builder $builder)
    {
        $query = $builder->getQuery();
 
        $column = "organization_id";
 
        $bindingKey = 0;
 
        foreach ((array) $query->wheres as $key => $where)
        {
            if ($this->isMultiTenantConstraint($where, $column))
            {
                $this->removeWhere($query, $key);
 
                // Here SoftDeletingScope simply removes the where
                // but since we use Basic where (not Null type)
                // we need to get rid of the binding as well
                $this->removeBinding($query, $bindingKey);
            }
 
            // Check if where is either NULL or NOT NULL type,
            // if that's the case, don't increment the key
            // since there is no binding for these types
            if ( ! in_array($where['type'], ['Null', 'NotNull'])) $bindingKey++;
        }
    }
 
    /**
     * Remove scope constraint from the query.
     * 
     * @param  \Illuminate\Database\Query\Builder  $builder
     * @param  int  $key
     * @return void
     */
    protected function removeWhere(BaseBuilder $query, $key)
    {
        unset($query->wheres[$key]);
 
        $query->wheres = array_values($query->wheres);
    }
 
    /**
     * Remove scope constraint from the query.
     * 
     * @param  \Illuminate\Database\Query\Builder  $builder
     * @param  int  $key
     * @return void
     */
    protected function removeBinding(BaseBuilder $query, $key)
    {
        $bindings = $query->getRawBindings()['where'];
 
        unset($bindings[$key]);
 
        $query->setBindings($bindings);
    }
 
    /**
     * Check if given where is the scope constraint.
     * 
     * @param  array   $where
     * @param  string  $column
     * @return boolean
     */
    protected function isMultiTenantConstraint(array $where, $column)
    {
        return ($where['type'] == 'Basic' && $where['column'] == $column && $where['value'] == $this->getCurrentUser()->organization_id);
    }


    public function disable()
    {
        $this->enabled = false;
    }

    public function enable()
    {
        $this->enabled = true;
    }


}