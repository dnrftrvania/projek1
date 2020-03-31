<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class DailyController extends Controller
{
    public function daily() {
        $data = "Data All Daily";
        return response()->json($data, 200);
    }

    public function dailyAuth() {
        $data = "Welcome " . Auth::daily()->name;
        return response()->json($data, 200);
    }
}