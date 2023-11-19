<?php

namespace App\Http\Controllers;
use App\Models\listing;
use Illuminate\Http\Request;

class listing_Controller extends Controller
{
    //
    public function index(){
        $listings = listing::all();
        return view('listing.index',['listings'=>$listings]);
    }

    public function create(){
        // dd(22);
        //  var_dump(11);
         
        return view('listing.create');
    }

    public function store(Request $request){
        // return view('listing.create');
        // dd($request);
        $data = $request->validate([
            'userid_agent'=>'required',
            'property_name'=>'required',
            'description'=>'required',
            'price'=>'required',
            'lifestyle'=>'required',
            'type'=>'required',
            'location_city'=>'required',
            'location_subcity'=>'required',
            'property_lifestyle'=>'required',
            'bedrooms'=>'required',
            'bathrooms'=>'required',
            'areasize'=>'required',
        ]);
        // dd($data);
        // print_r($data);
        $newListing = listing::create($data);
        return redirect(route('listing.index',$newListing));
        // $listing = Listing::create($request->validated());
        // return redirect()->route('listings.index', $listing);
    }

    public function edit(listing $listing){
        return view('listing.edit',['listing'=>$listing]);
    }

    public function update(listing $listing,Request $request){
        $data = $request->validate([
            'userid_agent'=>'required',
            'property_name'=>'required',
            'description'=>'required',
            'price'=>'required',
            'lifestyle'=>'required',
            'type'=>'required',
            'location_city'=>'required',
            'location_subcity'=>'required',
            'property_lifestyle'=>'required',
            'bedrooms'=>'required',
            'bathrooms'=>'required',
            'areasize'=>'required',
        ]);
        // dd($data);
        // die();
        $listing->update($data);
        return redirect(route('listing.index'));
    }

    public function destroy(listing $listing){
        $listing->delete();
        return redirect(route('listing.index'));
    }
}