<?php

namespace ArtisticBird\LeadApi\Facades;

use Illuminate\Support\Facades\Facade;

class LeadApi extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'leadapi';
    }
}