<?php

namespace App\Service;

use Illuminate\Support\Facades\Http;

abstract class ApiService
{
    const API_URL = 'https://api.tvmaze.com/';

    public function get($url)
    {
        try {
            $response = Http::get(self::API_URL . $url)->json();
            return $this->map($response);
        } catch (\Exception $exception) {
            throw new \Exception('API is broken');
        }
    }

    abstract protected function map($response);
}
