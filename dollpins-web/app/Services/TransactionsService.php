<?php

namespace App\Services;

use App\Repositories\TransactionsRepository;
use App\Repositories\TransactionsTypeRepository;

class TransactionsService
{
    private $transactionsRepository;
    private $transactionsTypeRepository;

    public function __construct(TransactionsRepository $transactionsRepository, TransactionsTypeRepository $transactionsTypeRepository)
    {
        $this->transactionsRepository = $transactionsRepository;
        $this->transactionsTypeRepository = $transactionsTypeRepository;
    }

    public function getTransactions($id)
    {
        return $this->transactionsRepository->getTransactions($id);
    }

    public function createTransactions($data)
    {
        return $this->transactionsRepository->createTransactions($data);
    }

    public function updateTransactions($id, $data)
    {
        return $this->transactionsRepository->updateTransactions($id, $data);
    }

    public function deleteTransactions($id)
    {
        return $this->transactionsRepository->deleteTransactions($id);
    }

    public function getAllTransactions()
    {
        return $this->transactionsRepository->all();
    }
}