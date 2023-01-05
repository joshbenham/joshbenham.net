<?php

namespace App\Casts;

use Illuminate\Contracts\Database\Eloquent\CastsInboundAttributes;
use Illuminate\Support\Facades\Hash;

class HashCast implements CastsInboundAttributes
{
    public function set($model, string $key, $value, array $attributes): string|null
    {
        return $value ? Hash::make($value) : $value;
    }
}
