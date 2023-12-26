<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreRequest;
use App\Http\Resources\Message\MessageResource;
use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function index(){
        $messages = Message::latest()->get();
        $messages = MessageResource::collection($messages)->resolve();
        return inertia('Message/Index',compact('messages'));
    }
    public function store(StoreRequest $request){
        $data = $request->validated();
        $message = Message::create($data);
        return MessageResource::make($message)->resolve();
    }
}
