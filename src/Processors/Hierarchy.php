<?php namespace BukaData\Processors;

use BukaData\Contracts\HierarchyInterface;

class Hierarchy extends AbstractableProcessor
{
    protected $hierarchyRepository;

    function __construct(HierarchyInterface $hierarchyRepository) {
        $this->hierarchyRepository    = $hierarchyRepository;
    }

    public function all()
    {
    	return $this->hierarchyRepository->all();
    }
}