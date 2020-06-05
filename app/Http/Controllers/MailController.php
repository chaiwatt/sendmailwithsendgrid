<?php

namespace App\Http\Controllers;

use App\Mail\TestEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function Send(){
        $data = [
            'sendermail' => 'noreply@npctestserver.com',
            'sendername' => 'Admin',
            'title' => 'Test title',
            'message' => 'This is a test!'
        ];
        Mail::to('joerocknpc@gmail.com')->send(new TestEmail($data));
        return redirect()->back();
    }
}
