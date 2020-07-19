<?php

namespace Repat\LaravelPassport\Traits;

use Repat\LaravelPassport\OauthClient;

trait ClientRelationship
{
    public function client()
    {
        return $this->belongsTo(OauthClient::class, 'client_id');
    }
}
