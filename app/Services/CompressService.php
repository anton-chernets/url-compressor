<?php

namespace App\Services;

use App\Helpers\TimeHelper;
use App\Models\Compress;

class CompressService extends BaseService
{
    public function __construct(
        public Compress $compress
    )
    {}

    public function isValidCompress(): bool
    {
        return TimeHelper::checkOnExpire($this->compress->expired_at)
            && $this->compress->available_count !== 0;
    }

    public function decrAvailableCount(): bool
    {
        return $this->compress->decrement('available_count', 1);
    }
}
