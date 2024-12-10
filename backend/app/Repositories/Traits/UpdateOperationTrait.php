<?php

namespace App\Repositories\Traits;

use Illuminate\Database\Eloquent\Model;

trait UpdateOperationTrait
{
    public function update(Model $entity, array $attributes): Model {
        foreach ($attributes as $field => $value) {
            if (!is_null($value)) {
                $entity->$field = $value;
            }
        }

        $entity->save();
        return $entity;
    }
}
