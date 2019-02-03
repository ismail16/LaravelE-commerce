<?php
$category_info = DB::table('category')
        ->where('deletion_status', 1)
        ->where('publication_status', 1)
        ->where('parent_id', 0)
        ->get()
?>

@extends('master')
@section('home_top_content')

<!-- Home slideder-->
<div id="home-slider">
    <div class="container">
        <div class="row">
            <div class="">
                <div class="col-sm-3 slider-left" id="box-vertical-megamenus">
                    <div class="box-vertical-megamenus">
                        <div class="vertical-menu-content is-home" style="display: ">
                            <ul class="vertical-menu-list">
                                @foreach($category_info as $v_category)
                                <li>
                                    <a class="parent" href=""><img class="icon-menu" alt="Funky roots" src="{{URL::to('public/frontend_assets/data/2.png')}}">{{$v_category->category_name}}</a>                           
                                    <?php
                                    $sub_category = DB::table('category')
                                            ->where('parent_id', $v_category->id)
                                            ->get();
                                    ?>
                                    <div class="vertical-dropdown-menu">
                                        <div class="vertical-groups col-sm-12">
                                            @foreach($sub_category as $v_sub_category)

                                            <?php
                                            ?>
                                            <div class="mega-group col-sm-4">
                                                <h4 class="mega-group-header"><span><a href="{{URL::to('/sub_category/'.$v_sub_category->id)}}">{{$v_sub_category->category_name}}</a></span></h4>       
                                            </div>                                                    
                                            @endforeach
                                        </div>
                                    </div>
                                </li>
                                @endforeach
                            </ul>
                            <div class="all-category"><span class="open-cate">All Categories</span></div>

                            <div class="">
                                <div class="latest-deals">
                                    <h2 class="latest-deal-title">Time & Date </h2>
                                    <div class="latest-deal-content">
                                        <ul class="product-list owl-carousel" data-dots="false" data-loop="true" data-nav = "true" data-autoplayTimeout="1000" data-autoplayHoverPause = "true" data-responsive='{"0":{"items":1},"":{"items":3},"1000":{"items":1}}'>

                                            <?php
                                            // date_default_timezone_set('Asia/Dhaka');

                                            // $today = date("F j, Y, g:i:s a");

                                            // echo $today;
                                            ?>

                                            <div class='time-frame'>
                                                <div id='date-part'></div>
                                                <div id='time-part'></div>
                                            </div>
                                            <input type='button' id='stop-interval' value='Stop time' />

                                            <script type="text/javascript">
                                                $(document).ready(function() {
                                                    var interval = setInterval(function() {
                                                        var momentNow = moment();
                                                        $('#date-part').html(momentNow.format('YYYY MMMM DD') + ' '
                                                            + momentNow.format('dddd')
                                                            .substring(0,3).toUpperCase());
                                                        $('#time-part').html(momentNow.format('A hh:mm:ss'));
                                                    }, 100);

                                                    $('#stop-interval').on('click', function() {
                                                        clearInterval(interval);
                                                    });
                                                });
                                            </script>
                                        </ul>
                                    </div>
                                </div>
                            </div>  
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-9 header-top-right">
                <div class="homeslider">
                    <div class="content-slide">
                        <?php
                        $featured_product = DB::table('product')
                                ->join('tbl_product_image', 'product.id', '=', 'tbl_product_image.product_id')
                                ->where('product.is_featured', 1)
                                ->where('tbl_product_image.image_label', 1)
                                ->select('product.*', 'tbl_product_image.image_option')
                                ->get();
                        ?>
                        <ul id="contenhomeslider">
                            @foreach($featured_product as $v_product)
                            <li><a href="{{URL::to('/product-details/'.$v_product->id)}}"><img alt="Funky roots" src="{{URL::to($v_product->image_option)}}" title="Funky roots" /></a></li>

                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="header-banner banner-opacity">
                   <img src="{{URL::to('public/frontend_assets/data/hello.jpg')}}" alt="Funky roots"/>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END Home slideder-->

<!-- servives -->
<div class="container">
    <div class="service ">
        <div class="col-xs-6 col-sm-3 service-item">
            <div class="icon">
                <img alt="services" src="{{URL::to('public/frontend_assets/data/s1.png')}}" />
            </div>
            <div class="info">
                <!-- <a href="#"><h3>Free Shipping</h3></a> -->
                <h3>Free Shipping</h3>
                <span>On order over 1000 tk</span>
            </div>
        </div>
        <div class="col-xs-6 col-sm-3 service-item">
            <div class="icon">
                <img alt="services" src="{{URL::to('public/frontend_assets/data/s2.png')}}" />
            </div>
            <div class="info">
                <!-- <a href="#"><h3>7-day return</h3></a> -->
                <h3>7-day return</h3>
                <span>Moneyback guarantee</span>
            </div>
        </div>
        <div class="col-xs-6 col-sm-3 service-item">
            <div class="icon">
                <img alt="services" src="{{URL::to('public/frontend_assets/data/s3.png')}}" />
            </div>

            <div class="info" >
                <!-- <a href="#"><h3>24/7 support</h3></a> -->
                <h3>24/7 support</h3>
                <span>Online consultations</span>
            </div>
        </div>
        <div class="col-xs-6 col-sm-3 service-item">
            <div class="icon">
                <img alt="services" src="{{URL::to('public/frontend_assets/data/s4.png')}}" />
            </div>
            <div class="info">
                <!--  <a href="#"><h3>SAFE SHOPPING</h3></a> -->
                <h3>SAFE SHOPPING</h3>
                <span>Safe Shopping Guarantee</span>
            </div>
        </div>
    </div>
