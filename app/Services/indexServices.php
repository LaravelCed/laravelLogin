<?php

namespace App\Services;

use App\Models\Users;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class indexServices {
    public static function sign_up_action($request) {
        $exeSignUp = 0;
        $name = $request->input('name');
        $email = $request->input('email');
        $pass = $request->input('pass');
        $type = $request->input('type');

        $result = Users::create([
            'user_name'=>$name,
            'user_email'=>$email,
            'user_pass'=>Hash::make($pass),
            'user_type'=>$type
        ]);

        if ($result) {
            $exeSignUp = 1;
        }

        return view('sign_up', compact('exeSignUp'));
    }

    public static function login_action($request) {
        $exeEmail = 0;
        $exePass = 0;
        $email = $request->input('email');
        $pass = $request->input('pass');

        $result = Users::where('user_email',$email)->first();

        if (isset($result->user_email) && $result->user_email === $email) {
            if (Hash::check($pass, $result->user_pass)) {
                Auth::login($result);
            }

            else {
                $exePass = 1;
            }
        }

        else {
            $exeEmail = 1;
        }

        return view('index', compact('exeEmail','exePass'));
    }
}