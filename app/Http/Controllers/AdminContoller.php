<?php

namespace App\Http\Controllers;

use App\Models\ClientMessage;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Email;
use App\Models\Hotel;
use App\Models\Shortlet;
use App\Models\Venue;

class AdminContoller extends Controller
{
    //AdminDashboard
    public function AdminDashboard(){
        

        return view('admin.admin_split');

    }

    //AdminLogout
    public function AdminLogout(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/admin');
    }
//AdminLogin
    public function AdminLogin(){
        return view('admin.admin_login');

    }
//Adminprofile
    public function AdminProfile(){
        $id = Auth::user()->id ;
        $profile=User::find($id);
        return view('admin.admin_profile',compact('profile'));

    }

    public function AdminStore(Request $request){
        $id = Auth::user()->id;
        $data = User::find($id);
        $data->username = $request->username;
        $data->name = $request->name;
        $data->email = $request->email;
        $data->phonenumber = $request->phonenumber;
        $data->address = $request->address; 

        if ($request->file('photo')) {
            $file = $request->file('photo');
            $filename = date('YmdHi').$file->getClientOriginalName(); 
            $file->move(public_path('upload'),$filename);
            $data['photo'] = $filename;  
        }

        $data->save();

        return redirect()->back();

    }

    public function AdminRegister(){
        return view('admin.admin_register');

    }

    
    public function AdminEmail(){
        $emails = Email::all();
        return view('admin.admin_email' , compact('emails'));

    }

    public function AdminClient(){
        $emails = ClientMessage::all();
        return view('admin.admin_client' , compact('emails'));

    }


    public function AdminCompose(){
        // $emails = ClientMessage::all();
        return view('admin.admin_compose');

    }




    public function Venues() {
        $venues = Venue::paginate(10); // Fetch 10 hotels per page
        $properties = Venue::all();
        return view('admin.admin_venue', compact('venues','properties'));
    }

    
    public function Hotels() {
        $hotels = Hotel::paginate(10); // Fetch 10 hotels per page
        $properties = Hotel::all();
        return view('admin.admin_hotel', compact('hotels','properties'));
    }
    

    public function Shortlet() {
        $shortlets = Shortlet::paginate(10); // Fetch 10 hotels per page
        $properties = Shortlet::all();
        return view('admin.admin_shortlet', compact('shortlets','properties'));
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

    public function showFeaturedProperties()
{
    $hotels = Hotel::where('featured', 1);
    $venues = Venue::where('featured', 1);
    $shortlets = Shortlet::where('featured', 1);

    $featuredProperties = $hotels->union($venues)->union($shortlets)->paginate(10);

    // $featuredProperties = Hotel::where('featured', 1)->paginate(10); // Fetch properties with featured = 1
    return view('admin.featured_properties', compact('featuredProperties'));
}


public function changePropertyStatus(Request $request, $id)
{
    $property = Hotel::find($id) ?? Venue::find($id) ?? Shortlet::find($id);
    if ($property) {
        $property->status = $request->status; // Set status to 1
        $property->save();
        return response()->json(['success' => 'Status changed successfully.']);
    }
    return response()->json(['error' => 'Property not found.'], 404);
}


public function showFeaturedVenue()
{
    $featuredProperties = Venue::where('featured', 1)->paginate(10); // Fetch properties with featured = 1
    return view('admin.featured_properties', compact('featuredProperties'));
}


public function changeStatus(Request $request, $id)
{
    $venue = Venue::find($id);
    if ($venue) {
        $venue->status = $request->status;
        $venue->save();
        return response()->json(['success' => true]);
    }
    return response()->json(['success' => false], 404);
}

}
