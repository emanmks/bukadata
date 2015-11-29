<?php namespace BukaData\Processors;

use BukaData\Contracts\TaxrateInterface;

class Taxrate extends AbstractableProcessor
{
    protected $taxrateRepository;

    function __construct(TaxrateInterface $taxrateRepository) {
        $this->taxrateRepository    = $taxrateRepository;
    }

    public function all()
    {
    	return $this->taxrateRepository->all();
    }
}