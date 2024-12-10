<?php

namespace App\Repositories\Traits;

use Illuminate\Database\Eloquent\Model;

trait ReadOperationTrait
{
    public function read(array $attributes): Model {
        return $this->model::where($attributes)->first();
    }
}
