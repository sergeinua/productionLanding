<?php

namespace App\Http\Controllers;

use App\Message;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
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
        dd(Message::orderBy('created_at', 'desc')->get());
        return view('admin.message.list');
    }

    /**
     * Request via api for updating message status
     *
     * @param $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function markAsRead($id)
    {
        $model = Message::findOrFail($id);
        $model->read = true;
        return response()->json('OK', 200);
    }
}
