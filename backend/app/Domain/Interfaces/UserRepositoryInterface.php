<?php

namespace App\Domain\Interfaces;

use App\Domain\Interfaces\Operations\ReadOperationInterface;
use App\Domain\Interfaces\Operations\UpdateOperationInterface;

interface UserRepositoryInterface extends ReadOperationInterface, UpdateOperationInterface
{

}
