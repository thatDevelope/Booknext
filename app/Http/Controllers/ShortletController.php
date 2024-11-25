<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\MultiImage;
use Intervention\Image\Laravel\Facades\Image;
use Haruncpi\LaravelIdGenerator\IdGenerator;
use Carbon\Carbon;
use App\Models\Amenities;
use App\Models\Shortlet;

class ShortletController extends Controller
{
    //
    public function Shortlet(Request $request){
        // error_reporting(E_ALL);
        // ini_set('display_errors', 1);

       
       
        $request->validate([
            'ptype_id' => 'nullable|string',
            'amenities_id' => 'nullable|string',
            'property_name' => 'nullable|string|max:255',
            'property_slug' => 'nullable|string',
            'property_code' => 'nullable|string',
            'property_status' => 'nullable|string',
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
            'property_thambnail' => 'nullable',
          'property_thambnail' => 'image|mimes:jpeg,png,jpg,gif|max:2048',

        ]);

        // $amen = $request->amenities_id;
        // $amenites = implode(",", $amen);  $amenites = $amen;
        
        // // dd($amenites);

        // $pcode = IdGenerator::generate(['table' => 'venues','field' => 'property_code','length' => 5, 'prefix' => 'PC' ]);


       
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

        // $image = $request->file('property_thambnail');
        // $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        // Image::read($image)->resize(370,250)->save('upload/thumbnails/'.$name_gen);
        // $save_url = 'upload/thumbnails/'.$name_gen;

        
        $shortlet = Shortlet::create([
            'user_id' => Auth::id(), // Assuming the user is logged in
            // 'ptype_id' => $request->ptype_id,
            'amenities_id' => $request->amenities_id,
            'property_name' => $request->property_name,
            'property_slug' => $request->property_slug,
            'property_code' => $request->property_code,
            'property_status' => $request->property_status,
            'lowest_price' => $request->lowest_price,
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

        if ($request->hasFile('property_thambnail')) {
            $file = $request->file('property_thambnail');
            $filename = time() . '_' . $file->getClientOriginalName();
            $filePath = 'upload/thumbnails/' . $filename;
            $file->move(public_path('upload/thumbnails'), $filename);
    
            // Update the property record with the thumbnail path
            $shortlet->update([
                'property_thambnail' => $filePath,


            ]);
        }
        // dd($venue);
        // $images = $request->file('photos');
        // // dd($request->file('photos')); 
        // foreach($images as $img){
        

        // $make_name = hexdec(uniqid()).'.'.$img->getClientOriginalExtension();
        // Image::read($img)->resize(770,520)->save('upload/property/shortlet'.$make_name);
        // $uploadPath = 'upload/property/shortlet'.$make_name;

        
        // MultiImage::insert([
        //     'property_id' => $shortlet,  // This should be the ID of the venue or property, not a timestamp
        //     'photo_name' => $uploadPath,  
        //     'property_type' => 'shortlet',// The path of the uploaded photo
        //     'created_at' => Carbon::now(),  // Timestamp for creation
        //     'updated_at' => Carbon::now(),  // Timestamp for last update
        // ]); 
        

        // }

        
        // if ($request->hasFile('property_thambnail')) {
        //     $file = $request->file('property_thambnail');
        //     $filename = time() . '_' . $file->getClientOriginalName();
        //     $filePath = 'upload/thumbnails/' . $filename;
        //     $file->move(public_path('upload/thumbnails'), $filename);
    
        //     // Update the property record with the thumbnail path
        //     $shortlet->update([
        //         'property_thambnail' => $filePath,
        //     ]);
        // }

        


        return redirect()->route('client.shortlets')->with('success', 'Property added successfully!');

    } 

}
