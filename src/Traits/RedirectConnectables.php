<?php


namespace Thomasdominic\Connectable\Traits;


trait RedirectConnectables
{

    public function redirectTo()
    {
        $user = Auth::user();
        if(!is_null($user->connectable)){
            return $user->connectable->redirectTo();
        }
        return '/home';
    }

}
