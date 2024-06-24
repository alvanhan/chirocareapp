<?php

namespace App\Http\Controllers\BackEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardControler extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('BackEnd.dashborad');
    }
}
