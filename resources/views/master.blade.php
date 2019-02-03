<?php
$category_info = DB::table('category')
        ->where('deletion_status', 1)
        ->where('publication_status', 1)
        ->where('parent_id', 0)
        ->get()
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="{{URL::to('public/frontend_assets/lib/bootstrap/css/bootstrap.min.css')}}" />
        <link rel="stylesheet" type="text/css" href="{{URL::to('public/frontend_assets/lib/font-awesome/css/font-awesome.min.css')}}" />
        <link rel="stylesheet" type="text/css" href="{{URL::to('public/frontend_assets/lib/select2/css/select2.min.css')}}" />
        <link rel="stylesheet" type="text/css" href="{{URL::to('public/frontend_assets/lib/jquery.bxslider/jquery.bxslider.css')}}" />
        <link rel="stylesheet" type="text/css" href="{{URL::to('public/frontend_assets/lib/owl.carousel/owl.carousel.css')}}" />
        <link rel="stylesheet" type="text/css" href="{{URL::to('public/frontend_assets/lib/jquery-ui/jquery-ui.css')}}" />
        <link rel="stylesheet" type="text/css" href="{{URL::to('public/frontend_assets/lib/fancyBox/jquery.fancybox.css')}}" />
        <link rel="stylesheet" type="text/css" href="{{URL::to('public/frontend_assets/css/animate.css')}}" />
        <link rel="stylesheet" type="text/css" href="{{URL::to('public/frontend_assets/css/reset.css')}}" />
        <link rel="stylesheet" type="text/css" href="{{URL::to('public/frontend_assets/css/style.css')}}" />
        <link rel="stylesheet" type="text/css" href="{{URL::to('public/frontend_assets/css/responsive.css')}}" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.5.1/moment.min.js"></script>

        <title>LaravelE-commerce</title>
    </head>
    <body>

        <!-- TOP BANNER -->
        <!--<div id="top-banner" class="top-banner">
            <div class="bg-overlay"></div>
            <div class="container">
                <h1>Special Offer!</h1>
                <h2>Additional 40% OFF For Men & Women Clothings</h2>
                <span>This offer is for online only 7PM to middnight ends in 30th July 2015</span>
                <span class="btn-close"></span>
            </div>
        </div>-->
        <!-- HEADER -->
        <div id="header" class="header">
            <div class="top-header">
                <div class="container">
                    <div class="nav-top-links">
                        <img alt="email" src="{{URL::to('public/frontend_assets/images/email.png')}}" />Contact us today: 
                        <img alt="phone" src="{{URL::to('public/frontend_assets/images/phone.png')}}" />+8801686-254438
                    </div>

                    <!-- <div class="currency ">
                        <div class="dropdown">
                            <a class="current-open" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#">USD</a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#">Dollar</a></li>
                                <li><a href="#">Euro</a></li>
                            </ul>
                        </div>
                    </div> -->

                    <!-- <div class="language ">
                        <div class="dropdown">
                            <a class="current-open" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#">
                                <img alt="email" src="{{URL::to('public/frontend_assets/images/fr.jpg')}}" />French

                            </a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#"><img alt="email" src="{{URL::to('public/frontend_assets/images/en.jpg')}}" />English</a></li>
                                <li><a href="#"><img alt="email" src="{{URL::to('public/frontend_assets/images/fr.jpg')}}" />French</a></li>
                            </ul>
                        </div>
                    </div> -->

