<?php

namespace App\Http\Controllers;

use App\Jobs\SecondJob;
use App\Jobs\SendEmail;
use Illuminate\Support\Facades\Bus;

class QueueController extends Controller
{
    public function index()
    {
       // $sendEmailJob = SendEmail::dispatch('slavikpetrechenko@gmail.com');
        //dispatch(new SendEmail('slavikpetrechenko@gmail.com'));
        $batch = Bus::batch([
            new SendEmail('slavikpetrechenko@gmail.com'),
            new SecondJob(),
            new SendEmail('eaklimka@gmail.com'),
        ])->name('main name')->dispatch();
        echo 'sent5 + ' . $batch->id;
    }
}
