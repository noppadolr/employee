<?php

namespace App\Http\Controllers;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AgentController extends Controller
{
    public function AgentDashboard(){
    return \view('agent.agent_dashboard');

    } //end method AgentDashboard

    public function AgentLogout(Request $request): RedirectResponse{

        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');

    } //end agentlogout method


}