<!--                    <div class="support-link">
                        <a href="#">Services</a>
                        <a href="#">Support</a>
                    </div>-->

                    <div id="user-info-top" class="user-info pull-right">
                        <div class="dropdown">
                            <a class="current-open" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#"><span>My Account</span></a>
                            <ul class="dropdown-menu mega_dropdown" role="menu">
                                <?php
                                $customer_id = Session::get('customer_id');
                                if ($customer_id != NULL) {
                                    ?>
                                    <li><a href="{{URL::to('/customer-logout')}}">Logout</a></li>
                                    <?php
                                } else {
                                    ?>
                                    <li><a href="{{URL::to('/login')}}">Login</a></li>
                                    <?php
                                }
                                ?>
                                <li><a href="#">Compare</a></li>
                                <li><a href="#">Wishlists</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!--/.top-header -->
            <!-- MAIN HEADER -->
            <?php
            $content = Cart::content();
            $tk = Cart::total();
            $total_qty = 0;
            ?>

            @foreach($content as $v_content) 
            <?php
            $sub_total = $v_content->qty;
            $total_qty += $sub_total;
            ?>
            @endforeach


            <div class="container main-header">
                <div class="row">
                    <div class="col-xs-12 col-sm-3 logo">
                        <a href="{{URL::to('/')}}"><img alt="Kute shop - themelock.com" src="{{URL::to('public/frontend_assets/images/logo.png')}}" /></a>
                    </div>
                    <div class="col-xs-7 col-sm-7 header-search-box">
                        <form class="form-inline">
                            <div class="form-group form-category">
                                <select class="select-category">
                                    <option value="2">All Categories</option>
                                    <option value="1">Men</option>
                                    <option value="2">Women</option>
                                </select>
                            </div>
                            <div class="form-group input-serach">
                                <input type="text"  placeholder="Keyword here...">
                            </div>
                            <button type="submit" class="pull-right btn-search"></button>
                        </form>
                    </div>
                    <div id="cart-block" class="col-xs-5 col-sm-2 shopping-cart-box">
                        <a class="cart-link" href="{{URL::to('/show-cart')}}">
                            <span class="title">Shopping cart</span>
                            <span class="total">
                                <?php
                                    // echo $total_qty." items"."-".$tk." tk";
                                    echo "Total- " . $tk . " tk";
                                ?>  
                            </span>
                            <span class="notify notify-left">
                                <?php
                                    echo $total_qty;
                                ?>     
                            </span>

                        </a>
                        <div class="cart-block">
                            <div class="cart-block-content">
                                <h5 class="cart-title">
                                    <?php
                                    echo $total_qty;
                                    ?>     
                                    - Items in my cart
                                </h5>
                                <div class="cart-block-list">
                                    <ul>
                                        <?php
                                        $content = Cart::content();
                                        $tk = Cart::total();
                                        ?>

                                        @foreach($content as $v_content)

                                        <li class="product-info">
                                            <div class="p-left">
                                                <a href="#" class="remove_link"></a>
                                                <a href="#">
                                                    <img class="img-responsive" src="{{URL::to($v_content->options['image'])}}" alt="p10">
                                                </a>
                                            </div>
                                            <div class="p-right">
                                                <p class="p-name">{{$v_content->name}}</p>
                                                <p class="p-rice">BDT {{$v_content->price}}</p>
                                                <p>Qty:{{$v_content->qty}}</p>
                                            </div>
                                        </li>
                                        @endforeach

                                    </ul>
                                </div>
                                <div class="toal-cart">
                                    <span>Total</span>
                                    <span class="toal-price pull-right">
                                        <?php
                                        echo $tk;
                                        ?>
                                    </span>
                                </div>
                                <div class="cart-buttons">
                                    <a href="{{URL::to('/show-cart')}}" class="btn-check-out">View Cart</a>
                                    <a href="{{URL::to('/checkout')}}" class="btn-check-out">Checkout</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- END MANIN HEADER -->
            <div id="nav-top-menu" class="nav-top-menu">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-3" id="box-vertical-megamenus">
                            <div class="box-vertical-megamenus">
                                <h4 class="title" id="title_category">
                                    <span class="title-menu">Categories</span>
                                    <!-- <span class="btn-open-mobile pull-right home-page"><i class="fa fa-bars"></i></span> -->
                                </h4>
                                
                            </div>
                        </div>
                        <div id="main-menu" class="col-sm-9 main-menu">
                            <nav class="navbar navbar-default">
                                <div class="container-fluid">
                                    <div class="navbar-header">
                                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                                            <i class="fa fa-bars"></i>
                                        </button>
                                        <a class="navbar-brand" href="#">MENU</a>
                                    </div>
                                    <div id="navbar" class="navbar-collapse collapse">
                                        <ul class="nav navbar-nav">
                                            <li class="active"><a href="{{URL::to('/')}}">Home</a></li>
                                            <?php
                                            $category_info = DB::table('category')
                                                    ->where('deletion_status', 1)
                                                    ->where('publication_status', 1)
                                                    // ->where('parent_id', 0)
                                                    ->get()
                                            ?>
                                            @foreach($category_info as $c_info)
                                            @if($c_info->parent_id == 0)
                                            <li class="dropdown">

                                                <a href="" class="dropdown-toggle" data-toggle="dropdown">{!! $c_info->category_name!!}</a>

                                                <ul class="dropdown-menu mega_dropdown" role="menu" style="width: 830px;">
                                                    <li class="block-container col-sm-3">
                                                        <ul class="block">
                                                            <?php
                                                            $sub_category = DB::table('category')
                                                                    ->where('parent_id', $c_info->id)
                                                                    ->get();
                                                            ?>
                                                            @foreach($sub_category as $v_sub_category)


                                                            <li class="link_container">
                                                                <a href="{{URL::to('/sub_category/'.$v_sub_category->id)}}">{{$v_sub_category->category_name}}</a>
                                                            </li>

                                                            @endforeach
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            @endif
                                            @endforeach

                                        </ul>
                                    </div><!--/.nav-collapse -->
                                </div>
                            </nav>
                        </div>
                    </div>
                    <!-- userinfo on top-->
                    <div id="form-search-opntop">
                    </div>
                    <!-- userinfo on top-->
                    <div id="user-info-opntop">
                    </div>
                    <!-- CART ICON ON MMENU -->
                    <div id="shopping-cart-box-ontop">
                        <i class="fa fa-shopping-cart"></i>
                        <div class="shopping-cart-box-ontop-content"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end header -->
        @yield('home_top_content')
        @yield('content')
        <!---->
        <!--  @yield('brand_showcase')
        -->
        @yield('hot_categories')
        <!-- Footer -->

        <footer id="footer">
            <div class="container">
                <div id="trademark-box" class="row">
                    <div class="col-sm-12">
                        <ul id="trademark-list">
                            <li id="payment-methods">Accepted Payment Methods</li>
                            <li>
                                <a href="#"><img src="{{URL::to('public/frontend_assets/data/trademark-ups.jpg')}}"  alt="ups"/></a>
                            </li>
                            <li>
                                <a href="#"><img src="{{URL::to('public/frontend_assets/data/trademark-qiwi.jpg')}}"  alt="ups"/></a>
                            </li>

                            <li>
                                <a href="#"><img src="{{URL::to('public/frontend_assets/data/trademark-visa.jpg')}}"  alt="ups"/></a>
                            </li>
                            <li>
                                <a href="#"><img src="{{URL::to('public/frontend_assets/data/trademark-mc.jpg')}}"  alt="ups"/></a>
                            </li>

                        </ul> 
                    </div>
                </div> 

                <div id="introduce-box" class="row">
                    <div class="col-md-3">
                        <div id="address-box">
                            <a href="#"><img src="{{URL::to('public/frontend_assets/data/introduce-logo.png')}}" alt="" /></a>
                            <div id="address-list">
                                <div class="tit-name">Address:</div>
                                <div class="tit-contain">Panthapath Dhaka-1215.</div>
                                <div class="tit-name">Phone:</div>
                                <div class="tit-contain">01686-254438</div>
                                <div class="tit-name">Email:</div>
                                <div class="tit-contain">ismail32cse@gmail.com</div>
                            </div>
                        </div> 
                    </div>
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="introduce-title">Company</div>
                                <ul id="introduce-company"  class="introduce-list">
                                    <li><a href="{{URL::to('/about')}}">About Us</a></li>
                                    <li><a href="#">Testimonials</a></li>
                                    <li><a href="#">Affiliate Program</a></li>
                                    <li><a href="#">Terms & Conditions</a></li>
                                    <li><a href="#">Contact Us</a></li>
                                </ul>
                            </div>
                            <div class="col-sm-4">
                                <div class="introduce-title">My Account</div>
                                <ul id = "introduce-Account" class="introduce-list">
                                    <li><a href="#">My Order</a></li>
                                    <li><a href="#">My Wishlist</a></li>
                                    <li><a href="#">My Credit Slip</a></li>
                                    <li><a href="#">My Addresses</a></li>
                                    <li><a href="#">My Personal In</a></li>
                                </ul>
                            </div>
                            <div class="col-sm-4">
                                <div class="introduce-title">Support</div>
                                <ul id = "introduce-support"  class="introduce-list">
                                    <li><a href="#">Privacy Policy</a></li>
                                    <li><a href="#">Returns and Replacement</a></li>
                                    <li><a href="#">FAQ</a></li>
                                    <li><a href="#">LET US HELP YOU</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div id="contact-box">
                            <div class="introduce-title">Newsletter</div>
                            <div class="input-group" id="mail-box">
                                <input type="text" placeholder="Your Email Address"/>
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="button">OK</button>
                                </span>
                            </div>
                            <div class="introduce-title">Let's Socialize</div>
                            <div class="social-link">
                                <a href="https://web.facebook.com/sheikh.smile"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-pinterest-p"></i></a>
                                <a href="#"><i class="fa fa-vk"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-google-plus"></i></a>
                            </div>
                        </div>

                    </div>
                </div>

                <div id="trademark-text-box" class="row">
                </div>

                <div id="footer-menu-box">
                    <!-- <div class="col-sm-12">
                        <ul class="footer-menu-list">
                            <li><a href="#" >Company Info - Partnerships</a></li>
                        </ul>
                    </div> -->
                    <!-- <div class="col-sm-12">
                        <ul class="footer-menu-list">
                            <li><a href="#" >Online Shopping</a></li>
                            <li><a href="#" >Promotions</a></li>
                            <li><a href="#" >My Orders</a></li>
                            <li><a href="#" >Help</a></li>
                            <li><a href="#" >Site Map</a></li>
                            <li><a href="#" >Customer Service</a></li>
                            <li><a href="#" >Support</a></li>
                        </ul>
                    </div> -->
                    <!--   <div class="col-sm-12">
                          <ul class="footer-menu-list">
                              <li><a href="#" >Most Populars</a></li>
                              <li><a href="#" >Best Sellers</a></li>
                              <li><a href="#" >New Arrivals</a></li>
                              <li><a href="#" >Special Products</a></li>
                              <li><a href="#" >Manufacturers</a></li>
                              <li><a href="#" >Our Stores</a></li>
                              <li><a href="#" >Shipping</a></li>
                              <li><a href="#" >Payments</a></li>
                              <li><a href="#" >Warantee</a></li>
                              <li><a href="#" >Refunds</a></li>
                              <li><a href="#" >Checkout</a></li>
                              <li><a href="#" >Discount</a></li>
                          </ul>
                      </div> -->
                    <!-- <div class="col-sm-12">
                        <ul class="footer-menu-list">
                            <li><a href="#" >Terms & Conditions</a></li>
                            <li><a href="#" >Policy</a></li>
                            <li><a href="#" >Shipping</a></li>
                            <li><a href="#" >Payments</a></li>
                            <li><a href="#" >Returns</a></li>
                            <li><a href="#" >Refunds</a></li>
                            <li><a href="#" >Warrantee</a></li>
                            <li><a href="#" >FAQ</a></li>
                            <li><a href="#" >Contact</a></li>
                        </ul>
                    </div> -->
                    <p class="text-center"> Developed by <a style="color: green;" href="https://web.facebook.com/sheikh.smile">Ismail Hossain</a> Copyrights &#169; 2017. All Rights Reserved.</p>
                </div>

            </div> 
        </footer>

        <a href="#" class="scroll_top" title="Scroll to Top" style="display: inline;">Scroll</a>
        <!-- Script-->
        <script type="text/javascript" src="{{URL::to('public/frontend_assets/lib/jquery/jquery-1.11.2.min.js')}}"></script>
        <script type="text/javascript" src="{{URL::to('public/frontend_assets/lib/bootstrap/js/bootstrap.min.js')}}"></script>
        <script type="text/javascript" src="{{URL::to('public/frontend_assets/lib/select2/js/select2.min.js')}}"></script>
        <script type="text/javascript" src="{{URL::to('public/frontend_assets/lib/jquery.bxslider/jquery.bxslider.min.js')}}"></script>
        <script type="text/javascript" src="{{URL::to('public/frontend_assets/lib/owl.carousel/owl.carousel.min.js')}}"></script>
        <script type="text/javascript" src="{{URL::to('public/frontend_assets/lib/jquery.countdown/jquery.countdown.min.js')}}"></script>

        <script type="text/javascript" src="{{URL::to('public/frontend_assets/lib/jquery-ui/jquery-ui.min.js')}}"></script>
        <script type="text/javascript" src="{{URL::to('public/frontend_assets/lib/fancyBox/jquery.fancybox.js')}}"></script>
        <script type="text/javascript" src="{{URL::to('public/frontend_assets/js/jquery.actual.min.js')}}"></script>

        <script type="text/javascript" src="{{URL::to('public/frontend_assets/js/jquery.actual.min.js')}}"></script>
        <script type="text/javascript" src="{{URL::to('public/frontend_assets/js/theme-script.js')}}"></script>

    </body>
</html>