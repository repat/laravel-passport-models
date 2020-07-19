<?php

namespace Repat\LaravelPassport;

class OauthAuthCode extends \Illuminate\Database\Eloquent\Model
{
    use \Repat\LaravelPassport\Traits\ClientRelationship;

    public $timestamps = false;

    protected $casts = [
        'revoked' => 'boolean',
        'expires_at' => 'datetime',
    ];
}
