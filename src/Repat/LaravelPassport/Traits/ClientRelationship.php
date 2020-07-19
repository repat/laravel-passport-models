<?php

namespace Repat\LaravelPassport;

trait ClientRelationship
{
    public function client()
    {
        return $this->belongsTo(OauthClient::class, 'client_id');
    }
}
