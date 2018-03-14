<?php

namespace App\Http\Controllers;

use App\Mail\MessageRecieved;
use App\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Settings;

class SiteController extends Controller
{
    public function index()
    {
        if (!Settings::all()->count()) {
            $model = new Settings();
            $model->first_block_text = 'FIRST BLOCK TEXT';
            $model->second_block_text = 'SECOND BLOCK TEXT';
            $model->third_block_text = 'THIRD BLOCK TEXT';
            $model->insta_link = '/';
            $model->youtube_link = '/';
            $model->tel_num = '000';
            $model->email = 'email@email.com';
            $model->save();
        }
        return view('front.home')->with('settings', Settings::firstOrFail());
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
        $model->read = false;
        $model->save();
//        Mail::to('')
//            ->send(new MessageRecieved($model));
        return response()->json($model, 200);
    }
}
