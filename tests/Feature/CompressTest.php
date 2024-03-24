<?php

namespace Tests\Feature;

use App\Models\Compress;
use App\Services\CompressService;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;

class CompressTest extends TestCase
{
    use DatabaseTransactions;

    public function test_is_valid_compress(): void
    {
        $compress = Compress::factory()->create();
        $compressService = new CompressService($compress);
        $this->assertTrue($compressService->isValidCompress());
    }

    public function test_decr_available_count(): void
    {
        $compress = Compress::factory()->create();
        $compressService = new CompressService($compress);
        $compressService->decrAvailableCount();
        $this->assertFalse($compressService->isValidCompress());
    }
}
