<?php

namespace Modules\ZemkDi\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

use Laravel\Socialite\Facades\Socialite;
use Modules\ZemkDi\Http\Controllers\Services\SocEnterController;

use Illuminate\Support\Facades\Auth;
use Nwidart\Modules\Module;

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

        // $user = Socialite::driver('vkontakte')->user();
        // try {
            $user = Socialite::driver('vkontakte')->stateless()->user();
            // $user = Socialite::driver('vkontakte')->user();
        // } catch (InvalidStateException $e) {
        //     $user = Socialite::driver('vkontakte')->stateless()->user();
        // }
        // dd($user);

        $data = [];
        $data['email'] = $user->getEmail();
        $data['name'] = $user->getName();
        $data['avatar'] = $user->getAvatar();
        $data['nick'] = $user->getNickname();
        $data['socIdVk'] = $user->getId();
        // $data['module'] = Module::getModulePath('name');
        $data['module'] = 'ZemkDi';
        // $data['module'] = $module->getName();

        // dd($data);
        $ee = SocEnterController::enter($data);

        // dd( __LINE__, $ee );
        // $userNow
        Auth::loginUsingId($ee->id, true);
        return redirect('/');
        // return redirect('http://zemkdi.17.ru/');
        // return redirect()->route('zemk-index');

    }
}
