<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 *
 *
 * @property int $id
 * @property string $url
 * @property string $token
 * @property int|null $available_count
 * @property string $expired_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Compress newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Compress newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Compress query()
 * @method static \Illuminate\Database\Eloquent\Builder|Compress whereAvailableCount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Compress whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Compress whereExpiredAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Compress whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Compress whereToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Compress whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Compress whereUrl($value)
 * @mixin \Eloquent
 */
class Compress extends Model
{
    use HasFactory;

    protected $table = 'compress';
    protected $fillable = [
        'url',
        'token',
        'available_count',
        'expired_at',
    ];
}
