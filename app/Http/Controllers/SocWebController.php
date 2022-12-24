<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Laravel\Socialite\Facades\Socialite;
use App\Http\Controllers\service\SocEnterController;
use Illuminate\Support\Facades\Auth;

class SocWebController extends Controller
{
    /**
     * отправка пользователя для авторизации в соц сети
     */
    public function enter()
    {
        return Socialite::driver('vkontakte')->redirect();
    }

    /**
     * келбек от вк ... возвращается что
     */
    public function callBack()
    {

        $user = Socialite::driver('vkontakte')->user();
        
        $data = [];
        $data['email'] = $user->getEmail();
        $data['name'] = $user->getName();
        $data['avatar'] = $user->getAvatar();
        $data['nick'] = $user->getNickname();
        $data['socIdVk'] = $user->getId();

        // dd($data);
        $ee = SocEnterController::enter($data);
       
        // dd( __LINE__, $ee );
        // $userNow
        Auth::loginUsingId($ee->id);

        return redirect()->route('home');

    }
}
