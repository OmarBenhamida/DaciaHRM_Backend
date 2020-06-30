<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employe;
use App\Post;
use App\Employe_Post;
class LoginController extends SuperController
{
     protected $post ;
     protected $employepost ;

    public function __construct(Employe $model, Post $post, Employe_Post $employepost)
    {

        parent::__construct($model);

        $this->post = $post;
        $this->employepost = $employepost;

    }

    public function login(Request $request)
    {
        $data = $request->validate([
            'email' => 'required|email',
            'passwd' => 'required',
            //'role' => 'required'
        ]);

        // $request->email
        $email = $request->get('email');
        $passwd = $request->get('passwd');
        //$role = $request->get('role');


        $user = $this->_context
            ->where('email', $email)
            ->first()
            ;

        if ($user == null) {
            return [
                'code' => -1 ];
        } else if ($user->passwd != $passwd) {
            return ['code' => 0];
        // } else if ($user->role != 'admin') {
        //     return ['code' => 1];
         }

        //$user->passwd = "";

    //    else if ($user->role != 1 && $user->role != 2) 
    //     {
    //     return ['code' => 3, 'user' => $user, /*'token' => $this->createToken($user)*/];
    //     }

    //     else if ($user->role != 1 && $user->role != 2) 
    //     {
    //     return ['code' => 3, 'user' => $user, /*'token' => $this->createToken($user)*/];
    //     }
    $employepost = $this->employepost -> where('idemploye',$user->id)->where('dateFin',null)->first();
     $p = $this->post-> where('id',$employepost->idpost)->first();
    return ['code' => 1, 'user' => $user,'post' => $p,'employepost'=> $employepost /*'token' => $this->createToken($user)*/];



    }

    public function register(Request $request)
    {
        return $this->_context->create($request->all());
    }

    public function createToken($user) {

        // $customClaims = ['role' => $user->role];

        // JWTAuth::attempt($credentials, $customClaims);
        $customClaims = ['myrole' => $user->role];

        // $payload = JWTFactory::make($customClaims);

        // $token = JWTAuth::encode($payload);

        // $factory = JWTFactory::customClaims([
        //     'sub'   => env('API_ID'),
        // ]);

        // $payload = JWTFactory::customClaims(['id' => 'ff'])->make();
        // $token = JWTAuth::encode($payload);
        // or
        $user->customField = 'benhamida';
        $token = FacadesJWTAuth::fromUser($user, $customClaims);


        return $token;
    }





    
}
