<?php

namespace App\Http\Controllers\service;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class SocEnterController extends Controller
{
    static public function enter($user)
    {
        $user['password'] = Hash::make(rand(0,99999));
        $userNow = User::firstOrCreate(
            ['email' => $user['email']],
            $user
        );
        // dd( __LINE__, $e);
        return $userNow;
    }
}
