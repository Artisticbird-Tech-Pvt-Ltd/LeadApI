<?php

namespace ArtisticBird\LeadApi;

use Illuminate\Support\Facades\Http;

class LeadApi
{
    public static function store(array $data): array
    {
        $origin = request()->getSchemeAndHttpHost();
        $response = Http::withHeaders([
            'X-API-KEY' => config('leadapi.api_key'),
            'Accept' => 'application/json',
            'Origin'    => $origin,
        ])->post(
            config('leadapi.endpoint'),
            $data
        );

        return [
            'status' => $response->status(),
            'success' => $response->successful(),
            'data' => $response->json(),
        ];
    }
}