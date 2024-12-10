<?php

namespace App\Domain\Interfaces;

use App\Models\User;
use App\Domain\Interfaces\Operations\CreateOperationInterface;
use App\Domain\Interfaces\Operations\ReadOperationInterface;
use App\Domain\Interfaces\Operations\UpdateOperationInterface;

/**
 * Вообще "это" можно было назвать LCRUD_OperationsRepositoryInterface и сделать его общим интерфейсом для всех репозиториев
 * при условии если нужны были бы запросы на list, create, read, update, delete
 */
interface ManageableRepositoryInterface extends
    CreateOperationInterface,
    ReadOperationInterface,
    UpdateOperationInterface
{

}
