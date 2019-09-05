<?php


namespace Thomasdominic\Connectable\Traits;


use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;

trait Connectable
{

    public static function getPropertiesAuthentification(iterable $data,bool $cryptedPassword=false)
    {
        $data = collect($data);
        return [
            'name' => $data->get('name'),
            'email' => $data->get('email'),
            'password' => ($cryptedPassword ?? $data->get('password') ?? Hash::make($data->get('password'))),
        ];
    }

    public function user()
    {
        return $this->morphOne('App\User', 'connectable');
    }
}
