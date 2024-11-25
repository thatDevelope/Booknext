<?php

namespace App\Http\Controllers;

use App\Models\Ratings;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class RatingController extends Controller
{
    public function submitRating(Request $request)
{
    $request->validate([
        'rating' => 'nullable|integer|between:1,5',
        'user_id' => 'nullable|exists:users,id'
    ]);

    try {
        // Save the rating to the database
        Ratings::create([
            'user_id' => $request->user_id,
            'rating' => $request->rating
        ]);
        $averageRating = Ratings::where('user_id', $request->user_id)->avg('rating');
        $averageRating = round($averageRating, 1);
        if (!$averageRating) {
            $averageRating = 0;
        }

        $totalReviews = Ratings::where('user_id', $request->user_id)->count();

        return response()->json([
            'success' => true,
            'averageRating' => $averageRating,
            'totalReviews' => $totalReviews
        ]);
        
    } catch (\Exception $e) {
        return response()->json(['success' => false, 'message' => $e->getMessage()]);
    }
}

public function getAverageRating($userId)
{
    $averageRating = Ratings::where('user_id', $userId)->avg('rating');
    return response()->json(['averageRating' => round($averageRating, 1)]);
}

}