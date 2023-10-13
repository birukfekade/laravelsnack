<?php

// SnackApiWrapper.php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class SnackApiWrapper
{
    private $baseUrl;
    private $token;

    public function __construct()
    {
        
    }

    public function getSnacks()
    {
        try {
            $response = Http::withHeaders(['Authorization' => $this->token])->get($this->baseUrl);
            return $response->json();
        } catch (\Exception $e) {
            // Handle API errors gracefully
            return [];
        }
    }
}

