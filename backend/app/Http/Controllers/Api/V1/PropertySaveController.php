<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\Property;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PropertySaveController extends Controller
{
    public function toggle($propertyId)
    {
        $property = Property::find($propertyId);
        if (!$property) {
            return response()->json(['message' => 'Property not found'], 404);
        }

        $user = Auth::user();
        $isSaved = $property->savedByUsers()->where('user_id', $user->id)->exists();

        if ($isSaved) {
            $property->savedByUsers()->detach($user->id);
            $isSaved = false;
            $message = 'Removed from favourites';
        } else {
            $property->savedByUsers()->attach($user->id);
            $isSaved = true;
            $message = 'Added to favourites';
        }

        return response()->json([
            'message' => $message,
            'is_favourite' => $isSaved,
        ]);
    }
}
