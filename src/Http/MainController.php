<?php

namespace LaravelCommunity\Http;

use App\Http\Controllers\Controller;
use App\Models\Club;
use App\Models\Community\Post;
use App\Models\User;

class MainController extends Controller
{
    public function index(){
        return view('community::community.index');
    }

}
