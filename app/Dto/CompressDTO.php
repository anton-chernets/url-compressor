<?php

namespace App\Dto;

use App\Models\Compress;
use Carbon\Carbon;
use Faker\Factory;

class CompressDTO
{
    public Compress $compress;
    public function __construct(
        public string $url,
        public int $available_count,
        public int $expired_hours,
    )
    {
        $this->compress = new Compress();
        $this->compress->url = $this->url;
        $this->compress->token = Factory::create()->regexify('[A-Z]{5}[0-4]{3}');
        $this->compress->available_count = $this->available_count ?: null;
        $this->compress->expired_at = Carbon::now()->addHours($this->expired_hours);
    }

    public function save(): Compress
    {
        $this->compress->save();
        return $this->compress;
    }
}
