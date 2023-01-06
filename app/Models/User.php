<?php

namespace App\Models;

use App\Casts\HashCast;
use Filament\Models\Contracts\FilamentUser;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable implements FilamentUser
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
        'email_verified_at',
    ];

    /**
     * @var array<string, string>
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'email' => 'string',
        'password' => HashCast::class,
        'remember_token' => 'string',
        'email_verified_at' => 'datetime',
    ];

    public function canAccessFilament(): bool
    {
        return in_array($this->email, explode(',', env('ADMIN_EMAILS')));
    }
}
