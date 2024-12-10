<?php

namespace App\Repositories;

use App\Domain\Interfaces\VerificationCodeRepositoryInterface;
use App\Models\VerificationCodes;
use App\Repositories\Traits\CreateOperationTrait;
use App\Repositories\Traits\ReadOperationTrait;
use App\Repositories\Traits\UpdateOperationTrait;
use Illuminate\Database\Eloquent\Model;

class VerificationCodeRepository implements VerificationCodeRepositoryInterface
{
    use CreateOperationTrait;
    use ReadOperationTrait;
    use UpdateOperationTrait;

    protected Model $model;

    public function __construct(VerificationCodes $model = new VerificationCodes()) {
        $this->model = $model;
    }
}
