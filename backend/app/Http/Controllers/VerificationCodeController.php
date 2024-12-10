<?php

namespace App\Http\Controllers;

use App\Domain\Interfaces\VerificationCodeRepositoryInterface;
use App\Http\Requests\VerificationCode\CreateVerificationCodeRequest;
use App\Http\Requests\VerificationCode\ReadVerificationCodeRequest;
use App\Http\Resources\VerificationCodeResource;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class VerificationCodeController extends Controller
{
    /**
     * @var VerificationCodeRepositoryInterface
     */
    private VerificationCodeRepositoryInterface $verificationCodeRepository;
    public function __construct(VerificationCodeRepositoryInterface $verificationCodeRepository)
    {
        $this->verificationCodeRepository = $verificationCodeRepository;
    }

    public function create(CreateVerificationCodeRequest $request): JsonResponse
    {
        $attributes = $request->validated();
        $repository = $this->verificationCodeRepository->create($attributes);
        return new JsonResponse(
            data: [
                'request'       => $request->all(),
                'attributes'    => new VerificationCodeResource($repository),
            ],
            status: Response::HTTP_CREATED
        );
    }

    public function read(ReadVerificationCodeRequest $request): JsonResponse
    {
        $attributes = $request->validated();
        $repository = $this->verificationCodeRepository->read($attributes);
        return new JsonResponse(
            data: [
                'request'       => $request->all(),
                'attributes'    => new VerificationCodeResource($repository),
            ],
            status: Response::HTTP_OK
        );
    }

    public function update(CreateVerificationCodeRequest $request): JsonResponse
    {
        $attributes = $request->validated();
        $repository = $this->verificationCodeRepository->update(
            $this->verificationCodeRepository->read([
                'id' => $attributes['id'],
                'user_id' => $attributes['user_id'],
                ]),
            $attributes
        );
        return new JsonResponse(
            data: [
                'request'       => $request->all(),
                'attributes'    => new VerificationCodeResource($repository),
                ],
            status: Response::HTTP_CREATED
        );
    }
}
