<?php

namespace App\Repositories;

use App\Domain\Interfaces\UserRepositoryInterface;
use App\Models\User;
use App\Repositories\Traits\ReadOperationTrait;
use App\Repositories\Traits\UpdateOperationTrait;
use Illuminate\Database\Eloquent\Model;

class UserRepository implements UserRepositoryInterface
{
    use ReadOperationTrait;
    use UpdateOperationTrait;

    protected Model $model;

    public function __construct(User $model = new User()) {
        $this->model = $model;
    }
}
