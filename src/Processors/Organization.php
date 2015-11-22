<?php namespace BukaData\Processors;

use BukaData\Contracts\OrganizationInterface;

class Organization extends AbstractableProcessor
{
    protected $organizationRepository;

    function __construct(OrganizationInterface $organizationRepository) {
        $this->organizationRepository    = $organizationRepository;
    }

    public function all()
    {
    	return $this->organizationRepository->all();
    }
}