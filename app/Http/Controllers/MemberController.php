<?php

namespace App\Http\Controllers;

use App\Models\Test;
use App\Models\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

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
    public function cache(Request $req)
    {
        $data = Users::find($req->user_id);

        $name =cache::put('role-'.$req->user_id,$data);
    
    }
    public function get(Request $request)
    {
        $data = cache::get('role-'.$request->user_id);
        return $data;
    }



}
