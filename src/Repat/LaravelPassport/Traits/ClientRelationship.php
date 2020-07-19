<?php

namespace Repat\LaravelPassport\Traits;

trait ClientRelationship
{
    public function client()
    {
        return $this->belongsTo(OauthClient::class, 'client_id');
    }
}
