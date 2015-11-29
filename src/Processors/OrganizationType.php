<?php namespace BukaData\Processors;

use BukaData\Contracts\OrganizationTypeInterface;

class OrganizationType extends AbstractableProcessor
{
    protected $organizationTypeRepository;

    function __construct(OrganizationTypeInterface $organizationTypeRepository) {
        $this->organizationTypeRepository    = $organizationTypeRepository;
    }

    public function all()
    {
    	return $this->organizationTypeRepository->all();
    }
}