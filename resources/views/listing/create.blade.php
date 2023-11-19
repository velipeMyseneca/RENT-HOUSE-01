@include('layouts.adminView.admin_header')

<h1>Create Listing</h1>
<form method="post" action="{{route('listing.store')}}">
  @csrf
  @method('post')
  <div class="input-group mb-3">
    <input type="hidden" class="form-control" placeholder="Property Name" aria-label="" aria-describedby="basic-addon1" name="userid_agent" value='2'>
    
    <span class="input-group-text" id="basic-addon1">Property Name</span>
    <input type="text" class="form-control" placeholder="Property Name" aria-label="property_name" aria-describedby="basic-addon1" name="property_name" value="p">
  </div>
  <div class="input-group mb-3">
    <span class="input-group-text" id="basic-addon1">Description</span>
    <input type="text" class="form-control" placeholder="Description" aria-label="description" aria-describedby="basic-addon1" name="description" value="p">
  </div>
  <div class="input-group mb-3">
    <span class="input-group-text" id="basic-addon1">Price</span>
    <input type="text" class="form-control" placeholder="Price" aria-label="price" aria-describedby="basic-addon1" name="price" value="p">
  </div>
  <div class="input-group mb-3">
    <span class="input-group-text" id="basic-addon1">Lifestyle</span>
    <input type="text" class="form-control" placeholder="Lifestyle" aria-label="lifestyle" aria-describedby="basic-addon1" name="lifestyle" value="p">
  </div>
  
  <div class="input-group mb-3">
    <span class="input-group-text" id="basic-addon1">Type</span>
    <input type="text" class="form-control" placeholder="Type" aria-label="type" aria-describedby="basic-addon1" name="type" value="p">
  </div>
  <div class="input-group mb-3">
    <span class="input-group-text" id="basic-addon1">City</span>
    <input type="text" class="form-control" placeholder="City" aria-label="location_city" aria-describedby="basic-addon1" name="location_city" value="p">
  </div>
  <div class="input-group mb-3">
    <span class="input-group-text" id="basic-addon1">Sub City</span>
    <input type="text" class="form-control" placeholder="City" aria-label="location_subcity" aria-describedby="basic-addon1" name="location_subcity" value="p">
  </div>
  <div class="input-group mb-3">
    <span class="input-group-text" id="basic-addon1">property_lifestyle</span>
    <input type="text" class="form-control" placeholder="property_lifestyle" aria-label="property_lifestyle" aria-describedby="basic-addon1" name="property_lifestyle" value="p">
  </div>
  <div class="input-group mb-3">
    <span class="input-group-text" id="basic-addon1">bedrooms</span>
    <input type="text" class="form-control" placeholder="bedrooms" aria-label="bedrooms" aria-describedby="basic-addon1" name="bedrooms" value="p">
  </div>
  <div class="input-group mb-3">
    <span class="input-group-text" id="basic-addon1">bathrooms</span>
    <input type="text" class="form-control" placeholder="bathrooms" aria-label="bathrooms" aria-describedby="basic-addon1" name="bathrooms" value="p">
  </div>
  <div class="input-group mb-3">
    <span class="input-group-text" id="basic-addon1">areasize</span>
    <input type="text" class="form-control" placeholder="areasize" aria-label="areasize" aria-describedby="basic-addon1" name="areasize" value="p">
  </div>
  <div class="input-group mb-3">
    <input type="submit" value="Submit" class="btn btn-success btn-icon-split"> 
  </div>          
</form>

{{-- @include('layouts.admin_footer') --}}
@include('layouts.adminView.admin_footer')
    