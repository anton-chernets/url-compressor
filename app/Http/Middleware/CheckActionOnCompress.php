<?php

namespace App\Http\Middleware;

use App\Models\Compress;
use App\Services\CompressService;
use Illuminate\Http\Request;
use JetBrains\PhpStorm\NoReturn;
use Symfony\Component\HttpFoundation\Response;

class CheckActionOnCompress
{
    /**
     * Handle an incoming request.
     *
     * @param Request $request
     * @return Response
     */
    #[NoReturn] public function handle(Request $request): mixed
    {
        $action = $request->segment(1);
        /* @var Compress $compress */
        if ($compress = Compress::where('token', $action)->first()) {
            $compressService = new CompressService($compress);
            if($compressService->isValidCompress()) {
                $compressService->decrAvailableCount();
                return redirect($compress->url);
            }
            return redirect('/404');
        }
        abort(404);
    }
}
