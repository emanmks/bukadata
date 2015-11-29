<?php namespace BukaData\Processors;

use BukaData\Contracts\PersonInterface;

class Person extends AbstractableProcessor
{
    protected $personRepository;

    function __construct(PersonInterface $personRepository) {
        $this->personRepository    = $personRepository;
    }

    public function all()
    {
    	return $this->personRepository->all();
    }
}