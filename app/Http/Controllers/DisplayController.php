<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use App\Models\Shortlet;
use Illuminate\Http\Request;
use App\Models\Venue;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class DisplayController extends Controller
{
    //
    public function display(){
        

        // Fetch only the venues uploaded by this user
        $venues = Venue::where('user_id', Auth::id())->paginate(10);
        
    // Check if any venues are retrieved
   

    // Pass the filtered venues to the view
    return view('client.venue_display', compact('venues'));
    }

    public function hoteldisplay(){
        

        // Fetch only the venues uploaded by this user
        $hotels = Hotel::where('user_id', Auth::id())->paginate(10);
        
    // Check if any venues are retrieved
   

    // Pass the filtered venues to the view
    return view('client.hotel_display', compact('hotels'));
    }

    public function shortletdisplay(){
        

        // Fetch only the venues uploaded by this user
        $shortlets = Shortlet::where('user_id', Auth::id())->paginate(10);
        
    // Check if any venues are retrieved
   

    // Pass the filtered venues to the view
    return view('client.shortlet_display', compact('shortlets'));
    }
// edit venue
    public function edit($id) {
        $venue = Venue::findOrFail($id);
        return view('client.venue_edit', compact('venue'));
    }
// edit shortlet
    public function shortletedit($id) {
        $shortlet = Shortlet::findOrFail($id);
        return view('client.shortlet_edit', compact('shortlet'));
    }

    //hotel edit
    public function hoteledit($id) {
        $hotel = Hotel::findOrFail($id);
        return view('client.hotel_edit', compact('hotel'));
    }
    //update venue
    public function update(Request $request, $id) {
        $venue = Venue::findOrFail($id);
        $venue->update($request->all());
    
        return redirect()->route('venue.display')->with('success', 'Venue updated successfully');
    }


    //update shortlet

    public function updateshortlet(Request $request, $id) {
        $shortlet = Shortlet::findOrFail($id);
        $shortlet->update($request->all());
    
        return redirect()->route('shortlet.display')->with('success', 'Shortlet updated successfully');
    }

    //update hotel
    public function hotelupdate(Request $request, $id) {
        $hotel = Hotel::findOrFail($id);
        $hotel->update($request->all());
    
        return redirect()->route('hotel.display')->with('success', 'Venue updated successfully');
    }
//delete Venue
    public function destroy($id) {
        $venue = Venue::findOrFail($id);
        $venue->delete();
    
        return redirect()->route('venues.index')->with('success', 'Venue deleted successfully');
    }
//delete shortlet
    public function shortletdestroy($id) {
        $shortlet = Shortlet::findOrFail($id);
        $shortlet->delete();
    
        return redirect()->route('shortlet.display')->with('success', 'Venue deleted successfully');
    }
    
    //delete hotel
    public function hoteldestroy($id) {
        $hotel = Hotel::findOrFail($id);
        $hotel->delete();
    
        return redirect()->route('hotel.display')->with('success', 'Venue deleted successfully');
    }
    
}
