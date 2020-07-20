<?php

namespace Repat\LaravelPassport;

class OauthClient extends \Illuminate\Database\Eloquent\Model
{
    protected $casts = [
        'personal_access_client' => 'boolean',
        'password_client' => 'boolean',
        'revoked' => 'boolean',
        'expires_at' => 'datetime',
    ];
}
