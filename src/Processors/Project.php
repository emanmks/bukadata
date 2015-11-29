<?php namespace BukaData\Processors;

use BukaData\Contracts\ProjectInterface;

class Project extends AbstractableProcessor
{
    protected $projectRepository;

    function __construct(ProjectInterface $projectRepository) {
        $this->projectRepository    = $projectRepository;
    }

    public function all()
    {
    	return $this->projectRepository->all();
    }
}