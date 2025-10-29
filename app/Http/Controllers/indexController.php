<?php

namespace App\Http\Controllers;

use App\Models\Users;
use Illuminate\Http\Request;
use App\Services\indexServices;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class indexController extends Controller
{
    public function sign_up_action(Request $request) {
        return indexServices::sign_up_action($request);
    }

    public function login_action(Request $request) {
        return indexServices::login_action($request);
    }
}
