<?php

namespace App\Repositories\Traits;

use Illuminate\Database\Eloquent\Model;

trait CreateOperationTrait
{
    public function create(array $attributes): Model {
        return $this->model::created($attributes);
    }
}
