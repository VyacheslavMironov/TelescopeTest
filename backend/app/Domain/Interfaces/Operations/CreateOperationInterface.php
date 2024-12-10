<?php

namespace App\Domain\Interfaces\Operations;

use Illuminate\Database\Eloquent\Model;

interface CreateOperationInterface
{
    /**
     * @param array $attributes
     * @return Model
     */
    public function create(array $attributes): Model;
}
