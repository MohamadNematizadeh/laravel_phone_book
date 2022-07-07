<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;

class MessageController extends Controller
{
    function index()
    {   $messages = Message::all();

        return view("welcome", [
            "messages" => $messages
        ]);
    }
    function send(Request $request)
    {
        $this->validate($request,[
            'firstname'=>'required|max:256',
            'email'=>'required|max:256|email',

        ]);

        $message = new Message();
        $message->id = $request["id"];
        $message->name = $request["name"];
        $message->mobile = $request["Mobile"];
        $message->email = $request["Email"];
        $message->save();

        $messages = Message::all();
        return view("welcome", [
            "messages" => $messages
        ]);
    }
    public function destroy(Message $message)
    {
        $message->delete();
        return redirect()->route('message.index')->with('swal-success', 'رکورد با موفقیت حذف شد');
    }
//    اجرا کنید


}
