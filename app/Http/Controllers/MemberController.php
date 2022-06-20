<?php

namespace App\Http\Controllers;

use App\Models\Test;
use App\Models\Users;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    //
    public function store()
    {
        $datas = Test::all();

        foreach ($datas as $data){
            $user = Users::where('email',$data->Email)->first();
            // if ($user){
            //     $data->teams = $user ->
            // }
            return $user;


        }
    }
}
