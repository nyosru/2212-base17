<?php

namespace Modules\ZemkDi\Http\Controllers\services;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

use Illuminate\Support\Facades\Hash;
use App\Models\User;

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
