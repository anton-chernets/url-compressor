<?php

namespace App\Http\Controllers;

use App\Dto\CompressDTO;
use App\Http\Requests\CreateCompressRequest;
use Illuminate\Routing\Controller as BaseController;

class CompressController extends BaseController
{
    public function __invoke(CreateCompressRequest $request): string
    {
        $dto = new CompressDTO(
            $request->validated()['url'],
            $request->validated()['redirects'],
            $request->validated()['hours'],
        );
        return url($dto->save()->token);
    }
}
