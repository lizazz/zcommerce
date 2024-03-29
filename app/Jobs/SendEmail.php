<?php

namespace App\Jobs;

use Illuminate\Bus\Batchable;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class SendEmail implements ShouldQueue
{
    use Batchable, Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public string $email;

    public function __construct(string $email)
    {
        $this->email = $email;
    }

    public function handle()
    {
        if ($this->batch()->canceled()) {
            return;
        }
        Log::info($this->email);
      //  Mail::to($this->email)->send(new \App\Mail\Welcome());
    }
}
