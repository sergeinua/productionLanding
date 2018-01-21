<?php

namespace App\Http\Controllers;

use App\Mail\MessageRecieved;
use App\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SiteController extends Controller
{
    public function index()
    {
        return view('front.home');
    }

    public function sendMessage(Request $request)
    {
        $model = new Message();
        $model->name = $request->input('name');
        $model->type = $request->input('type');
        $model->duration = $request->input('duration');
        $model->budget = $request->input('budget');
        $model->telephone = $request->input('telephone');
        $model->email = $request->input('email');
        $model->save();
//        Mail::to('')
//            ->send(new MessageRecieved($model));
        return response()->json($model, 200);
    }
}
