@include('layouts.adminView.admin_header')

    <h1>This is prod edit</h1>
    <form method="post" action="{{route('listing.update',['listing'=>$listing])}}">
        @csrf
        @method('put')
        <label for="">Update Listing</label>
        {{-- <input type="text" name="property_name" value="{{$listing->property_name}}">  --}}
        <input type="hidden" class="form-control" placeholder="Property Name" aria-label="" aria-describedby="basic-addon1" name="userid_agent" value='2'>
        <div class="input-group mb-3">
          <span class="input-group-text" id="basic-addon1">Listing Name</span>
          <input type="text" class="form-control" placeholder="Property Name" value="{{$listing->property_name}}" aria-describedby="basic-addon1" name="property_name">
        </div>
      <div class="input-group mb-3">
          <span class="input-group-text" id="basic-addon1">Description</span>
          <input type="text" class="form-control" placeholder="Description" aria-label="description" aria-describedby="basic-addon1" name="description" value="{{ $listing->description }}">
      </div>
      <div class="input-group mb-3">
          <span class="input-group-text" id="basic-addon1">Price</span>
          <input type="text" class="form-control" placeholder="Price" aria-label="price" aria-describedby="basic-addon1" name="price" value="{{ $listing->price }}">
      </div>
      <div class="input-group mb-3">
          <span class="input-group-text" id="basic-addon1">Lifestyle</span>
          <input type="text" class="form-control" placeholder="Lifestyle" aria-label="lifestyle" aria-describedby="basic-addon1" name="lifestyle" value="{{ $listing->lifestyle }}">
      </div>
      <div class="input-group mb-3">
          <span class="input-group-text" id="basic-addon1">Type</span>
          <input type="text" class="form-control" placeholder="Type" aria-label="type" aria-describedby="basic-addon1" name="type" value="{{ $listing->type }}">
      </div>
      <div class="input-group mb-3">
          <span class="input-group-text" id="basic-addon1">City</span>
          <input type="text" class="form-control" placeholder="City" aria-label="location_city" aria-describedby="basic-addon1" name="location_city" value="{{ $listing->location_city }}">
      </div>
      <div class="input-group mb-3">
          <span class="input-group-text" id="basic-addon1">Sub City</span>
          <input type="text" class="form-control" placeholder="Sub City" aria-label="location_subcity" aria-describedby="basic-addon1" name="location_subcity" value="{{ $listing->location_subcity }}">
      </div>
      <div class="input-group mb-3">
          <span class="input-group-text" id="basic-addon1">Property Lifestyle</span>
          <input type="text" class="form-control" placeholder="Property Lifestyle" aria-label="property_lifestyle" aria-describedby="basic-addon1" name="property_lifestyle" value="{{ $listing->property_lifestyle }}">
      </div>
      <div class="input-group mb-3">
          <span class="input-group-text" id="basic-addon1">Bedrooms</span>
          <input type="text" class="form-control" placeholder="Bedrooms" aria-label="bedrooms" aria-describedby="basic-addon1" name="bedrooms" value="{{ $listing->bedrooms }}">
      </div>
      <div class="input-group mb-3">
          <span class="input-group-text" id="basic-addon1">Bathrooms</span>
          <input type="text" class="form-control" placeholder="Bathrooms" aria-label="bathrooms" aria-describedby="basic-addon1" name="bathrooms" value="{{ $listing->bathrooms }}">
      </div>
      <div class="input-group mb-3">
          <span class="input-group-text" id="basic-addon1">Area Size</span>
          <input type="text" class="form-control" placeholder="Area Size" aria-label="areasize" aria-describedby="basic-addon1" name="areasize" value="{{ $listing->areasize }}">
      </div>
        <div class="input-group mb-3">
          <input type="submit" value="Submit" class="btn btn-success btn-icon-split"> 
        </div>   
    </form>

{{-- @include('layouts.admin_footer') --}}
@include('layouts.adminView.admin_footer')
