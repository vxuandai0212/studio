<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail;

class MailController extends Controller
{
    public function index()
    {
        return Mail::all();
    }

    public function show(Mail $mail)
    {
        return $mail;
    }

    public function store(Request $request)
    {
        $mail = Mail::create($request->all());

        return response()->json($mail, 201);
    }

    public function update(Request $request, Mail $mail)
    {
        $mail->update($request->all());

        return response()->json($mail, 200);
    }

    public function delete(Mail $mail)
    {
        $mail->delete();

        return response()->json(null, 204);
    }
}
