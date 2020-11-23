<?php

namespace App\Http\Controllers;

use App\Models\Member;
use App\Models\Team;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function test()
    {

        $user = auth()->guest();
        dd($user);
    }
}
