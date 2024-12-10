<?php

namespace App\Http\Controllers;

use App\Domain\Interfaces\UserRepositoryInterface;
use App\Http\Requests\Users\GetUserRequest;
use App\Http\Resources\UserResource;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class UserController extends Controller
{
    private UserRepositoryInterface $userRepository;
    public function __construct(UserRepositoryInterface $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function read(GetUserRequest $request): JsonResponse
    {
        $attributes = $request->validated();
        $repository = $this->userRepository->read($attributes);
        return new JsonResponse(
            data: [
                'request' => $request->all(),
                'attributes' => new UserResource($repository)
            ],
            status: Response::HTTP_OK
        );
    }
}
