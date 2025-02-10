<?php

namespace LaravelCommunity\Http;

use App\Http\Controllers\Controller;
use App\Models\Club;
use App\Models\User;
use LaravelCommunity\Models\LaravelCommunity\Post;

class MainController extends Controller
{
    public function index(){
        return view('community::community.index');
    }

    public function profile($username){
        $user = User::where('username', $username)->get();
        $club = Club::where('username', $username)->get();
        if($user->isEmpty() && $club->isEmpty()){
            abort(404, "there is no user or club with that username");
        }

        $type = !$user->isEmpty() ? User::class : Club::class;
        $user = !$user->isEmpty() ? $user->first() : $club->first();

        return view('community.profile', compact('user', 'type'));
    }

    public function viewPost(Post $post){
        return view('community.post', compact('post'));
    }

}
