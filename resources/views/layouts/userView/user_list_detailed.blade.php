@include('layouts/userView/user_header')


    <!-- product-detail content -->
    <div class="bg-main">
        <div class="container">
            <div class="box">
                <div class="breadcumb">
                    <a href="./index.html">home</a>
                    <span><i class='bx bxs-chevrons-right'></i></span>
                    <a href="/for-rent">all Listing</a>
                    <span><i class='bx bxs-chevrons-right'></i></span>
                    <a href="./product-detail.html">Property 1</a>
                </div>
            </div>
            <div class="row product-row">
                <div class="col-5 col-md-12">
                    <div class="product-img" id="product-img">
                        <img src="{{asset('assets/userview/img_house/house1.webp')}}" alt="">
                    </div>
                    <div class="box">
                        <div class="product-img-list">
                            <div class="product-img-item">
                                {{-- <img src="./images/kisspng-beats-electronics-headphones-apple-beats-studio-red-headphones.png" alt=""> --}}
                                <img src="{{asset('assets/userview/img_house/house1.webp')}}" alt="">
                            </div>
                            <div class="product-img-item">
                                {{-- <img src="./images/JBL-Endurance-Sprint_Alt_Red-1605x1605px.webp" alt=""> --}}
                                <img src="{{asset('assets/userview/img_house/house1.1.webp')}}" alt="">
                            </div>
                            <div class="product-img-item">
                                {{-- <img src="./images/JBL_Quantum_400_Product Image_Hero 02.png" alt=""> --}}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-7 col-md-12">
                    <div class="product-info">
                        <h1>
                            Property 1
                        </h1>
                        <div class="product-info-detail">
                            <span class="product-info-detail-title">Location:</span>
                            <a href="#">JBL</a>
                        </div>
                        {{-- <div class="product-info-detail">
                            <span class="product-info-detail-title">Rated:</span>
                            <span class="rating">
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                            </span>
                        </div> --}}
                        <p class="product-description">
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quo libero alias officiis dolore doloremque eveniet culpa dignissimos, itaque, cum animi excepturi sed veritatis asperiores soluta, nisi atque quae illum. Ipsum.
                        </p>
                        <div class="product-info-price">$2345</div>
                        {{-- <div class="product-quantity-wrapper">
                            <span class="product-quantity-btn">
                                <i class='bx bx-minus'></i>
                            </span>
                            <span class="product-quantity">1</span>
                            <span class="product-quantity-btn">
                                <i class='bx bx-plus'></i>
                            </span>
                        </div> --}}
                        <div>
                            {{-- <button class="btn-flat btn-hover">Book Now</button> --}}
                            {{-- <form action="{{route('bookSched.store')}}" >
                                @csrf --}}
                                @include('layouts.userView.calendar.calendar')
                                {{-- <input type="submit" class="btn-flat  btn-hover" value="Request A Tour"> --}}
                            {{-- </form> --}}
                        </div>
                    </div>
                </div>
            </div>
            <div class="box">
                <div class="box-header">
                    description
                </div>
                <div class="product-detail-description">
                    {{-- <button class="btn-flat btn-hover btn-view-description" id="view-all-description">
                        view all
                    </button> --}}
                    <div class="product-detail-description-content">
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit laudantium obcaecati odit dolorem, doloremque accusamus esse neque ipsa dignissimos saepe quisquam tempore perferendis deserunt sapiente! Recusandae illum totam earum ratione.
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aliquam incidunt maxime rerum reprehenderit voluptas asperiores ipsam quas consequuntur maiores, at odit obcaecati vero sunt! Reiciendis aperiam perferendis consequuntur odio quas. Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut quaerat eum veniam doloremque nihil repudiandae odio ratione culpa libero tempora. Expedita, quo molestias. Minus illo quis dignissimos aliquid sapiente error!
                        </p>
                        <img src="./images/JBL_Quantum_400_Product Image_Hero 02.png" alt="">
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis accusantium officia, quae fuga in exercitationem aliquam labore ex doloribus repellendus beatae facilis ipsam. Veritatis vero obcaecati iste atque aspernatur ducimus.
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repellat quam praesentium id sit amet magnam ad, dolorum, cumque iste optio itaque expedita eius similique, ab adipisci dicta. Quod, quibusdam quas. Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit, in corrupti ipsam sint error possimus commodi incidunt suscipit sit voluptatum quibusdam enim eligendi animi deserunt recusandae earum natus voluptas blanditiis?
                        </p>
                        <img src="./images/kisspng-beats-electronics-headphones-apple-beats-studio-red-headphones.png" alt="">
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi ullam quam fugit veniam ipsum recusandae incidunt, ex ratione, magnam labore ad tenetur officia! In, totam. Molestias sapiente deserunt animi porro?
                        </p>
                    </div>
                </div>
            </div>
            {{-- <div class="box">
                <div class="box-header">
                    related Listing
                </div>
                <div class="row" id="related-products"></div>
            </div> --}}
        </div>
    </div>
    <!-- end product-detail content -->
    @include('layouts/userView/user_footer')

    {{-- <!-- footer -->
    <footer class="bg-second">
        <div class="container">
            <div class="row">
                <div class="col-3 col-md-6">
                    <h3 class="footer-head">Products</h3>
                    <ul class="menu">
                        <li><a href="#">Help center</a></li>
                        <li><a href="#">Contact us</a></li>
                        <li><a href="#">product help</a></li>
                        <li><a href="#">warranty</a></li>
                        <li><a href="#">order status</a></li>
                    </ul>
                </div>
                <div class="col-3 col-md-6">
                    <h3 class="footer-head">services</h3>
                    <ul class="menu">
                        <li><a href="#">Help center</a></li>
                        <li><a href="#">Contact us</a></li>
                        <li><a href="#">product help</a></li>
                        <li><a href="#">warranty</a></li>
                        <li><a href="#">order status</a></li>
                    </ul>
                </div>
                <div class="col-3 col-md-6">
                    <h3 class="footer-head">support</h3>
                    <ul class="menu">
                        <li><a href="#">Help center</a></li>
                        <li><a href="#">Contact us</a></li>
                        <li><a href="#">product help</a></li>
                        <li><a href="#">warranty</a></li>
                        <li><a href="#">order status</a></li>
                    </ul>
                </div>
                <div class="col-3 col-md-6 col-sm-12">
                    <div class="contact">
                        <h3 class="contact-header">
                            ATShop
                        </h3>
                        <ul class="contact-socials">
                            <li><a href="#">
                                    <i class='bx bxl-facebook-circle'></i>
                                </a></li>
                            <li><a href="#">
                                    <i class='bx bxl-instagram-alt'></i>
                                </a></li>
                            <li><a href="#">
                                    <i class='bx bxl-youtube'></i>
                                </a></li>
                            <li><a href="#">
                                    <i class='bx bxl-twitter'></i>
                                </a></li>
                        </ul>
                    </div>
                    <div class="subscribe">
                        <input type="email" placeholder="ENTER YOUR EMAIL">
                        <button>subscribe</button>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- end footer -->

    <!-- app js -->
    <script src="./js/app.js"></script>
    <script src="./js/product-detail.js"></script>
</body>

</html> --}}