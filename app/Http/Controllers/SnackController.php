<?php

namespace App\Http\Controllers;
use App\Services\SnackApiWrapper;
use Illuminate\Http\Request;

class SnackController extends Controller
{
    public function index()
    {
        $snackApiService = new SnackApiWrapper();
        $snacks = $snackApiService->getSnacks();

        // Process $snacks and return a response
    }
}
