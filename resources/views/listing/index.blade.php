@include('layouts.adminView.admin_header')

<div class="container-fluid">

    <!-- Page Heading -->
    {{-- <h1 class="h3 mb-2 text-gray-800">Tables</h1>
    <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
        For more information about DataTables, please visit the <a target="_blank"
            href="https://datatables.net">official DataTables documentation</a>.</p> --}}

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a class="m-0 font-weight-bold text-primary" href="{{route('listing.create')}}">Add New Listing</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Property Name</th>
                            {{-- <th>Description</th> --}}
                            <th>Price</th>
                            <th>Type</th>
                            <th>Location</th>
                            <th>Property Lifestyle</th>
                            <th>Bedroom(s)</th>
                            <th>Bathroom(s)</th>
                            <th>Area Size</th>
                            <th>Manage</th>
                        </tr>
                    </thead>

                    <tbody>
                        {{-- <tr>
                            <td>Tiger Nixon</td>
                            <td>System Architect</td>
                            <td>Edinburgh</td>
                            <td>61</td>
                            <td>2011/04/25</td>
                            <td>$320,800</td>
                        </tr> --}}
                        @foreach ($listings as $listing)
                        <tr>
                            <th scope="row">{{$listing->property_name}}</th>
                            {{-- <td>{{$listing->description}}</td> --}}
                            <td>{{$listing->price}}</td>
                            <td>{{$listing->type}}</td>
                            <td>{{$listing->location_city}} {{$listing->location_subcity}}</td>
                            <td>{{$listing->property_lifestyle}}</td>
                            <td>{{$listing->bedrooms}}</td>
                            <td>{{$listing->bathrooms}}</td>
                            <td>{{$listing->areasize}}</td>
                            <td>
                                <a href="{{route('listing.edit',['listing'=>$listing])}}">Edit</a>
                                <form method="post" action="{{route('listing.destroy',['listing'=>$listing])}}">
                                    @csrf
                                    @method('delete')
                                    <input type="submit" value="Delete">
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Property Name</th>
                            <th>Location</th>
                            <th>Price</th>
                            <th>Manage</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->
{{-- --------------------------------------------- --}}


{{-- <a href="{{route('listing.create')}}">Add listing here</a>
    <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">#</th>
            <th scope="col">Handle</th>
          </tr>
        </thead>

        <tbody>
            @foreach ($listings as $listing)
                <tr>
                    <th scope="row">{{$listing->id}}</th>
                    <td>{{$listing->property_name}}</td>
                    <td>
                        <a href="{{route('listing.edit',['listing'=>$listing])}}">Edit</a>
                    </td>
                    <td>
                        <form method="post" action="{{route('listing.destroy',['listing'=>$listing])}}">
                            @csrf
                            @method('delete')
                            <input type="submit" value="Delete">
                        </form>
                    </td>
                </tr>
            @endforeach


        </tbody>
      </table>
     --}}
      {{-- @include('layouts.admin_footer') --}}
@include('layouts.adminView.admin_footer')

