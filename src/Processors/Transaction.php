<?php namespace BukaData\Processors;

use BukaData\Contracts\TransactionInterface;

class Transaction extends AbstractableProcessor
{
    protected $transactionRepository;

    function __construct(TransactionInterface $transactionRepository) {
        $this->transactionRepository    = $transactionRepository;
    }

    public function all()
    {
    	return $this->transactionRepository->all();
    }
}