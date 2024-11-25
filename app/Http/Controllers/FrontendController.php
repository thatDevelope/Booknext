<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use App\Models\Image;
use App\Models\MultiImage;
use App\Models\Ratings;
use App\Models\Shortlet;
use App\Models\User;
use App\Models\Venue;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    //
    public function Index(){
        $usercount=Venue::count();
        $shortletcount=Shortlet::count();
        $hotelcount=Hotel::count();
        $hotels = Hotel::where('status', 1)->get(); // Only approved hotels
        $shortlets = Shortlet::where('status', 1)->get(); // Only approved shortlets
        $venues = Venue::where('status', 1)->get(); 
        $agents = User::where('role', 'agent')->get();
        $users = User::all();
        $properties = $hotels->merge($shortlets)->merge($venues)->merge($users);
        // if ($type == 'hotel') {
        //     $property = Hotel::findOrFail($id);
        // } elseif ($type == 'shortlet') {
        //     $property = Shortlet::findOrFail($id);
        // } elseif ($type == 'venue') {
        //     $property = Venue::findOrFail($id);
        // } else {
        //     abort(404); // Handle invalid type
        // }

        return view('user.user_split',compact('usercount','shortletcount','hotelcount','agents','properties'));
    }

    public function SignUp(){
        return view('user.signup');
    }

    public function Hotels() {
        $hotels = Hotel::paginate(10); // Fetch 10 hotels per page
        $properties = Hotel::where('status', 1)->get();
        return view('user.hotels', compact('hotels','properties'));
    }
    
    public function Venues() {
        $venues = Venue::paginate(10); // Fetch 10 hotels per page
        $properties = Venue::where('status', 1)->get();
        return view('user.venue', compact('venues','properties'));
    }

    public function Shortlet() {
        $shortlets = Shortlet::paginate(10); // Fetch 10 hotels per page
        $properties = Shortlet::where('status', 1)->get();
        return view('user.shortlet', compact('shortlets','properties'));
    }

    public function EventDetails(){
        return view('user.Event_details');
    }

    public function agent(){
        return view('user.agent');
     }

     public function details($id, Request $request){
        $segment = $request->segment(1); // This gets the first part of the URL (shortlet, hotel, or venue)

        if ($segment == 'shortlet') {
            $property = Shortlet::findOrFail($id);
            $property_type = 'shortlet'; 
            $property_type = 'shortlet';
            $similarProperties = Shortlet::where('location', $property->location)
                 ->where('id', '!=', $property->id) // Exclude current venue
                 ->take(5) // Limit the number of similar properties
                  ->get()
                  ->map(function($similar) use ($property_type) {
                    $similar->property_type = $property_type;
                    return $similar;
             });
        } elseif ($segment == 'hotel') {
            $property = Hotel::findOrFail($id);
            $property_type = 'hotel';
            $similarProperties = Hotel::where('location', $property->location)
                 ->where('id', '!=', $property->id) // Exclude current venue
                 ->take(5) // Limit the number of similar properties
                  ->get()
                  ->map(function($similar) use ($property_type) {
                    $similar->property_type = $property_type;
                    return $similar;
             });
         } elseif ($segment == 'venue') {
             $property = Venue::findOrFail($id);
             $property_type = 'venue';
             $similarProperties = Venue::where('location', $property->location)
                      ->where('id', '!=', $property->id) // Exclude current venue
                      ->take(5) // Limit the number of similar properties
                      ->get()
                      ->map(function($similar) use ($property_type) {
                        $similar->property_type = $property_type;
                        return $similar;
                    });
         } else {
             abort(404); // Page not found if none of the conditions match
        }

        // $multiImages = Image::where('property_id', $id);
                            //  ->where('property_type', $property_type) // Filter by property type
                            //  ->get();
                            //  dd($multiImages);
        $photos = json_decode($property->photos, true);
        $averageRating = Ratings::where('user_id', $request->user_id)->avg('rating');
        $averageRating = round($averageRating, 1);
        if (!$averageRating) {
            $averageRating = 0;
        }

        $listerId = $property->user_id; 

    // Calculate average rating for the lister
    $averageRating = Ratings::where('user_id', $listerId)->avg('rating');
    $averageRating = round($averageRating, 1); // Round the rating to 1 decimal
    if (!$averageRating) {
        $averageRating = 0; // If no rating is found, default to 0
    }

    // Count total reviews for the lister
    $totalReviews = Ratings::where('user_id', $listerId)->count();

     



        return view('user.results',compact('property', 'segment','photos','similarProperties','property_type','averageRating','totalReviews'));


   

}

public function payment(){
    return view('user.payment');
}

public function contact(){
    return view('user.contact');
}

public function Blog(){
    return view('user.blog');
}
}