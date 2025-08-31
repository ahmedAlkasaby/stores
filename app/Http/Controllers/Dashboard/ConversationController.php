<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Conversation;
use Illuminate\Http\Request;

class ConversationController extends MainController
{
    public function __construct()
    {
        parent::__construct();
        $this->setClass('chats');
    }
  

   


    public function chats(){
        $authUser = auth()->user();
        $conversations = $authUser->conversations()->with(['userOne', 'userTwo'])->paginate(50);
        $contacts = $authUser->contacts()->paginate(50);
        return view('admin.chats.index', compact('conversations', 'contacts'));   
    }

    public function openChat($userTwoId){
        $authUserId = auth()->id();
        $authUser = auth()->user();
        $conversation = Conversation::between($authUserId, $userTwoId)->firstOrCreate([
            'user_one_id' => $authUserId,
            'user_two_id' => $userTwoId,
        ]);
        $conversations = $authUser->conversations()->with(['userOne', 'userTwo'])->paginate(50);
        $contacts = $authUser->contacts()->paginate(50);
        $messages = $conversation->messages()->with('sender')->paginate(50);
        $conversationId=$conversation->id;
        return view('admin.chats.index',get_defined_vars() );
    }
   
}
