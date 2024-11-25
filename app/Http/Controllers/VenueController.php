<?php


namespace App\Http\Controllers;

use App\Models\Venue;
use App\Models\Amenities;
use App\Models\Image as ModelsImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\MultiImage;
use Intervention\Image\Laravel\Facades\Image;
use Haruncpi\LaravelIdGenerator\IdGenerator;
use Carbon\Carbon;

class VenueController extends Controller
{
    public function Venue(Request $request){
        // error_reporting(E_ALL);
        // ini_set('display_errors', 1);

       
       
        $request->validate([
            'ptype_id' => 'nullable|string',
            'amenities_id' => 'nullable|array',
            'property_name' => 'nullable|string|max:255',
            'property_slug' => 'nullable|string',
            'property_code' => 'nullable|string',
            'property_status' => 'nullable|string',
            'facility_name'=>'nullable|array',
            'lowest_price' => 'nullable|string',
            'max_price' => 'nullable|string',
            'property_thambnail' => 'nullable|string',
            'short_descp' => 'nullable|string',
            'long_descp' => 'nullable|string',
            'bedrooms' => 'nullable|string',
            'bathrooms' => 'nullable|string',
            'garage' => 'nullable|string',
            'garage_size' => 'nullable|string',
            'property_size' => 'nullable|string',
            'property_video' => 'nullable|string',
            'address' => 'nullable|string',
            'city' => 'nullable|string',
            'state' => 'nullable|string',
            'postal_code' => 'nullable|string',
            'neighborhood' => 'nullable|string',
            'latitude' => 'nullable|string',
            'longitude' => 'nullable|string',
            'featured' => 'nullable|string',
            'hot' => 'nullable|string',
            'agent_id' => 'nullable|integer',
            'name' => 'nullable|string',
            'location' => 'nullable|string',
            'amount' => 'nullable|string',
            'client_name' => 'nullable|string',
            'client_phone_number' => 'nullable|string',
            'photos' => 'nullable',
            'photos.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Validate each photo
            // 'property_thambnail' => 'nullable',
            'property_thambnail' => 'image|mimes:jpeg,png,jpg,gif|max:2048',

        ]);

        $amenities = implode(',', $request->amenities_id);

        $facility =  implode(',', $request->facility_name);


        // $image = $request->file('property_thambnail');
        // $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        // Image::read($image)->resize(370,250)->save('upload/property/thumbnail/'.$name_gen);
        // $save_url = 'upload/property/thumbnail/'.$name_gen;


        $imagePaths = [];

    if ($request->hasFile('photos')) {
        $images = $request->file('photos');
        
        foreach ($images as $img) {
            $make_name = hexdec(uniqid()) . '.' . $img->getClientOriginalExtension();
            $img->move(public_path('upload/property/multi-image/'), $make_name);
            $uploadPath = 'upload/property/multi-image/' . $make_name;
            $imagePaths[] = $uploadPath; // Add each image path to the array
        }
    }

     
    $status = ($request->featured == '1' || $request->hot == '1') ? 0 : 1;

        $venue = Venue::create([
            'user_id' => Auth::id(), // Assuming the user is logged in
            // 'ptype_id' => $request->ptype_id,
            'amenities_id' => $amenities,
            'property_name' => $request->property_name,
            'property_slug' => $request->property_slug,
            'property_code' => $request->property_slug,
            'property_status' => $request->property_status,
            'lowest_price' => $request->lowest_price,
            'facility_name'=>$facility,
            'max_price' => $request->max_price,
            'property_thambnail' => $request->property_thambnail,
            'short_descp' => $request->short_descp,
            'long_descp' => $request->long_descp,
            'bedrooms' => $request->bedrooms,
            'bathrooms' => $request->bathrooms,
            'garage' => $request->garage,
            'garage_size' => $request->garage_size,
            'property_size' => $request->property_size,
            'property_video' => $request->property_video,
            'address' => $request->address,
            'city' => $request->city,
            'state' => $request->state,
            'postal_code' => $request->postal_code,
            'neighborhood' => $request->neighborhood,
            'latitude' => $request->latitude,
            'longitude' => $request->longitude,
            'featured' => $request->featured,
            'hot' => $request->hot,
            'agent_id' => $request->agent_id,
            'name' => $request->name,
            'location' => $request->location,
            'amount' => $request->amount,
            'status' =>  $status ,
            'photos' => json_encode( $imagePaths), 
            'client_name' => Auth::user()->name, // Automatically store the client name
            'client_phone_number' => Auth::user()->phonenumber,// Automatically store the phonenumber
            // 'property_thambnail' => $save_url,
            'created_at' => Carbon::now(),
            
        ]);


        // $images = $request->file('photos');
        // foreach($images as $img){

        // $make_name = hexdec(uniqid()).'.'.$img->getClientOriginalExtension();
        // Image::read($img)->resize(770,520)->save('upload/property/multi-image/'.$make_name);
        // $uploadPath = 'upload/property/multi-image/'.$make_name;

        //         // Save each image in the 'images' table
        //         Image::create([
        //             'venue_id' => $venue->id, // Link to the venue
        //             'image_path' => $filePath, // Store the file path
        //         ]);
        //     }
        // }
        // dd($venue);
        // $imagePaths = [];

    // Check if the request contains files
    // if ($request->hasFile('photos')) {
    //     foreach ($request->file('photos') as $file) {
    //         // Generate a unique name for each image
    //         $filename = time() . '_' . $file->getClientOriginalName();
    //         $filePath = 'upload/property/multi-image/' . $filename;

    //         // Move the image to the desired directory
    //         $file->move(public_path('upload/property/multi-image/'), $filename);

    //         // Add the file path to the array
    //         $imagePaths[] = $filePath;
    //     }
    // }

    // // Convert the image paths array to JSON format
    // $photosJson = json_encode($imagePaths);

    // // Insert or update the venue with the photos column
    // Venue::create([
    //     'property_name' => $request->property_name,
    //     'photos' => $photosJson, // Store the JSON of images
    // ]);
    


        if ($request->hasFile('property_thambnail')) {
            $file = $request->file('property_thambnail');
            $filename = time() . '_' . $file->getClientOriginalName();
            $filePath = 'upload/thumbnails/' . $filename;
            $file->move(public_path('upload/thumbnails'), $filename);
    
            // Update the property record with the thumbnail path
            $venue->update([
                'property_thambnail' => $filePath,


            ]);
        }

        


        return redirect()->route('client.venues')->with('success', 'Property added successfully!');

    } 
}
