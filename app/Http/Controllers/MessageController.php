<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Message;

class MessageController extends Controller
{
    //
    public function store(Request $request){
        // DB::table('messages')->insert(['msg'=>$request->input('msg')]);
        $input = $request->all();
        Message::create($input);
        return redirect('/')->with('flash_message', 'your message was sent succesfully!');
    }
}