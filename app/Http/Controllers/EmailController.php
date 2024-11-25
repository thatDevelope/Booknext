<?php

namespace App\Http\Controllers;

use App\Mail\ComposeMail;
use App\Mail\ComposeMail2;
use App\Mail\ContactMail;
use Illuminate\Http\Request;
use App\Mail\ScheduleTourMail;
use App\Models\User;
use App\Models\Venue;
use Illuminate\Support\Facades\Mail;
use Exception;
use Illuminate\Support\Facades\Log;
use App\Mail\MessageToClient;
use App\Mail\SendEmail;
use App\Mail\ThankYouForSchedulingMail;
use App\Models\ClientMessage;
use App\Models\Email;
use App\Models\Hotel;
use App\Models\Shortlet;
use Illuminate\Support\Facades\Auth;


class EmailController extends Controller
{
    public function scheduleTour(Request $request, $id, $property_type)
    {
        // Validate form inputs
        $request->validate([
            'date' => 'required|date',
            'time' => 'required|string',
            'name' => 'required|string',
            'email' => 'required|email',
            'phone' => 'required|string',
            'message' => 'nullable|string',
        ]);
    
        try {
            Log::info('Scheduling tour for property ID: ' . $id . ' of type: ' . $property_type);
    
            // Determine property type and fetch the correct property model
            if ($property_type === 'venue') {
                $property = Venue::findOrFail($id);
            } elseif ($property_type === 'hotel') {
                $property = Hotel::findOrFail($id);
            } elseif ($property_type === 'shortlet') {
                $property = Shortlet::findOrFail($id);
            } else {
                throw new \Exception('Invalid property type.');
            }
    
            Log::info('Property found: ' . ' found: ' . $property->name);
    
            // Fetch the user who listed the property using the user_id
            $user = User::findOrFail($property->user_id);
            Log::info('User found: ' . $user->email);
    
            // Set the admin email (replace with your actual admin email)
            $adminEmail = 'tsirchi@gmail.com';

            // $user = User::findOrFail($property->user_id);
            // Log::info('User found: ' . $user->email);
    
    
            // Prepare email data (adjust as needed)
            $emailData = [
                'date' => $request->date,
                'time' => $request->time,
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'message' => $request->message,
                'property_name' => $property->name, // Include property name in the email
            ];
    
            // Send email to the user who listed the property

            Mail::to($user->email)
            ->cc($adminEmail)
            ->send(new ScheduleTourMail($emailData));

            Email::create([
                'user_id' => $user->id,
                'subject' => 'Tour Scheduled for ' . $property->name,
                'message' => 'A tour has been scheduled for your property.',
                'recipient_email' => $user->email,
            ]);

            $thankYouEmailData = [
                'name' => $request->name,
                'property' => $property->name,
            ];


          
            
            // Send thank you email to the user who scheduled the tour
            Mail::to($request->email)
                ->send(new ThankYouForSchedulingMail($thankYouEmailData));

                Email::create([
                    'user_id' => Auth::id(), // The client scheduling the tour
                    'subject' => 'Thank you for scheduling a tour',
                    'message' => 'Thank you for scheduling a tour for ' . $property->name,
                    'recipient_email' => $request->email,
                ]);
    
            Log::info('Email sent to: ' . $user->email . ' and ' . $adminEmail);
    
            // Also send a confirmation email to the client (person scheduling the tour)
            // Mail::to($request->email)
            //     ->send(new ScheduleTourMail($emailData));
    
            // Log::info('Confirmation email sent to client: ' . $request->email);
    
            return back()->with('success', 'Tour schedule has been sent successfully!');
        } catch (\Exception $e) {
            Log::error('Mail sending failed: ' . $e->getMessage());
            return back()->with('error', 'Failed to send the tour schedule. Please try again later.');
        }
    }
    
public function sendMessageToClient(Request $request,$id, $property_type)
{
    try {
        // Determine the property type and fetch the correct property
        switch ($property_type) {
            case 'venue':
                $property = Venue::findOrFail($id);
                break;
            case 'shortlet':
                $property = Shortlet::findOrFail($id);
                break;
            case 'hotel':
                $property = Hotel::findOrFail($id);
                break;
            default:
                return response()->json(['error' => 'Invalid property type.'], 400);
        }

        // Get the user who listed the property
        $user = User::findOrFail($property->user_id);
        Log::info('Property found: ' . $property->client_name);

        // Prepare the data from the form
        $name = $request->input('name');
        $email = $request->input('email');
        $phone = $request->input('phone');
        $messageContent = $request->input('message');


        ClientMessage::create([
            'user_id' => $user->id,
            'property_id' => $property->id,
            'property_type' => $property_type,
            'name' => $name,
            'email' => $email,
            'phone' => $phone,
            'message' => $messageContent,
        ]);



        

        // Send email to the user who listed the property and CC admin
        Mail::to($user->email) // Email to the client (user who listed the property)
            ->cc('hello@example.com') // Send a copy to the admin
            ->send(new MessageToClient($name, $email, $phone, $messageContent));

        return response()->json(['success' => 'Message sent successfully.']);

    } catch (\Exception $e) {
        // Log the error
        Log::error('Mail sending failed: ' . $e->getMessage());
        return response()->json(['error' => 'Failed to send message. Please try again later.']);
    }

}

public function sendContactForm(Request $request)
    {
        // Validate form data
        $request->validate([
            'username' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required|string',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        // Send the email
        Mail::to('tsirchi@example.com')->send(new ContactMail(
            $request->input('username'),
            $request->input('email'),
            $request->input('phone'),
            $request->input('subject'),
            $request->input('message')
        ));

        // Redirect with a success message
        return redirect()->back()->with('success', 'Your message has been sent successfully!');
    }


    public function sendEmail(Request $request)
{
    // Validate the input
    $request->validate([
        'emails' => 'required|string',
        'subject' => 'required|string',
        'message' => 'required|string',
    ]);

    // Extract email addresses and remove extra spaces
    $emails = array_map('trim', explode(',', $request->input('emails')));

    // Prepare email data
    $subject = $request->input('subject');
    $messageContent = $request->input('message');

    try {
        // Send the email to each recipient
        foreach ($emails as $email) {
            Mail::to($email)->send(new ComposeMail($subject, $messageContent));
        }

        return back()->with('success', 'Emails sent successfully.');
    } catch (\Exception $e) {
        return back()->with('error', 'Failed to send emails: ' . $e->getMessage());
    }
}


// public function sendContactForm(Request $request)
//     {
//         // Validate form data
//         $request->validate([
//             'username' => 'required|string|max:255',
//             'email' => 'required|email',
//             'phone' => 'required|string',
//             'subject' => 'required|string|max:255',
//             'message' => 'required|string',
//         ]);

//         // Send the email
//         Mail::to('tsirchi@example.com')->send(new ContactMail(
//             $request->input('username'),
//             $request->input('email'),
//             $request->input('phone'),
//             $request->input('subject'),
//             $request->input('message')
//         ));

//         // Redirect with a success message
//         return redirect()->back()->with('success', 'Your message has been sent successfully!');
//     }


public function adminEmail(Request $request)
    {
        $request->validate([
            'emails' => 'required|string',
            'subject' => 'required|string',
            'message' => 'required|string',
        ]);
    
        // Extract email addresses and remove extra spaces
        $emails = array_map('trim', explode(',', $request->input('emails')));
    
        // Prepare email data
        $subject = $request->input('subject');
        $messageContent = $request->input('message');
    
        try {
            // Send the email to each recipient
            foreach ($emails as $email) {
                Mail::to($email)->send(new ComposeMail($subject, $messageContent));
            }
    
            return back()->with('success', 'Emails sent successfully.');
        } catch (\Exception $e) {
            return back()->with('error', 'Failed to send emails: ' . $e->getMessage());
        }

        // Redirect with success message
        return redirect()->back()->with('success', 'Emails sent successfully!');
    }

}