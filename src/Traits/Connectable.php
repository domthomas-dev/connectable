<?php


namespace Thomasdominic\Connectable\Traits;


use Illuminate\Support\Facades\Hash;

trait Connectable
{

    public static function getPropertiesAuthentification(iterable $data)
    {
        $data = collect($data);
        return [
            'name' => $data->get('name'),
            'email' => $data->get('email'),
            'password' => Hash::make($data->get('password')),
        ];
    }

    public function user()
    {
        return $this->morphOne('App\User', 'connectable');
    }
}
