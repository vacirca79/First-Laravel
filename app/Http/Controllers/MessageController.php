<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Message;

class MessageController extends Controller
{
    
    public function showAll() {

        $messages = Message::all();
    
        return view('messages', ['messages' => $messages]); 
    }
    
}