</div>
<!-- end services -->

<div class="page-top">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-9 page-top-left">
                <div class="popular-tabs">
                    <ul class="nav-tab">
                        <li class="active"><a data-toggle="tab" href="#tab-1">New Product</a></li>
                        <!-- <li><a data-toggle="tab" href="#tab-2">ON SALE</a></li>
                        <li><a data-toggle="tab" href="#tab-3">Best Sell</a></li> -->
                    </ul>
                    <div class="tab-container">
                        <div id="tab-1" class="tab-panel active">
                            <ul class="product-list owl-carousel" data-dots="false" data-loop="true" data-nav = "true" data-margin = "30" data-autoplayTimeout="1000" data-autoplayHoverPause = "true" data-responsive='{"0":{"items":1},"600":{"items":3},"1000":{"items":3}}'>
                                <?php
                                $new_product = DB::table('product')
                                        ->join('tbl_product_image', 'product.id', '=', 'tbl_product_image.product_id')
                                        ->where('tbl_product_image.image_label', 1)
                                        ->select('product.*', 'tbl_product_image.image_option')
                                        ->get();
//                            echo '<pre>';
//                            print_r($featured_product);
                                ?>    
                                @foreach($new_product as $v_product)
                                <li>
                                    <div class="left-block">
                                        <a href="{{URL::to('/product-details/'.$v_product->id)}}">
                                            <img class="img-responsive" alt="product" src="{{URL::to($v_product->image_option)}}" />
                                        </a>
                                        <div class="quick-view">
                                            <a title="Add to my wishlist" class="heart" href="#"></a>
                                            <a title="Add to compare" class="compare" href="#"></a>
                                            <a title="Quick view" class="search" href="#"></a>
                                        </div>
                                        <div class="add-to-cart">
                                            <a title="Add to Cart" href="{{URL::to('add-to-cart/'.$v_product->id)}}">Add to Cart</a>
                                        </div>
                                        <div class="group-price">
                                            <span class="product-new">NEW</span>
                                            <!--<span class="product-sale">Sale</span>-->
                                        </div>
                                    </div>
                                    <div class="right-block">
                                        <h5 class="product-name"><a href="#">{{$v_product->product_name}}</a></h5>
                                        <div class="content_price">
                                            <span class="price product-price">{{$v_product->new_price}}</span>
                                            <span class="price old-price">{{$v_product->old_price}}</span>
                                        </div>
                                        <div class="product-star">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-half-o"></i>
                                        </div>
                                    </div>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-3 page-top-right">
                <div class="latest-deals">
                    <h2 class="latest-deal-title">Time & Date </h2>
                    <div class="latest-deal-content">
                        <ul class="product-list owl-carousel" data-dots="false" data-loop="true" data-nav = "true" data-autoplayTimeout="1000" data-autoplayHoverPause = "true" data-responsive='{"0":{"items":1},"":{"items":3},"1000":{"items":1}}'>

                       <!--  <div class='time-frame'>
                            <div id='date-part1'></div>
                            <div id='time-part1'></div>
                        </div>
                        <input type='button' id='stop-interval1' value='Stop time' />

                        <script type="text/javascript">
                            $(document).ready(function() {
                                var interval = setInterval(function() {
                                    var momentNow = moment();
                                    $('#date-part1').html(momentNow.format('YYYY MMMM DD') + ' '
                                        + momentNow.format('dddd')
                                        .substring(0,3).toUpperCase());
                                    $('#time-part1').html(momentNow.format('A hh:mm:ss'));
                                }, 100);

                                $('#stop-interval1').on('click', function() {
                                    clearInterval(interval);
                                });
                            });
                        </script> -->
                            <li>
                                <div class="count-down-time" data-countdown="2015/06/27"></div>
                                <div class="left-block">
                                    <a href="#"><img class="img-responsive" alt="product" src="http://localhost/E-commerce001/product_image/073024Fullscreencapture629201581727AM.jpg" /></a>
                                    <div class="quick-view">
                                            <a title="Add to my wishlist" class="heart" href="#"></a>
                                            <a title="Add to compare" class="compare" href="#"></a>
                                            <a title="Quick view" class="search" href="#"></a>
                                    </div>
                                    <div class="add-to-cart">
                                        <a title="Add to Cart" href="#">Add to Cart</a>
                                    </div>
                                </div>
                                <div class="right-block">
                                    <h5 class="product-name"><a href="#">Maecenas consequat mauris</a></h5>
                                    <div class="content_price">
                                        <span class="price product-price">$38,95</span>
                                        <span class="price old-price">$52,00</span>
                                        <span class="colreduce-percentage">(-10%)</span>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <div class="count-down-time" data-countdown="2015/06/27 9:20:00">
                                </div>
                                <div class="left-block">
                                    <a href="#"><img class="img-responsive" alt="product" src="http://localhost/E-commerce001/product_image/130950Walton-Primo-S5-Smartphone-.jpg" /></a>
                                    <div class="quick-view">
                                            <a title="Add to my wishlist" class="heart" href="#"></a>
                                            <a title="Add to compare" class="compare" href="#"></a>
                                            <a title="Quick view" class="search" href="#"></a>
                                    </div>
                                    <div class="add-to-cart">
                                        <a title="Add to Cart" href="#">Add to Cart</a>
                                    </div>
                                </div>
                                <div class="right-block">
                                    <h5 class="product-name"><a href="#">Maecenas consequat mauris</a></h5>
                                    <div class="content_price">
                                        <span class="price product-price">$38,95</span>
                                        <span class="price old-price">$52,00</span>
                                        <span class="colreduce-percentage">(-20%)</span>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection