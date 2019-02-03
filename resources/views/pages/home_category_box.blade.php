@extends('master')
@section('content')
<div class="content-page">
    <div class="container">
        <!-- featured category fashion -->
        <?php
        $category_info = DB::table('category')
                // ->join('product','category.id','=','product.category_id')
                ->where('deletion_status', 1)
                ->where('publication_status', 1)
                ->where('parent_id', 0)
                //->select('product.*','category.category_name')
                ->get();
        ?>

        <div class="category-featured">

            @foreach($category_info as $c_info)
            <nav class="navbar nav-menu nav-menu-red show-brand">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-brand"><a href="#"><img alt="fashion" src="{{URL::to('public/frontend_assets/data/fashion.png')}}" />{!! $c_info->category_name!!}</a></div>
                    <span class="toggle-menu"></span>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse">           
                        <ul class="nav navbar-nav">
                            <!-- <li class="active"><a data-toggle="tab" href="#tab-r{{$c_info->id}}">Best Seller</a></li>
                            <li><a data-toggle="tab" href="#tab-5">Most Viewed</a></li> -->

                            <?php
                            $child_category_info = DB::table('category')
                                    ->where('deletion_status', 1)
                                    ->where('publication_status', 1)
                                    ->where('parent_id', $c_info->id)
                                    ->get()
                            ?>
                            @foreach($child_category_info as $child_c_info)
                            <li><a href="{{URL::to('/sub_category/'.$child_c_info->id)}}">{{$child_c_info->category_name}}</a></li>
                            @endforeach

                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
                <div id="elevator-1" class="floor-elevator">
                    <a href="#" class="btn-elevator up disabled fa fa-angle-up"></a>
                    <a href="#elevator-2" class="btn-elevator down fa fa-angle-down"></a>
                </div>
            </nav>

            <!-- <div class="category-banner">
                <div class="col-sm-6 banner">
                    <a href="#"><img alt="ads2" class="img-responsive" src="{{URL::to('public/frontend_assets/data/ads2.jpg')}}" /></a>
                </div>
                <div class="col-sm-6 banner">
                    <a href="#"><img alt="ads2" class="img-responsive" src="{{URL::to('public/frontend_assets/data/ads3.jpg')}}" /></a>
                </div>
            </div> -->

            <div class="product-featured clearfix">

                @foreach($category_info as $p_info)

                <div class="banner-featured">
                    <div class="featured-text"><span>New Come</span></div>
                    <div class="banner-img">
                        <a href=""><img alt="Featurered 1" src="{{URL::to($p_info->category_image)}}" /></a>
                    </div>
                </div>

                @endforeach


                <div class="product-featured-content">
                    <div class="product-featured-list">
                        <div class="tab-container">
                            <!-- tab product -->
                            <div class="tab-panel active" id="tab-r">
                                <ul class="product-list owl-carousel" data-dots="false" data-loop="true" data-nav = "true" data-margin = "0" data-autoplayTimeout="1000" data-autoplayHoverPause = "true" data-responsive='{"0":{"items":1},"600":{"items":3},"1000":{"items":4}}'>

                                    <?php
                                    $child_category_info = DB::table('category')
                                            ->where('deletion_status', 1)
                                            ->where('publication_status', 1)
                                            ->where('parent_id', $c_info->id)
                                            ->get()
                                    ?>

                                    @foreach($child_category_info as $child_c_info)

                                    <?php
                                    $product_info = DB::table('product')
                                            ->join('tbl_product_image', 'product.id', '=', 'tbl_product_image.product_id')
                                            ->where('publication_status', 1)
                                            ->where('category_id', $child_c_info->id)
                                            ->select('product.*', 'tbl_product_image.image_option')
                                            ->get();
                                    ?>
                                    @foreach($product_info as $p_info)
                                    <li>
                                        <div class="left-block">
                                            <a href="{{URL::to('/product-details/'.$p_info->id)}}">
                                                <img class="img-responsive" alt="product" src="{{URL::to($p_info->image_option)}}" />
                                            </a>
                                            <div class="quick-view">
                                                <a title="Add to my wishlist" class="heart" href="#"></a>
                                                <a title="Add to compare" class="compare" href="#"></a>
                                                <a title="Quick view" class="search" href="#"></a>
                                            </div>
                                            <div class="add-to-cart">
                                                <a title="Add to Cart" href="{{URL::to('add-to-cart/'.$p_info->id)}}">Add to Cart</a>
                                            </div>
                                        </div>

                                        <div class="right-block">
                                            <h5 class="product-name"><a href="{{URL::to('/product-details/'.$p_info->id)}}">{{$p_info->product_name}}</a></h5>
                                            <div class="content_price">
                                                <span class="price product-price">{{$p_info->new_price}}</span>
                                                <span class="price old-price">{{$p_info->old_price}}</span>
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
                                    @endforeach
                                </ul>
                            </div>                   
                            <!-- tab product -->
                        </div>

                    </div>
                </div>

            </div>
            @endforeach
        </div>



        <!-- end featured category fashion -->
        <!-- featured category sports -->
        <!--        <div class="category-featured">
                    <nav class="navbar nav-menu nav-menu-green show-brand">
                      <div class="container">
                         Brand and toggle get grouped for better mobile display 
                          <div class="navbar-brand"><a href="#"><img alt="fashion" src="{{URL::to('public/frontend_assets/data/sports.png')}}" />sports</a></div>
                          <span class="toggle-menu"></span>
                         Collect the nav links, forms, and other content for toggling 
                        <div class="collapse navbar-collapse">           
                          <ul class="nav navbar-nav">
                            <li class="active"><a data-toggle="tab" href="#tab-6">Best Seller</a></li>
                            <li><a data-toggle="tab" href="#tab-7">Most Viewed</a></li>
                            <li><a href="#">Tennis</a></li>
                            <li><a href="#">Football</a></li>
                            <li><a href="#">Swimming</a></li>
                            <li><a href="#">Climbing</a></li>
                          </ul>
                        </div> /.navbar-collapse 
                      </div> /.container-fluid 
                      <div id="elevator-2" class="floor-elevator">
                            <a href="#elevator-1" class="btn-elevator up fa fa-angle-up"></a>
                            <a href="#elevator-3" class="btn-elevator down fa fa-angle-down"></a>
                      </div>
                    </nav>
                    <div class="category-banner">
                        <div class="col-sm-6 banner">
                            <a href="#"><img alt="ads2" class="img-responsive" src="{{URL::to('public/frontend_assets/data/ads6.jpg')}}" /></a>
                        </div>
                        <div class="col-sm-6 banner">
                            <a href="#"><img alt="ads2" class="img-responsive" src="{{URL::to('public/frontend_assets/data/ads7.jpg')}}" /></a>
                        </div>
                   </div>
                   <div class="product-featured clearfix">
                        <div class="banner-featured">
                            <div class="featured-text"><span>featured</span></div>
                            <div class="banner-img">
                                <a href="#"><img alt="Featurered 1" src="{{URL::to('public/frontend_assets/data/f2.jpg')}}" /></a>
                            </div>
                        </div>
                        <div class="product-featured-content">
                            <div class="product-featured-list">
                                <div class="tab-container autoheight">
                                     tab product 
                                    <div class="tab-panel active" id="tab-6">
                                        <ul class="product-list owl-carousel" data-dots="false" data-loop="true" data-nav = "true" data-margin = "0" data-autoplayTimeout="1000" data-autoplayHoverPause = "true" data-responsive='{"0":{"items":1},"600":{"items":3},"1000":{"items":4}}'>
                                            <li>
                                                <div class="left-block">
                                                    <a href="#"><img class="img-responsive" alt="product" src="{{URL::to('public/frontend_assets/data/p14.jpg')}}" /></a>
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
                                            <li>
                                                <div class="left-block">
                                                    <a href="#"><img class="img-responsive" alt="product" src="{{URL::to('public/frontend_assets/data/p15.jpg')}}" /></a>
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
                                            <li>
                                                <div class="left-block">
                                                    <a href="#"><img class="img-responsive" alt="product" src="{{URL::to('public/frontend_assets/data/p16.jpg')}}" /></a>
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
                                            <li>
                                                <div class="left-block">
                                                    <a href="#"><img class="img-responsive" alt="product" src="{{URL::to('public/frontend_assets/data/p14.jpg')}}" /></a>
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
                                            <li>
                                                <div class="left-block">
                                                    <a href="#"><img class="img-responsive" alt="product" src="{{URL::to('public/frontend_assets/data/p17.jpg')}}" /></a>
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
                                            <li>
                                                <div class="left-block">
                                                    <a href="#"><img class="img-responsive" alt="product" src="{{URL::to('public/frontend_assets/data/p14.jpg')}}" /></a>
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
                                        </ul>
                                    </div>
                                     tab product 
                                    <div class="tab-panel" id="tab-7">
                                        <ul class="product-list owl-carousel" data-dots="false" data-loop="true" data-nav = "true" data-margin = "0" data-autoplayTimeout="1000" data-autoplayHoverPause = "true" data-responsive='{"0":{"items":1},"600":{"items":3},"1000":{"items":4}}'>
        
                                            <li>
                                                <div class="left-block">
                                                    <a href="#"><img class="img-responsive" alt="product" src="{{URL::to('public/frontend_assets/data/p17.jpg')}}" /></a>
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
                                            <li>
                                                <div class="left-block">
                                                    <a href="#"><img class="img-responsive" alt="product" src="{{URL::to('public/frontend_assets/data/p16.jpg')}}" /></a>
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
                                            <li>
                                                <div class="left-block">
                                                    <a href="#"><img class="img-responsive" alt="product" src="{{URL::to('public/frontend_assets/data/p15.jpg')}}" /></a>
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
                                            <li>
                                                <div class="left-block">
                                                    <a href="#"><img class="img-responsive" alt="product" src="{{URL::to('public/frontend_assets/data/p17.jpg')}}" /></a>
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
                                            <li>
                                                <div class="left-block">
                                                    <a href="#"><img class="img-responsive" alt="product" src="{{URL::to('public/frontend_assets/data/p14.jpg')}}" /></a>
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
                                            <li>
                                                <div class="left-block">
                                                    <a href="#"><img class="img-responsive" alt="product" src="{{URL::to('public/frontend_assets/data/p17.jpg')}}" /></a>
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
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                   </div>
                </div>-->
        <!-- end featured category sports-->

        <!-- featured category electronic -->


        <!-- end featured category electronic-->
        <!-- featured category Digital -->


        <!-- end featured category Digital-->
        <!-- featured category furniture -->


        <!-- end featured category furniture-->
        <!-- featured category jewelry -->


        <!-- end featured category jewelry-->

        <!-- Baner bottom -->
        <!-- <div class="row banner-bottom">
            <div class="col-sm-6">
                <div class="banner-boder-zoom">
                    <a href="#"><img alt="ads" class="img-responsive" src="{{URL::to('public/frontend_assets/data/ads17.jpg')}}" /></a>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="banner-boder-zoom">
                    <a href="#"><img alt="ads" class="img-responsive" src="{{URL::to('public/frontend_assets/data/ads18.jpg')}}" /></a>
                </div>
            </div>
        </div> -->
        <!-- end banner bottom -->
    </div>
</div>
@endsection