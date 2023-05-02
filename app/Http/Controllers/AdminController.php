<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function AdminDashboard(){
        return view('admin.admin_dashboard');
    } // End Method AdminDashboard

    public function AdminLogout(Request $request): RedirectResponse{

            Auth::guard('web')->logout();

            $request->session()->invalidate();

            $request->session()->regenerateToken();

            return redirect('/login');

    } //end adminlogout method






}
