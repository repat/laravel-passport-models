<?php

namespace Repat\LaravelPassport;

class OauthAccessToken extends \Illuminate\Database\Eloquent\Model
{
    use \Repat\LaravelPassport\Traits\ClientRelationship;

    protected $casts = [
        'revoked' => 'boolean',
        'expires_at' => 'datetime',
    ];
}
