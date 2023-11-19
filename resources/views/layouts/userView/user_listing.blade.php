@include('layouts/userView/userlisting-layout/userlisting_navs')
                        <div class="box">
                            <div class="row" id="products">
                                {{-- insert the listing --}}
                                @foreach($listings as $listing)
                                <div class="product  lifestyle-{{$listing->property_lifestyle}} bed-num-{{$listing->bedrooms}} city-{{$listing->location_city}} scity-{{$listing->location_subcity}} type-{{$listing->type}} selected-lifestyle selected-bed  selected-city selected-scity selected-type col-4 col-md-6 col-sm-12 ">
                                    <div class="product-card ">
                                        <div class="product-card-img">
                                            <img src="{{asset('assets/userview/img_house/house1.webp')}}" alt="">
                                            <img src="{{asset('assets/userview/img_house/house1.1.webp')}}" alt="">
                                        </div>
                                        <div class="product-card-info">
                                            <div class="product-btn">
                                                <a href="/for-rent/detail" class="btn-flat btn-hover btn-shop-now">Book now</a>
                                                {{-- <button class="btn-flat btn-hover btn-cart-add">
                                                    <i class='bx bxs-cart-add'></i>
                                                </button> --}}
                                                <button class="btn-flat btn-hover btn-cart-add">
                                                    <i class='bx bxs-heart'></i>
                                                </button>
                                            </div>
                                            <div class="product-card-name">
                                                {{-- ${e.name} --}}
                                                {{$listing->property_name}}                                                
                                            </div>
                                            <div class="product-card-price">
                                                {{-- <span><del>${e.old_price}</del></span> --}}
                                                <span class="curr-price">
                                                    {{-- ${e.curr_price} --}}
                                                    ${{$listing->price}}
                                                
                                                </span>
                                                <ul>
                                                    <li class="first-li"><b>LifeStyle:</b> {{$listing->property_lifestyle}} <b class="li-type">Type: </b>{{$listing->type}}</li>
                                                    <li><b>Num of Bed(s): </b>{{$listing->bedrooms}}</li>
                                                    <li><b>Location:</b> {{$listing->location_city}}, {{$listing->location_subcity}}</li>                                                                                                        
                                                    
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                {{-- end of listin --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end products content -->    

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js" ></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" ></script>
<script>    
$( document ).ready(function() {

    $("select.filter-listBed").prop("disabled", true);
    $("select.filter-listCity").prop("disabled", true);
    $("select.filter-listSCity").prop("disabled", true);
    $("select.filter-listType").prop("disabled", true);

    $("select.filter-listLifestyle").change(function() {
        // .product.selected-lifestyle.selected-bed.selected-city.selected-scity.selected-type
        var selectedValue = $(this).val();        
        var selectedCity = '.product.lifestyle-'+selectedValue;
        $('.product').removeClass("selected-lifestyle");     
        if(selectedValue==0){
            $('.product').show();              
            $(selectedCity).addClass("selected-lifestyle");
            $('.filter-listLifestyle').removeClass('selected');   
            $("select.filter-listBed").prop("disabled", true);          
        }else{
            $('.product').hide();  
            $(selectedCity).show(); 
            $(selectedCity).addClass("selected-lifestyle");  
            $('.filter-listLifestyle').addClass('selected'); 
            $("select.filter-listBed").prop("disabled", false);
        }    
    }); 
    $("select.filter-listBed").change(function() {       
        // .product.selected-lifestyle.selected-bed.selected-city.selected-scity.selected-type
        var selectedValue = $(this).val();        
        var selectedBed = '.product.selected-lifestyle.bed-num-'+selectedValue;        
        $('.product').removeClass("selected-bed");     
        if(selectedValue==0){            
            $('.product.selected-lifestyle').show();       
            $('.product').addClass("selected-bed");                    
            $('.filter-listLifestyle').removeClass('selected');   
            $("select.filter-listLifestyle").prop("disabled", false);            
            $("select.filter-listBed").prop("disabled", false);
            $("select.filter-listCity").prop("disabled", true);
            // $("select.filter-listSCity").prop("disabled", true);
            // $("select.filter-listType").prop("disabled", true);            
        }else{
            $('.product').hide();                   
            $(selectedBed).show(); 
            $(selectedBed).addClass("selected-bed"); 
            $('.filter-listLifestyle').addClass('selected'); 
            $("select.filter-listLifestyle").prop("disabled", true);            
            $("select.filter-listBed").prop("disabled", false);
            $("select.filter-listCity").prop("disabled", false);
            $("select.filter-listSCity").prop("disabled", true);
            $("select.filter-listType").prop("disabled", true);
        }    
    }); 
    $("select.filter-listCity").change(function() {        
        // .product.selected-lifestyle.selected-bed.selected-city.selected-scity.selected-type
        // .product.lifestyle-Refugee.bed-num-3.city-Toronto.scity-Yorkdale.type-House
        var selectedValue = $(this).val();        
        var selectedCity = '.product.selected-lifestyle.selected-bed.city-'+selectedValue;        
        $('.product').removeClass("selected-city");     
        if(selectedValue==0){            
            $('.product.selected-lifestyle.selected-bed').show();       
            $('.product').addClass("selected-city");                    
            $('.filter-listCity').removeClass('selected');   
            $("select.filter-listCity").prop("disabled", true);            
            $("select.filter-listBed").prop("disabled", false);
            $("select.filter-listCity").prop("disabled", false);
            $("select.filter-listSCity").prop("disabled", true);
            $("select.filter-listType").prop("disabled", true);            
        }else{
            $('.product').hide();                   
            $(selectedCity).show(); 
            $(selectedCity).addClass("selected-city"); 
            $('.filter-listCity').addClass('selected'); 
            $("select.filter-listLifestyle").prop("disabled", true);            
            $("select.filter-listBed").prop("disabled", true);
            $("select.filter-listCity").prop("disabled", false);
            $("select.filter-listSCity").prop("disabled", false);
            $("select.filter-listType").prop("disabled", true);
        } 
    });   
    $("select.filter-listSCity").change(function() {        
        // .product.selected-lifestyle.selected-bed.selected-city.selected-scity.selected-type
        // .product.lifestyle-Refugee.bed-num-3.city-Toronto.scity-Yorkdale.type-House
        var selectedValue = $(this).val();        
        var selectedCity = '.product.selected-lifestyle.selected-bed.selected-city.scity-'+selectedValue;        
        $('.product').removeClass("selected-scity");     
        if(selectedValue==0){            
            $('.product.selected-lifestyle.selected-bed.selected-city').show();       
            $('.product').addClass("selected-scity");                    
            $('.filter-listSCity').removeClass('selected');   
            $("select.filter-listCity").prop("disabled", true);            
            $("select.filter-listBed").prop("disabled", true);
            $("select.filter-listCity").prop("disabled", false);
            $("select.filter-listSCity").prop("disabled", false);
            $("select.filter-listType").prop("disabled", true);            
        }else{
            $('.product').hide();                   
            $(selectedCity).show(); 
            $(selectedCity).addClass("selected-scity"); 
            $('.filter-listSCity').addClass('selected'); 
            $("select.filter-listLifestyle").prop("disabled", true);            
            $("select.filter-listBed").prop("disabled", true);
            $("select.filter-listCity").prop("disabled", true);
            $("select.filter-listSCity").prop("disabled", false);
            $("select.filter-listType").prop("disabled", false);
        } 
    });
    $("select.filter-listType").change(function() {        
        // .product.selected-lifestyle.selected-bed.selected-city.selected-scity.selected-type
        // .product.lifestyle-Refugee.bed-num-3.city-Toronto.scity-Yorkdale.type-House
        var selectedValue = $(this).val();        
        var selectedCity = '.product.selected-lifestyle.selected-bed.selected-city.selected-scity.type-'+selectedValue;        
        $('.product').removeClass("selected-type");     
        if(selectedValue==0){            
            $('.product.selected-lifestyle.selected-bed.selected-city.selected-scity').show();       
            $('.product').addClass("selected-type");                    
            $('.filter-listType').removeClass('selected');   
            $("select.filter-listCity").prop("disabled", true);            
            $("select.filter-listBed").prop("disabled", true);
            $("select.filter-listCity").prop("disabled", true);
            $("select.filter-listSCity").prop("disabled", false);
            $("select.filter-listType").prop("disabled", true);            
        }else{
            $('.product').hide();                   
            $(selectedCity).show(); 
            $(selectedCity).addClass("selected-type"); 
            
            $('.filter-listType').addClass('selected'); 
            $("select.filter-listLifestyle").prop("disabled", true);            
            $("select.filter-listBed").prop("disabled", true);
            $("select.filter-listCity").prop("disabled", true);
            $("select.filter-listSCity").prop("disabled", true);
            $("select.filter-listType").prop("disabled", false);
        } 
    });
    $(".reset-listFilter").click(function() {
        $('.product').show(); 
        $('select.filter-listLifestyle').val('0');
        $('select.filter-listBed').val('0');
        $('select.filter-listCity').val('0');
        $('select.filter-listSCity').val('0');
        $('select.filter-listType').val('0');
        $("select.filter-listLifestyle").prop("disabled", false);
        $("select.filter-listBed").prop("disabled", true);
        $("select.filter-listCity").prop("disabled", true);
        $("select.filter-listSCity").prop("disabled", true);
        $("select.filter-listType").prop("disabled", true);
    });

    
    setInterval( function myFunction() {
        // console.log("This function runs every 1seconds.");
        var listCount = $('.product:visible').length;
        $("ul.filter-list li b").html(listCount);
    }, 1000);
});
</script>
@include('layouts/userView/user_footer')