@include('layouts/userView/user_header')
<style>
    div#filter form {
    display: flex;
}

</style>
<!-- products content -->
<div class="bg-main">
<div class="container">
    <div class="box">
        <div class="breadcumb">
            <a href="./index.html">home</a>
            <span><i class='bx bxs-chevrons-right'></i></span>
            <a href="./products.html">all products</a>
        </div>
    </div>
    <div class="box">
        <div class="row">
            <div class="col-3 filter-col" id="filter-col">
                <div class="box filter-toggle-box">
                    <button class="btn-flat btn-hover" id="filter-close">close</button>
                </div>
                <div class="box">
                    <span class="filter-header">
                        List Available
                    </span>
                    <ul class="filter-list">
                        <li><b></b> <span style="font-size: 12px">Under Selected Categories</span></li>
                    </ul>
                </div>
                <div class="box">
                    <span class="filter-header">
                        Price
                    </span>
                    <div class="price-range">
                        <input type="text">
                        <span>-</span>
                        <input type="text">
                    </div>
                </div>
                <div class="box">
                    <ul class="filter-list">
                        <li>
                            <div class="group-checkbox">
                                <input type="checkbox" id="status1">
                                <label for="status1">
                                    On sale
                                    <i class='bx bx-check'></i>
                                </label>
                            </div>
                        </li>
                        <li>
                            <div class="group-checkbox">
                                <input type="checkbox" id="status2">
                                <label for="status2">
                                    In stock
                                    <i class='bx bx-check'></i>
                                </label>
                            </div>
                        </li>
                        <li>
                            <div class="group-checkbox">
                                <input type="checkbox" id="status3">
                                <label for="status3">
                                    Featured
                                    <i class='bx bx-check'></i>
                                </label>
                            </div>
                        </li>
                    </ul>
                </div>
                {{-- <div class="box">
                    <span class="filter-header">
                        Colors
                    </span>
                    <ul class="filter-list">
                        <li>
                            <div class="group-checkbox">
                                <input type="checkbox" id="remember1">
                                <label for="remember1">
                                    Red
                                    <i class='bx bx-check'></i>
                                </label>
                            </div>
                        </li>
                        <li>
                            <div class="group-checkbox">
                                <input type="checkbox" id="remember2">
                                <label for="remember2">
                                    Blue
                                    <i class='bx bx-check'></i>
                                </label>
                            </div>
                        </li>
                        <li>
                            <div class="group-checkbox">
                                <input type="checkbox" id="remember3">
                                <label for="remember3">
                                    White
                                    <i class='bx bx-check'></i>
                                </label>
                            </div>
                        </li>
                        <li>
                            <div class="group-checkbox">
                                <input type="checkbox" id="remember4">
                                <label for="remember4">
                                    Pink
                                    <i class='bx bx-check'></i>
                                </label>
                            </div>
                        </li>
                        <li>
                            <div class="group-checkbox">
                                <input type="checkbox" id="remember5">
                                <label for="remember5">
                                    Yellow
                                    <i class='bx bx-check'></i>
                                </label>
                            </div>
                        </li>
                    </ul>
                </div> --}}
                <div class="box">
                    <span class="filter-header">
                        rating
                    </span>
                    <ul class="filter-list">
                        <li>
                            <div class="group-checkbox">
                                <input type="checkbox" id="remember1">
                                <label for="remember1">
                                    <span class="rating">
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                    </span>
                                    <i class='bx bx-check'></i>
                                </label>
                            </div>
                        </li>
                        <li>
                            <div class="group-checkbox">
                                <input type="checkbox" id="remember1">
                                <label for="remember1">
                                    <span class="rating">
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bx-star'></i>
                                    </span>
                                    <i class='bx bx-check'></i>
                                </label>
                            </div>
                        </li>
                        <li>
                            <div class="group-checkbox">
                                <input type="checkbox" id="remember1">
                                <label for="remember1">
                                    <span class="rating">
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bx-star'></i>
                                        <i class='bx bx-star'></i>
                                    </span>
                                    <i class='bx bx-check'></i>
                                </label>
                            </div>
                        </li>
                        <li>
                            <div class="group-checkbox">
                                <input type="checkbox" id="remember1">
                                <label for="remember1">
                                    <span class="rating">
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bx-star'></i>
                                        <i class='bx bx-star'></i>
                                        <i class='bx bx-star'></i>
                                    </span>
                                    <i class='bx bx-check'></i>
                                </label>
                            </div>
                        </li>
                        <li>
                            <div class="group-checkbox">
                                <input type="checkbox" id="remember1">
                                <label for="remember1">
                                    <span class="rating">
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bx-star'></i>
                                        <i class='bx bx-star'></i>
                                        <i class='bx bx-star'></i>
                                        <i class='bx bx-star'></i>
                                    </span>
                                    <i class='bx bx-check'></i>
                                </label>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-9 col-md-12">
                <div class="box filter-toggle-box">
                    <button class="btn-flat btn-hover" id="filter-toggle">filter</button>
                </div>
                    {{-- from search filter --}}
                    <div class="row" id="filter">
                        {{-- <form> --}}
                            <div class="form-group col-sm-3 col-xs-6">
                                <select class="filter-listLifestyle form-control">
                                    <option value="0">Select LifeStyle</option>                                            
                                    @foreach($listingProperty_lifestyle as $listLifeStyle)
                                        if({{$listLifeStyle->property_lifestyle}}==true){
                                            <option value="{{$listLifeStyle->property_lifestyle}}">{{$listLifeStyle->property_lifestyle}}</option>                                            
                                        }                                                                           
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group col-sm-3 col-xs-6">
                                <select class="filter-listBed form-control">
                                    <option value="0">Select Bed</option>
                                    @foreach($listings_bedrooms as $bed)
                                    if({{$bed->bedrooms}}==true){
                                        <option value="{{$bed->bedrooms}}">{{$bed->bedrooms}}</option>                                            
                                    }                                                                           
                                    @endforeach
                                </select>
                            </div>         
                            <div class="form-group col-sm-3 col-xs-6">
                                <select class="filter-listCity form-control">
                                    <option value="0">Select City</option>                                            
                                    @foreach($location_city as $locCity)
                                        if({{$locCity->location_city}}==true){
                                            <option value="{{$locCity->location_city}}">{{$locCity->location_city}}</option>                                            
                                        }                                                                           
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group col-sm-3 col-xs-6">
                                <select class="filter-listSCity form-control">
                                    <option value="0">Select Inner City</option>                                            
                                    @foreach($location_scity as $locSCity)
                                        if({{$locSCity->location_subcity}}==true){
                                            <option value="{{$locSCity->location_subcity    }}">{{$locSCity->location_subcity   }}</option>                                            
                                        }                                                                           
                                    @endforeach
                                </select>
                            </div> 
                            <div class="form-group col-sm-3 col-xs-6">
                                <select class="filter-listType form-control">
                                    <option value="0">Select Type</option>                                            
                                    @foreach($listing_type as $type)
                                        if({{$type->type}}==true){
                                            <option value="{{$type->type}}">{{$type->type}}</option>                                            
                                        }                                                                           
                                    @endforeach
                                </select>                                
                            </div>       
                            <div class="form-group col-sm-3 col-xs-6"> 
                                <input type="submit" class="reset-listFilter  form-control" value="Reset">
                            </div>                    
                        {{-- </form> --}}
                    </div>
            {{-- from search filter --}}