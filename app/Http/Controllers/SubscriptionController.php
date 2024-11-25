<?php

namespace App\Http\Controllers;

use App\Models\Subscription;
use Illuminate\Http\Request;

class SubscriptionController extends Controller
{
    public function subscribe(Request $request)
    {
        // Validate email input
        $request->validate([
            'email' => 'required|email'
        ]);

        // You can store the email in the database or send it to your email marketing tool here
        Subscription::create(['email' => $request->email]);

        // For demonstration, let's just return a success message
        return back()->with('success', 'Tour schedule has been sent successfully!');
    }
}
