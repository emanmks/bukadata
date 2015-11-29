<?php namespace BukaData\Processors;

use BukaData\Contracts\UserInterface;

class User extends AbstractableProcessor
{
    protected $userRepository;

    function __construct(UserInterface $userRepository) {
        $this->userRepository    = $userRepository;
    }

    public function all()
    {
    	return $this->userRepository->all();
    }
}