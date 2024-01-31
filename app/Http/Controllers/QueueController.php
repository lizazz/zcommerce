<?php

namespace App\Http\Controllers;

use App\Jobs\SendEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class QueueController extends Controller
{
    public function index()
    {
        echo 'tst';
        Log::info('controller');
   //    Mail::to('slavikpetrechenko@gmail.com')->send(new \App\Mail\Welcome());
    //    $sendEmailJob = SendEmail::dispatch('slavikpetrechenko@gmail.com');
        dispatch(new SendEmail('slavikpetrechenko@gmail.com'));

        echo 'sent3';
    }

    public function queue()
    {
        echo 'queue';
    }
}
