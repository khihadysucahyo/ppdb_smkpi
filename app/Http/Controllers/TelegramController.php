<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Telegram\Bot\Laravel\Facades\Telegram;

class TelegramController extends Controller
{

    public function getHome()
    {
        return view('home');
    }

    public function getUpdates()
    {
        $updates = Telegram::getUpdates();
        dd($updates);
    }

    public function getSendMessage()
    {
        return view('telegram.send-message');
    }

    public function postSendMessage(Request $request)
    {
        $rules = [
            'message' => 'required'
        ];

        $validator = Validator::make($request->all(), $rules);

        if($validator->fails())
        {
            return redirect()->back()
                ->with('status', 'danger')
                ->with('message', 'Message is required');
        }

        Telegram::sendMessage([
            'chat_id' => '410626437',
            'text' => $request->get('message')
        ]);

        return redirect()->back()
            ->with('status', 'success')
            ->with('message', 'Message sent');
    }
}
