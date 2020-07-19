<?php

namespace Repat\LaravelPassport;

class OauthAuthCode extends \Illuminate\Database\Eloquent\Model
{
    protected $casts = [
        'revoked' => 'boolean',
        'expires_at' => 'datetime',
    ];
}
