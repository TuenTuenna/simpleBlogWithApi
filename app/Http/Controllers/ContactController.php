<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    // 메일을 보낸다.
    public function store(){
        // e메일 예외처리
        request()->validate(['email' => 'required|email']);

//        dd(request('email'));

        Mail::raw('메일을 발송했습니다!!!!!!!', function($message){
            // 누구에게 메일을 보내냐
            $message->to(request('email'))
                ->subject('안녕하세요?!');
        });

        // 메일이 보내지면 원래 페이지로 이동한다
        // 세션에 플래시 메세지를 보낸다. - 플래시 메세지는 한번만 요청한다.
        return redirect('/profile')
                    ->with('message', '이메일이 발송 되었습니다!!!!');
    }

}
