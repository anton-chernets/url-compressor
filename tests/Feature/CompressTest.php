<?php

namespace Tests\Feature;

use App\Models\Compress;
use App\Services\CompressService;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;

class CompressTest extends TestCase
{
    use DatabaseTransactions;

    /**
     * A basic unit test example.
     */
    public function test_decr_available_count(): void
    {
        $compress = Compress::factory()->create();
        $compressService = new CompressService($compress);
        $compressService->decrAvailableCount();
        $this->assertFalse($compressService->isValidCompress());
    }
}
