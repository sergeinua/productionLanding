<?php

namespace App\Http\Controllers;

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
        $name = $request->input('name');
        $type = $request->input('type');
        Mail::to($request->input('email'))->send('name: ' . $name . ' and type:' . $type);
        return response()->json($request, 200);
    }
}
