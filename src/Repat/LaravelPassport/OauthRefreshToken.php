<?php

namespace Repat\LaravelPassport;

class OauthRefreshToken extends \Illuminate\Database\Eloquent\Model
{
    public $timestamps = false;

    protected $casts = [
        'revoked' => 'boolean',
    ];

    public function access_token()
    {
        return $this->belongsTo(OauthAccessToken::class, 'access_token_id');
    }
}
