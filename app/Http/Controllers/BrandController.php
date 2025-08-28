<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;
use Stevebauman\Location\Facades\Location;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        //  // Get the user's location based on their IP address
        //  $userLocation = Location::get();

        //  // Get the ISO 2-character country code, or 'default' if location is not found
        //  $country = $userLocation ? $userLocation->countryCode : 'default';
 
        //  // Query brands where the country matches the user's country,
        //  // or where the country is 'default'.
        //  $brands = Brand::where('country', $country)
        //                  ->orWhere('country', 'default')
        //                  ->get();
 
        //  return response()->json($brands);
        // First, check for a 'country' query parameter (for local testing/overrides)
        $country = $request->query('country');

        if (!$country) {
            // If no query parameter, get the user's location via IP
            $userLocation = Location::get();
            $country = $userLocation ? $userLocation->countryCode : 'default';
        }

        // Query brands where the country matches the determined country code,
        // or where the country is 'default'.
        if ($country) {
            $brands = Brand::where('country', $country)
                        ->get();
        } else {
            $brands = Brand::where('country', 'default')
                        ->get();
        }
        

        return response()->json($brands);
}

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'brand_name' => 'required|string|max:255',
            'brand_image' => 'required|url',
            'rating' => 'required|integer|min:1|max:5',
            'country' => 'nullable|string|size:2',
        ]);

        $brand = Brand::create($request->all());
        return response()->json($brand, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        return response()->json(Brand::findOrFail($id));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Brand $brand)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $brand = Brand::findOrFail($id);
        $brand->update($request->all());
        return response()->json($brand);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Brand::destroy($id);
        return response()->json(null, 204);
    }
}
