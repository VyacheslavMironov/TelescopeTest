<?php

namespace App\Domain\Interfaces\Operations;

use Illuminate\Database\Eloquent\Model;

interface UpdateOperationInterface
{
    /**
     * @param Model $entity
     * @param array $attributes
     * @return Model
     */
    public function update(Model $entity, array $attributes): Model;
}
