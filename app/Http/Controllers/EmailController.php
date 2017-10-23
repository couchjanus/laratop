<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller {

    public function index()
    {
        return view('email.index');
    }

    public function send(Request $request)
    {
        $title = $request->input('title');
        $content = $request->input('content');
        // $attach = $request->file('file');

        Mail::send('email.send', ['title' => $title, 'content' => $content], function ($message)
        {

            $message->from('couchjanus@gmail.com', 'Couch Janus');

            $message->to('1cf8ac7443-168c34@inbox.mailtrap.io');

            // $message->attach($attach);

            $message->subject("Hello from Couch Janus");

        });


        return response()->json(['message' => 'Request completed']);
    }

    public function notify(Request $request){

        //List ID from .env
        $listId = env('MAILCHIMP_LIST_ID');

        //Mailchimp instantiation with Key
        $mailchimp = new \Mailchimp(env('MAILCHIMP_KEY'));

        //Create a Campaign $mailchimp->campaigns->create($type, $options, $content)
        $campaign = $mailchimp->campaigns->create('regular', [
            'list_id' => $listId,
            'subject' => 'New Article from Janus',
            'from_email' => 'jannus@gmail.com',
            'from_name' => 'Janus Nic',
            'to_name' => 'Janus Subscriber'

        ], [
            'html' => $request->input('content'),
            'text' => strip_tags($request->input('content'))
        ]);

        //Send campaign
        $mailchimp->campaigns->send($campaign['id']);

        return response()->json(['status' => 'Success']);
    }
}
