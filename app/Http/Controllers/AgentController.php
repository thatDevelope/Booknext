<?php

namespace App\Http\Controllers;

use App\Models\agent;
use Illuminate\Http\Request;

class AgentController extends Controller
{
    public function registerAgent(Request $request)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'phone_number' => 'required|string|max:15',
        'password' => 'required|string|min:8',
        'photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
    ]);

    // Store the uploaded image
    $photoName = time().'.'.$request->photo->extension();  
    $request->photo->move(public_path('upload/agents'), $photoName);

    // Create new agent
    $agent = new agent();
    $agent->name = $request->name;
    $agent->phone_number = $request->phone_number;
    $agent->password = bcrypt($request->password); // Hash the password
    $agent->photo = 'upload/agents/' . $photoName;
    // $agent->role = 'agent'; // Set the role as agent
    $agent->save();

    return redirect()->route('agent')->with('success', 'Agent registered successfully!');
}

}
