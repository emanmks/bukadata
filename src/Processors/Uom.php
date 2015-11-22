<?php namespace BukaData\Processors;

use BukaData\Contracts\UomInterface;

class Uom extends AbstractableProcessor
{
    protected $uomRepository;

    function __construct(UomInterface $uomRepository) {
        $this->uomRepository    = $uomRepository;
    }

    public function all()
    {
    	return $this->uomRepository->all();
    }
}