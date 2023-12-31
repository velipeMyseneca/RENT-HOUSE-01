@include('layouts/userView/user_header')
    <!-- hero section 1 -->
    <div class="homepage-banner">
        <div class="banner-overlay"></div>
            <video autoplay muted loop>
            <source src="{{asset('assets/userview/img_house/homebanner.mp4')}}" type="video/mp4" />
           </video>
           <div class="banner-content">
            <div>
                <h1>Home is <br>where the heart is</h1>
                <button class="btn-flat btn-hover btn-shop-now">Book Now</button>
            </div>
            
        </div>
        {{-- <div class="slider">
            <div class="container">
                <!-- slide item  top to down animation-->
                <div class="slide active">
                    <div class="info">
                        <div class="info-content">
                            <h3 class="top-down">
                                JBL TUNE 750TNC
                            </h3>
                            <h2 class="top-down trans-delay-0-2">
                                Next-gen design
                            </h2>
                            <p class="top-down trans-delay-0-4">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati dolor commodi dignissimos culpa, eaque eos necessitatibus possimus veniam, cupiditate rerum deleniti? Libero, ducimus error? Beatae velit dolore sint explicabo! Fugit.
                            </p>
                            <div class="top-down trans-delay-0-6">
                                <button class="btn-flat btn-hover">
                                    <span>shop now</span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="img top-down">
                        <img src="{{asset('assets/userview/images/JBL_E55BT_KEY_RED_6063_FS_x1-1605x1605px.webp')}}" alt="">
                    </div>
                </div>
                <!-- end slide item -->
                <!-- slide item right to left-->
                <div class="slide">
                    <div class="info">
                        <div class="info-content">
                            <h3 class="top-down">
                                JBL Quantum ONE
                            </h3>
                            <h2 class="top-down trans-delay-0-2">
                                Ipsum dolor
                            </h2>
                            <p class="top-down trans-delay-0-4">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. A optio, voluptatum aperiam nobis quis maxime corporis porro alias soluta sunt quae consectetur aliquid blanditiis perspiciatis labore cumque, ullam, quam eligendi!
                            </p>
                            <div class="top-down trans-delay-0-6">
                                <button class="btn-flat btn-hover">
                                    <span>shop now</span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="img right-left">
                        <img src="{{asset('assets/userview/images/JBL_E55BT_KEY_BLACK_6175_FS_x1-1605x1605px.png')}}" alt="">
                    </div>
                </div>
                <!-- end slide item -->
                <!-- slide item -->
                <div class="slide">
                    <div class="info">
                        <div class="info-content">
                            <h3 class="top-down">
                                JBL JR 310BT
                            </h3>
                            <h2 class="top-down trans-delay-0-2">
                                Consectetur Elit
                            </h2>
                            <p class="top-down trans-delay-0-4">
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Explicabo aut fugiat, libero magnam nemo inventore in tempora beatae officiis temporibus odit deserunt molestiae amet quam, asperiores, iure recusandae nulla labore!
                            </p>
                            <div class="top-down trans-delay-0-6">
                                <button class="btn-flat btn-hover">
                                    <span>shop now</span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="img left-right">
                        <img src="{{asset('assets/userview/images/JBL_JR 310BT_Product Image_Hero_Skyblue.png')}}" alt="">
                    </div>
                </div>
                <!-- end slide item -->
            </div>
            <!-- slider controller -->
            <button class="slide-controll slide-next">
                <i class='bx bxs-chevron-right'></i>
            </button>
            <button class="slide-controll slide-prev">
                <i class='bx bxs-chevron-left'></i>
            </button>
            <!-- end slider controller -->
        </div> --}}
    </div>
    <!-- end hero section -->

    <!-- promotion section -->
    {{-- <div class="promotion">
        <div class="row">
            <div class="col-4 col-md-12 col-sm-12">
                <div class="promotion-box">
                    <div class="text">
                        <h3>Headphone & Earbuds</h3>
                        <button class="btn-flat btn-hover"><span>shop collection</span></button>
                    </div>
                    <img src="{{asset('assets/userview/images/JBLHorizon_001_dvHAMaster.png')}}" alt="">
                </div>
            </div>
            <div class="col-4 col-md-12 col-sm-12">
                <div class="promotion-box">
                    <div class="text">
                        <h3>JBL Quantum Series</h3>
                        <button class="btn-flat btn-hover"><span>shop collection</span></button>
                    </div>
                    <img src="{{asset('assets/userview/images/kisspng-beats-electronics-headphones-apple-beats-studio-red-headphones.png')}}" alt="">
                </div>
            </div>
            <div class="col-4 col-md-12 col-sm-12">
                <div class="promotion-box">
                    <div class="text">
                        <h3>True Wireless Earbuds</h3>
                        <button class="btn-flat btn-hover"><span>shop collection</span></button>
                    </div>
                    <img src="{{asset('assets/userview/images/JBL_TUNE220TWS_ProductImage_Pink_ChargingCaseOpen.png')}}" alt="">
                </div>
            </div>
        </div>
    </div> --}}
    <!-- end promotion section -->

    <!-- product list -->
    <div class="section">
        <div class="container">
            <div class="section-header">
                <h2>Listing</h2>
            </div>

            <div class="row" id="latest-products">
            {{-- ---------------Start listing--------------- --}}

                <div class="col-3 col-md-6 col-sm-12">
                    <div class="product-card">
                        <div class="product-card-img">
                            <img src="{{asset('assets/userview/img_house/house1.webp')}}" >
                            <img src="{{asset('assets/userview/img_house/house1.1.webp')}}" height="200">
                        </div>
                        <div class="product-card-info">
                            <div class="product-btn">
                                <button class="btn-flat btn-hover btn-shop-now">Book Now</button>
                                {{-- <button class="btn-flat btn-hover btn-cart-add"> --}}
                                    {{-- <i class='bx bxs-cart-add'></i> --}}
                                </button>
                                <button class="btn-flat btn-hover btn-cart-add">
                                    <i class='bx bxs-heart'></i>
                                </button>
                            </div>
                            <div class="product-card-name">
                                167 Church St, Toronto, ON M5B 1Y6
                            </div>
                            <div class="product-card-price">
                                <span class="curr-price">Monthly Rent $1200</span>
                                <span><del>$1500</del></span>
                            </div>
                            <div class="product-card-Lifestyle">
                                <span class="curr-price">Lifestle: Student,Refugee</span>                        
                            </div>
                            <div class="product-card-Lifestyle see-more-btn">
                                <a href="">See More Details</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-3 col-md-6 col-sm-12">
                    <div class="product-card">
                        <div class="product-card-img">
                            <img src="{{asset('assets/userview/img_house/house1.webp')}}" >
                            <img src="{{asset('assets/userview/img_house/house1.1.webp')}}" height="200">
                        </div>
                        <div class="product-card-info">
                            <div class="product-btn">
                                <button class="btn-flat btn-hover btn-shop-now">Book Now</button>
                                {{-- <button class="btn-flat btn-hover btn-cart-add"> --}}
                                    {{-- <i class='bx bxs-cart-add'></i> --}}
                                </button>
                                <button class="btn-flat btn-hover btn-cart-add">
                                    <i class='bx bxs-heart'></i>
                                </button>
                            </div>
                            <div class="product-card-name">
                                167 Church St, Toronto, ON M5B 1Y6
                            </div>
                            <div class="product-card-price">
                                <span class="curr-price">Monthly Rent $1200</span>
                                <span><del>$1500</del></span>
                            </div>
                            <div class="product-card-Lifestyle">
                                <span class="curr-price">Lifestle: Student,Refugee</span>                        
                            </div>
                            <div class="product-card-Lifestyle see-more-btn">
                                <a href="">See More Details</a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-3 col-md-6 col-sm-12">
                    <div class="product-card">
                        <div class="product-card-img">
                            <img src="{{asset('assets/userview/img_house/house1.webp')}}" >
                            <img src="{{asset('assets/userview/img_house/house1.1.webp')}}" height="200">
                        </div>
                        <div class="product-card-info">
                            <div class="product-btn">
                                <button class="btn-flat btn-hover btn-shop-now">Book Now</button>
                                {{-- <button class="btn-flat btn-hover btn-cart-add"> --}}
                                    {{-- <i class='bx bxs-cart-add'></i> --}}
                                </button>
                                <button class="btn-flat btn-hover btn-cart-add">
                                    <i class='bx bxs-heart'></i>
                                </button>
                            </div>
                            <div class="product-card-name">
                                167 Church St, Toronto, ON M5B 1Y6
                            </div>
                            <div class="product-card-price">
                                <span class="curr-price">Monthly Rent $1200</span>
                                <span><del>$1500</del></span>
                            </div>
                            <div class="product-card-Lifestyle">
                                <span class="curr-price">Lifestle: Student,Refugee</span>                        
                            </div>
                            <div class="product-card-Lifestyle see-more-btn">
                                <a href="">See More Details</a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-3 col-md-6 col-sm-12">
                    <div class="product-card">
                        <div class="product-card-img">
                            <img src="{{asset('assets/userview/img_house/house1.webp')}}" >
                            <img src="{{asset('assets/userview/img_house/house1.1.webp')}}" height="200">
                        </div>
                        <div class="product-card-info">
                            <div class="product-btn">
                                <button class="btn-flat btn-hover btn-shop-now">Book Now</button>
                                {{-- <button class="btn-flat btn-hover btn-cart-add"> --}}
                                    {{-- <i class='bx bxs-cart-add'></i> --}}
                                </button>
                                <button class="btn-flat btn-hover btn-cart-add">
                                    <i class='bx bxs-heart'></i>
                                </button>
                            </div>
                            <div class="product-card-name">
                                167 Church St, Toronto, ON M5B 1Y6
                            </div>
                            <div class="product-card-price">
                                <span class="curr-price">Monthly Rent $1200</span>
                                <span><del>$1500</del></span>
                            </div>
                            <div class="product-card-Lifestyle">
                                <span class="curr-price">Lifestle: Student,Refugee</span>                        
                            </div>
                            <div class="product-card-Lifestyle see-more-btn">
                                <a href="">See More Details</a>
                            </div>
                        </div>
                    </div>
                </div>
                
                
            {{-- ---------------end of listing--------------- --}}
            </div>

            




            <div class="section-footer">
                <a href="./products.html" class="btn-flat btn-hover">view all</a>
            </div>
        </div>
    </div>
    <!-- end product list -->

    <!-- special product -->
    <div class="bg-second">
        <div class="section container">
            <div class="row">
                <div class="col-4 col-md-4">
                    <div class="sp-item-img">
                        
                        <img src="{{asset('assets/userview/img_house/footer-house.png')}}" alt="">
                    </div>
                </div>
                <div class="col-7 col-md-8">
                    <div class="sp-item-info">
                        <div class="sp-item-name">Home is where the heart is</div>
                        <p class="sp-item-description">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore dignissimos itaque et eaque quod harum vero autem? Reprehenderit enim non voluptate! Qui provident modi est non eius ratione, debitis iure.
                        </p>
                        <button class="btn-flat btn-hover">shop now</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end special product -->

    <!-- product list -->
    {{-- <div class="section">
        <div class="container">
            <div class="section-header">
                <h2>best selling</h2>
            </div>
            <div class="row" id="best-products">
                <div class="col-3 col-md-6 col-sm-12">
                    <div class="product-card">
                        <div class="product-card-img">
                            <img src="{{asset('assets/userview/images/JBL_Quantum_400_Product Image_Hero 02.png')}}" alt="">
                            <img src="{{asset('assets/userview/images/JBL_Quantum_400_Product Image_Hero Mic Up.webp')}}" alt="">
                        </div>
                        <div class="product-card-info">
                            <div class="product-btn">
                                <button class="btn-flat btn-hover btn-shop-now">shop now</button>
                                <button class="btn-flat btn-hover btn-cart-add">
                                    <i class='bx bxs-cart-add'></i>
                                </button>
                                <button class="btn-flat btn-hover btn-cart-add">
                                    <i class='bx bxs-heart'></i>
                                </button>
                            </div>
                            <div class="product-card-name">
                                JBL Quantum 400
                            </div>
                            <div class="product-card-price">
                                <span><del>$300</del></span>
                                <span class="curr-price">$200</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section-footer">
                <a href="./products.html" class="btn-flat btn-hover">view all</a>
            </div>
        </div>
    </div> --}}
    <!-- end product list -->

    <!-- blogs -->
    {{-- <div class="section">
        <div class="container">
            <div class="section-header">
                <h2>latest blog</h2>
            </div>
            <div class="blog">
                <div class="blog-img">
                    <img src="{{asset('assets/userview/images/JBL_Quantum400_Lifestyle1.png')}}" alt="">
                </div>
                <div class="blog-info">
                    <div class="blog-title">
                        Lorem ipsum dolor sit amet
                    </div>
                    <div class="blog-preview">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quasi, eligendi dolore. Sapiente omnis numquam mollitia asperiores animi, veritatis sint illo magnam, voluptatum labore, quam ducimus! Nisi doloremque praesentium laudantium repellat.
                    </div>
                    <button class="btn-flat btn-hover">read more</button>
                </div>
            </div>
            <div class="blog row-revere">
                <div class="blog-img">
                    <img src="{{asset('assets/userview/images/JBL_TUNE220TWS_Lifestyle_black.png')}}" alt="">
                </div>
                <div class="blog-info">
                    <div class="blog-title">
                        Lorem ipsum dolor sit amet
                    </div>
                    <div class="blog-preview">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quasi, eligendi dolore. Sapiente omnis numquam mollitia asperiores animi, veritatis sint illo magnam, voluptatum labore, quam ducimus! Nisi doloremque praesentium laudantium repellat.
                    </div>
                    <button class="btn-flat btn-hover">read more</button>
                </div>
            </div>
            <div class="section-footer">
                <a href="#" class="btn-flat btn-hover">view all</a>
            </div>
        </div>
    </div> --}}
    <!-- end blogs -->
@include('layouts/userView/user_footer')
