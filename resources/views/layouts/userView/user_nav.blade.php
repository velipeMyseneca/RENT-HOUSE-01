    <!-- header -->
    <header>
        <!-- mobile menu -->
        <div class="mobile-menu bg-second">
            <a href="#" class="mb-logo">
                <img src="{{asset('assets/img/siteLogo-light.png')}}" alt="" style="height: 70px; padding-top:10px;"></a>
            </a>
            <span class="mb-menu-toggle" id="mb-menu-toggle">
                <i class='bx bx-menu'></i>
            </span>
        </div>
        <!-- end mobile menu -->
        <!-- main header -->
        <div class="header-wrapper" id="header-wrapper">
            <span class="mb-menu-toggle mb-menu-close" id="mb-menu-close">
                <i class='bx bx-x'></i>
            </span>
            <!-- top header -->
            {{-- <div class="bg-second">
                <div class="top-header container">
                    <ul class="devided">
                        <li>
                            <a href="#">+840123456789</a>
                        </li>
                        <li>
                            <a href="#">atshop@mail.com</a>
                        </li>
                    </ul>
                    <ul class="devided">
                        <li class="dropdown">
                            <a href="">USD</a>
                            <i class='bx bxs-chevron-down'></i>
                            <ul class="dropdown-content">
                                <li><a href="#">VND</a></li>
                                <li><a href="#">JPY</a></li>
                                <li><a href="#">EUR</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="">ENGLISH</a>
                            <i class='bx bxs-chevron-down'></i>
                            <ul class="dropdown-content">
                                <li><a href="#">VIETNAMESE</a></li>
                                <li><a href="#">JAPANESE</a></li>
                                <li><a href="#">FRENCH</a></li>
                                <li><a href="#">SPANISH</a></li>
                            </ul>
                        </li>
                        <li><a href="#">ORDER TRACKING</a></li>
                    </ul>
                </div>
            </div> --}}
            <!-- end top header -->
            <!-- mid header -->
            <div class="bg-main">
                <div class="mid-header container">
                    <a href="#" class="logo">
                        <img src="{{asset('assets/img/siteLogo-light.png')}}" alt="" style="height: 80px; padding-top:10px;"></a>
                    <div class="search">
                        {{-- <select class="" name="" id="" >
                            <option value="">Price</option>
                            <option value="">Option 1</option>
                            <option value="">Option 1</option>
                            <option value="">Option 1</option>
                            <option value="">Option 1</option>
                            <option value="">Option 1</option>
                        </select>
                        <select class="" name="" id="" >
                            <option value="">Bed</option>
                            <option value="">Option 1</option>
                            <option value="">Option 1</option>
                            <option value="">Option 1</option>
                            <option value="">Option 1</option>
                            <option value="">Option 1</option>
                        </select>
                        <select class="" name="" id="" >
                            <option value="">Type</option>
                            <option value="">House</option>
                            <option value="">Apartment</option>
                            <option value="">Condo</option>
                        </select>
                        <select class="" name="" id="" >
                            <option value="">Lifestyle</option>
                            <option value="">House</option>
                            <option value="">Apartment</option>
                            <option value="">Condo</option>
                        </select> --}}
                        <input type="text" placeholder="Search">
                        <i class='bx bx-search-alt'></i>
                    </div>
                    <ul class="user-menu">
                        {{-- <li><a href="#"><i class='bx bx-bell'></i></a></li> --}}
                        {{-- <li><a href="#"><i class='bx bx-cart'></i></a></li> --}}
                        <li><a href="{{ route('login') }}"><i class='bx bx-user-circle'></i></a></li>
                    </ul>
                </div>
            </div>
            <!-- end mid header -->
            <!-- bottom header -->
            <div class="bg-second">
                <div class="bottom-header container">
                    <ul class="main-menu">
                        <li><a href="/">home</a></li>
                        <!-- mega menu -->
                        <li class="mega-dropdown">
                            <a href="./products.html">Rent<i class='bx bxs-chevron-down'></i></a>
                            <div class="mega-content">
                                <div class="row">
                                    <div class="col-3 col-md-12">
                                        <div class="box">
                                            <h3>Categories</h3>
                                            <ul>
                                                <li><a href="/for-rent">View All</a></li>
                                                <li><a href="#">Toronto</a></li>
                                                <li><a href="#">Nort York</a></li>
                                                <li><a href="#">York</a></li>
                                                <li><a href="#">Markham</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-3 col-md-12">
                                        <div class="box">
                                            <h3> </h3>
                                            <ul>
                                                <li><a href="#">Finch</a></li>
                                                <li><a href="#">Lawrence</a></li>
                                                <li><a href="#">Eglinton</a></li>
                                                <li><a href="#">Davidsville</a></li>
                                                <li><a href="#">Osgoode</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-3 col-md-12">
                                        <div class="box">
                                            <h3></h3>
                                            <ul>
                                                <li><a href="#">St Claire</a></li>
                                                <li><a href="#">College</a></li>
                                                <li><a href="#">Dundas</a></li>
                                                <li><a href="#">Unions</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                {{-- <div class="row img-row">
                                    <div class="col-3">
                                        <div class="box">
                                            <img src="{{asset('assets/userview/images/kisspng-beats-electronics-headphones-apple-beats-studio-red-headphones.png')}}" alt="">
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="box">
                                            <img src="{{asset('assets/userview/images/JBL_TUNE220TWS_ProductImage_Pink_ChargingCaseOpen.png')}}" alt="">
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="box">
                                            <img src="{{asset('assets/userview/images/JBL_JR 310BT_Product Image_Hero_Skyblue.png')}}" alt="">
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="box">
                                            <img src="{{asset('assets/userview/images/JBLHorizon_001_dvHAMaster.png')}}" alt="">
                                        </div>
                                    </div>
                                </div> --}}
                            </div>
                        </li>
                        <!-- end mega menu -->
                        <li><a href="#">Manage Rentals</a></li>
                        <li><a href="#">Contact Us</a></li>
                    </ul>
                </div>
            </div>
            <!-- end bottom header -->
        </div>
        <!-- end main header -->
    </header>
    <!-- end header -->