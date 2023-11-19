<?php

namespace App\Http\Controllers;
use App\Models\listing;

use Illuminate\Http\Request;

class userListing_Controller extends Controller
{
    //
    public function index(){
        // $listings = listing::all();
        $listings = listing::all();
        $listingProperty_lifestyle = listing::groupBy('property_lifestyle')->get('property_lifestyle');
        $listings_bedrooms = listing::groupBy('bedrooms')->get('bedrooms');
        $location_city = listing::groupBy('location_city')->get('location_city');
        $location_scity = listing::groupBy('location_subcity')->get('location_subcity');
        $listing_type = listing::groupBy('type')->get('type');            

        // dd($listings_bedrooms);
        return view('layouts.userView.user_listing',[
            'listings'=>$listings, 
            'listingProperty_lifestyle'=>$listingProperty_lifestyle,
            'listings_bedrooms'=>$listings_bedrooms,
            'location_city'=>$location_city,
            'location_scity'=>$location_scity,
            'listing_type'=>$listing_type
        ]);
    }

    public function indexDetailed(){
        // $listings = listing::all();
        $listings = listing::all();
        // dd($listings_bedrooms);
        return view('layouts.userView.user_list_detailed',['listings'=>$listings]);
    }

}
