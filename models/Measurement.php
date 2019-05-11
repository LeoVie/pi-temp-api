<?php

namespace Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

class Measurement extends Model
{
    public $timestamps = true;
    protected $table = 'measurements';
    protected $fillable = ['temperature', 'relative_humidity'];

    public static function findSince(string $since, array $columns = ['*']): Collection
    {
        return static::query()->where(
            'created_at', '>', $since
        )->get($columns);
    }
}