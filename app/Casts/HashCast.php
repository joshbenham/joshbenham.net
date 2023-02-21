<?php

namespace App\Casts;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Database\Eloquent\CastsInboundAttributes;
use Illuminate\Support\Facades\Hash;

class HashCast implements CastsInboundAttributes
{
    public function set(Model $model, string $key, mixed $value, array $attributes): string|null
    {
        return $value ? Hash::make($value) : $value;
    }
}
