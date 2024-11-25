<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Venue; //  Venue is your model for venues
use App\Models\Hotel; // Assuming Hotel is your model for hotels
use App\Models\Shortlet;

class SearchController extends Controller
{
    //
    public function search(Request $request)
    {
        // Retrieve the search query
        $query = strtolower($request->input('search-field')); // Convert the search query to lowercase
    
        // Check if the query matches predefined categories
        if ($query === 'venues' || $query === 'venue') {
            return redirect()->route('venues'); // Redirect to venue page
        } elseif ($query === 'hotels' || $query === 'hotel') {
            return redirect()->route('hotels'); // Redirect to hotel page
        } elseif ($query === 'shortlets' || $query === 'shortlet') {
            return redirect()->route('shortlets'); // Redirect to shortlet page
        }
    
        // If the search doesn't match predefined categories, return a 'no results' view
        // return view('search.results')->with('message', 'No results found matching your search criteria.');
    }
    
    
    
    
    
}
