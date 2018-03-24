<?php

namespace App\Http\Controllers;

use App\Message;
use Illuminate\Http\Request;
use App\Settings;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['showMessage']]);
    }

    /**
     * Isn't in use for now
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function index()
    {
        return redirect('/admin/message');
    }

    /**
     * Renders message list
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function messageList()
    {
//        dd(Message::orderBy('created_at', 'desc')->get());
        $messages = Message::orderBy('created_at', 'desc')->get();
        return view('admin.message.list')->with('messages', $messages);
    }

    /**
     * Request via api for updating message status
     *
     * @param $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function showMessage($id)
    {
        $model = Message::findOrFail($id);
        $model->read = true;
        $model->save();
        return response()->json($model, 200);
    }

    public function settings(Request $request)
    {
        $model = Settings::firstOrFail();
        if ($request->isMethod('post')) {
            $model->first_block_text = $request->input('first_block_text');
            $model->second_block_text = $request->input('second_block_text');
            $model->insta_link = $request->input('insta_link');
            $model->youtube_link = $request->input('youtube_link');
            $model->facebook_link = $request->input('facebook_link');
            $model->tel_num = $request->input('tel_num');
            $model->email = $request->input('email');
            $model->save();
        }
        return view('admin.settings.settings')->with('settings', $model);
    }
}
