<?php

namespace App\Http\Controllers;

use App\Jobs\SendMailsJob;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class QueuesController extends Controller
{
    public function sendMail(){


        return view('queue.send-mail');
        // if(SendMailsJob::dispatch(Auth::user())){
        //     return view('queue.send-mail');
        // }
        // return redirect()->route('dashboard')->with('success', 'Email enviado com sucesso!');
    }
}
