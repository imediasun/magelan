<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Firebase\JWT\JWT;
class Application extends Model
{
    public function generateAuthToken()
    {

        $jwt = JWT::encode([
            'iss' => 'magelan',
            'sub' => $this->key,
            'iat' => time(),
            'exp' => time() + (5 * 60 * 60),
        ], 'w5yuCV2mQDVTGmn3');

        return $jwt;
    }
}
