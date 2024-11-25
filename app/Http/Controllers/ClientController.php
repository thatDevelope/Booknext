<?php

namespace App\Http\Controllers;

use App\Models\ClientMessage;
use App\Models\Email;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class ClientController extends Controller
{
    public function ClientDashboard(){

        

    // Assuming you have an 'emails' table with 'user_id' and 'created_at' column
  
        return view ('client.client_split');
    }
    //

    public function ClientLogout(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/signup');
    }

    public function ClientHotel(){
        return view ('client.hotels');
    }
    public function ClientVenue(){
        return view ('client.venue');
    }
    public function ClientShortlet(){
        return view ('client.shortlet');
    }

    // public function ClientFeature(){
    //     return view ('client.feature');
    // }


    public function ClientProfile(){
        $id = Auth::user()->id ;
        $profile=User::find($id);
        return view('client.client_profile',compact('profile'));

    }

    public function ClientStore(Request $request){
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

    public function ChangePassword(){

        $id = Auth::user()->id;
        $profileData = User::find($id);
        return view('client.client_password',compact('profileData'));

     }// End Method 

     public function ClientUpdatePassword(Request $request)
     {
         // Validation 
         $request->validate([
             'old_password' => 'required',
             'new_password' => 'required|string|min:8|confirmed',
         ]);
     
         // Match the old password
         if (!Hash::check($request->old_password, auth()->user()->password)) {
             $notification = array(
                 'message' => 'Old Password Does not Match!',
                 'alert-type' => 'error'
             );
     
             return back()->with($notification);
         }
     
         // Update the new password
         User::whereId(auth()->user()->password)->update([
             'password' => Hash::make($request->new_password)
         ]);
     
         // Regenerate the session
         $request->session()->regenerate();
     
         $notification = array(
             'message' => 'Password Changed Successfully',
             'alert-type' => 'success'
         );
     
         return back()->with($notification); 
     }

     public function scheduledisplay()
{
    // Get all emails sent to the authenticated user
    $emails = Email::where('user_id', Auth::id())->get();
    // $emailscount=Email::count();
    // $emails = Email::where('user_id', Auth::id())->paginate(10);

    return view('client.scheduleemail', compact('emails'));
}


public function Clientdisplay()
{
    // Get all emails sent to the authenticated user
    $emails = ClientMessage::where('user_id', Auth::id())->get();
    // $emails = Email::where('user_id', Auth::id())->paginate(10);

    return view('client.clientmessage', compact('emails'));
}


public function Compose()
{
    // Get all emails sent to the authenticated user
    // $emails = ClientMessage::where('user_id', Auth::id())->get();
    // $emails = Email::where('user_id', Auth::id())->paginate(10);

    return view('client.compose_email');
}

    
}
