<?php

// FetchSnacksJob.php

namespace App\Jobs;

use App\Services\SnackApiWrapper;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

class FetchSnacksJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public function handle()
    {
        $apiWrapper = new SnackApiWrapper();
        $snacks = $apiWrapper->getSnacks();

        // Store $snacks locally (e.g., in the database)
        // You can use Eloquent ORM to save the data
    }
}
