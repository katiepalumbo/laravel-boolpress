<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index() {

        $endOfCurrentMonth = Carbon::now()->endOfDay()->endOfMonth();
        $now = Carbon::now();
        $diffInDays = $endOfCurrentMonth->diffInDays($now);

        $user = Auth::user();

        /*if (Auth::check()) {
            echo "You've logged in";
        } else {
            echo "error";
        }*/

        return view('admin.home', compact('user', 'diffInDays'));

    }
}
