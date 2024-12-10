<?php

namespace App\Domain\Interfaces\Operations;

use Illuminate\Database\Eloquent\Model;

interface ReadOperationInterface
{
    /**
     * @param array $attributes
     * @return Model
     */
    public function read(array $attributes): Model;
}
