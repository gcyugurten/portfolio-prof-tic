<?php

namespace App\Http\Controllers\Elearning;

use App\Http\Controllers\Controller;
use App\Models\Group;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $groups = Group::all();
        return view('elearning.home', compact('groups'));
    }
}
