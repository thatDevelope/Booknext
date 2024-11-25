<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function redirectToDashboard(Request $request)
    {
        // Determine the URL based on the role
        if ($request->user()->role === 'admin') {
            return redirect('/admin/dashboard/');
        } elseif ($request->user()->role === 'client') {
            return redirect('/client/dashboard/');
        } else {
            return redirect('/');
        }
    }
}
