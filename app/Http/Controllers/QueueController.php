<?php

namespace App\Http\Controllers;

use App\Jobs\SendEmail;

class QueueController extends Controller
{
    public function index()
    {
    //    $sendEmailJob = SendEmail::dispatch('slavikpetrechenko@gmail.com');
        dispatch(new SendEmail('slavikpetrechenko@gmail.com'));

        echo 'sent3';
    }
}
