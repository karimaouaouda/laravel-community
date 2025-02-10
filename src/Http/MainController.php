<?php

namespace LaravelCommunity\Http;

use App\Http\Controllers\Controller;

class MainController extends Controller
{
    public function index(){
        return view('community::community.index');
    }
}
