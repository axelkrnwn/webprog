<?php

namespace App\Http\Controllers;

use App\Models\Chat;
use App\Models\ChatRoom;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ChatController extends Controller
{
    //

    public function add(Request $request){

        $chatRoom = ChatRoom::create([
            "user_id" => Auth::user()->id
        ]);
        
        $chat = Chat::create([
            "chat_room_id" => $chatRoom->id,
            "content" => $request->content
        ]);
        return redirect("chat/".$chatRoom->id);
    }

}
