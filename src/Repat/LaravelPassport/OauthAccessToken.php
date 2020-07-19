<?php

namespace Repat\LaravelPassport;

class OauthAccessToken extends \Illuminate\Database\Eloquent\Model
{
    use \Repat\LaravelPassport\ClientRelationship;

    protected $casts = [
        'revoked' => 'boolean',
        'expires_at' => 'datetime',
    ];
}
