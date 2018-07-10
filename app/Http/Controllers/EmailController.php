<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{

	    public function send(Request $request)
    {
		// dd($request->get('title'));
	    $title = $request->get('title');

        $body = $request->get('body');

        Mail::send('mails.send', ['title' => $title, 'body' => $body], function ($message)
        {
            $message->from('akirui@cytonn.com', 'Prince Allan');
            $message->to('eb7c3938fe-c9abd5@inbox.mailtrap.io');
        });
        return view('mails.subscribers', ['message' => 'Email Sent']);
    }

    
}
