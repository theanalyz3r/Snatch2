<?php

namespace Application\Model;

class TransactionTemplate extends AbstractModel
{
    public function sum()
    {
        return round($this->sum, 2) . ' RUB';
    }
}