@extends('master')
@section('content')
<div class="columns-container">
    <div class="container" id="columns">
        <!-- breadcrumb -->
        <div class="breadcrumb clearfix">
            <a class="home" href="#" title="Return to Home">Home</a>
            <span class="navigation-pipe">&nbsp;</span>
            <a href="#" title="Return to Home">My account</a>
            <span class="navigation-pipe">&nbsp;</span>
            <span class="navigation_page">My wishlist</span>
        </div>
        <!-- ./breadcrumb -->
        <!-- row -->
        <div class="row">
            <!-- Left colunm -->
            <div class="column col-xs-12 col-sm-3" id="left_column">
                <!-- block best sellers -->
                <div class="block left-module">
                    <p class="title_block">New products</p>
                    <div class="block_content">
                        <ul class="products-block best-sell">
                            <li>
                                <div class="products-block-left">
                                    <a href="#">
                                        <img src="frontend_assets/data/product-100x122.jpg" alt="SPECIAL PRODUCTS">
                                    </a>
                                </div>
                                <div class="products-block-right">
                                    <p class="product-name">
                                        <a href="#">Woman Within Plus Size Flared</a>
                                    </p>
                                    <p class="product-price">$38,95</p>
                                    <p class="product-star">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-half-o"></i>
                                    </p>
                                </div>
                            </li>
                            <li>
                                <div class="products-block-left">
                                    <a href="#">
                                        <img src="frontend_assets/data/p11.jpg" alt="SPECIAL PRODUCTS">
                                    </a>
                                </div>
                                <div class="products-block-right">
                                    <p class="product-name">
                                        <a href="#">Woman Within Plus Size Flared</a>
                                    </p>
                                    <p class="product-price">$38,95</p>
                                    <p class="product-star">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-half-o"></i>
                                    </p>
                                </div>
                            </li>
                            <li>
                                <div class="products-block-left">
                                    <a href="#">
                                        <img src="frontend_assets/data/p12.jpg" alt="SPECIAL PRODUCTS">
                                    </a>
                                </div>
                                <div class="products-block-right">
                                    <p class="product-name">
                                        <a href="#">Plus Size Rock Star Skirt</a>
                                    </p>
                                    <p class="product-price">$38,95</p>
                                    <p class="product-star">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-half-o"></i>
                                    </p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- ./block best sellers  -->

                <!-- left silide -->
                <div class="col-left-slide left-module">
                    <ul class="owl-carousel owl-style2" data-loop="true" data-nav = "false" data-margin = "0" data-autoplayTimeout="1000" data-autoplayHoverPause = "true" data-items="1" data-autoplay="true">
                        <li><a href="#"><img src="frontend_assets/data/slide-left.jpg" alt="slide-left"></a></li>
                        <li><a href="#"><img src="frontend_assets/data/slide-left2.jpg" alt="slide-left"></a></li>
                        <li><a href="#"><img src="frontend_assets/data/slide-left3.png" alt="slide-left"></a></li>
                    </ul>
                </div>
                <!--./left silde-->
                <!-- block best sellers -->
                <div class="block left-module">
                    <p class="title_block">ON SALE</p>
                    <div class="block_content product-onsale">
                        <ul class="product-list owl-carousel" data-loop="true" data-nav = "false" data-margin = "0" data-autoplayTimeout="1000" data-autoplayHoverPause = "true" data-items="1" data-autoplay="true">
                            <li>
                                <div class="product-container">
                                    <div class="left-block">
                                        <a href="#">
                                            <img class="img-responsive" alt="product" src="frontend_assets/data/product-260x317.jpg" />
                                        </a>
                                        <div class="price-percent-reduction2">-30% OFF</div>
                                    </div>
                                    <div class="right-block">
                                        <h5 class="product-name"><a href="#">Maecenas consequat mauris</a></h5>
                                        <div class="product-star">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-half-o"></i>
                                        </div>
                                        <div class="content_price">
                                            <span class="price product-price">$38,95</span>
                                            <span class="price old-price">$52,00</span>
                                        </div>
                                    </div>
                                    <div class="product-bottom">
                                        <a class="btn-add-cart" title="Add to Cart" href="#add">Add to Cart</a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="product-container">
                                    <div class="left-block">
                                        <a href="#">
                                            <img class="img-responsive" alt="product" src="frontend_assets/data/p35.jpg" />
                                        </a>
                                        <div class="price-percent-reduction2">-10% OFF</div>
                                    </div>
                                    <div class="right-block">
                                        <h5 class="product-name"><a href="#">Maecenas consequat mauris</a></h5>
                                        <div class="product-star">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-half-o"></i>
                                        </div>
                                        <div class="content_price">
                                            <span class="price product-price">$38,95</span>
                                            <span class="price old-price">$52,00</span>
                                        </div>
                                    </div>
                                    <div class="product-bottom">
                                        <a class="btn-add-cart" title="Add to Cart" href="#add">Add to Cart</a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="product-container">
                                    <div class="left-block">
                                        <a href="#">
                                            <img class="img-responsive" alt="product" src="frontend_assets/data/p37.jpg" />
                                        </a>
                                        <div class="price-percent-reduction2">-42% OFF</div>
                                    </div>
                                    <div class="right-block">
                                        <h5 class="product-name"><a href="#">Maecenas consequat mauris</a></h5>
                                        <div class="product-star">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-half-o"></i>
                                        </div>
                                        <div class="content_price">
                                            <span class="price product-price">$38,95</span>
                                            <span class="price old-price">$52,00</span>
                                        </div>
                                    </div>
                                    <div class="product-bottom">
                                        <a class="btn-add-cart" title="Add to Cart" href="#add">Add to Cart</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- ./block best sellers  -->
                <div class="block left-module">
                    <p class="title_block">SPECIAL PRODUCTS</p>
                    <div class="block_content">
                        <ul class="products-block">
                            <li>
                                <div class="products-block-left">
                                    <a href="#">
                                        <img src="frontend_assets/data/product-100x122.jpg" alt="SPECIAL PRODUCTS">
                                    </a>
                                </div>
                                <div class="products-block-right">
                                    <p class="product-name">
                                        <a href="#">Woman Within Plus Size Flared</a>
                                    </p>
                                    <p class="product-price">$38,95</p>
                                    <p class="product-star">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-half-o"></i>
                                    </p>
                                </div>
                            </li>
                        </ul>
                        <div class="products-block">
                            <div class="products-block-bottom">
                                <a class="link-all" href="#">All Products</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ./left colunm -->
            <!-- Center colunm-->
            <div class="center_column col-xs-12 col-sm-9" id="center_column">
                <!-- page heading-->
                <h2 class="page-heading">
                    <span class="page-heading-title2">My wishlist</span>
                </h2>
                <!-- ../page heading-->
                <div class="box-border box-wishlist">
                    <h2>New wishlist</h2>
                    <label for="wishlist-name">Name</label>
                    <input type="text" class="form-control input">
                    <button class="button">Save</button>
                </div>
                <table class="table table-bordered table-wishlist">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Qty</th>
                            <th>Viewed</th>
                            <th>Created</th>
                            <th>Derect link</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>My wishlist</td>
                            <td>7</td>
                            <td>0</td>
                            <td>2015-06-18</td>
                            <td>View</td>
                            <td class="text-center"><a href="#"><i class="fa fa-close"></i></a></td>
                        </tr>
                    </tbody>
                </table>
                <ul class="row list-wishlist">
                    <li class="col-sm-3">
                        <div class="product-img">
                            <a href="#"><img src="frontend_assets/data/wishlist1.jpg" alt="Product"></a>
                        </div>
                        <h5 class="product-name">
                            <a href="#">Adipiscing aliquet sed in lacus, Liqui-gels 24</a>
                        </h5>
                        <div class="qty">
                            <label>Quantity</label>
                            <input type="text" class="form-control input input-sm">
                        </div>
                        <div class="priority">
                            <label>Priority</label>
                            <select class="form-control input iput-sm">
                                <option>Medium</option>
                            </select>
                        </div>
                        <div class="button-action">
                            <button class="button button-sm">Save</button>
                            <a href="#"><i class="fa fa-close"></i></a>
                        </div>
                    </li>
                    <li class="col-sm-3">
                        <div class="product-img">
                            <a href="#"><img src="frontend_assets/data/wishlist2.jpg" alt="Product"></a>
                        </div>
                        <h5 class="product-name">
                            <a href="#">Adipiscing aliquet sed in lacus, Liqui-gels 24</a>
                        </h5>
                        <div class="qty">
                            <label>Quantity</label>
                            <input type="text" class="form-control input input-sm">
                        </div>
                        <div class="priority">
                            <label>Priority</label>
                            <select class="form-control input iput-sm">
                                <option>Medium</option>
                            </select>
                        </div>
                        <div class="button-action">
                            <button class="button button-sm">Save</button>
                            <a href="#"><i class="fa fa-close"></i></a>
                        </div>
                    </li>
                    <li class="col-sm-3">
                        <div class="product-img">
                            <a href="#"><img src="frontend_assets/data/wishlist3.jpg" alt="Product"></a>
                        </div>
                        <h5 class="product-name">
                            <a href="#">Adipiscing aliquet sed in lacus, Liqui-gels 24</a>
                        </h5>
                        <div class="qty">
                            <label>Quantity</label>
                            <input type="text" class="form-control input input-sm">
                        </div>
                        <div class="priority">
                            <label>Priority</label>
                            <select class="form-control input iput-sm">
                                <option>Medium</option>
                            </select>
                        </div>
                        <div class="button-action">
                            <button class="button button-sm">Save</button>
                            <a href="#"><i class="fa fa-close"></i></a>
                        </div>
                    </li>
                    <li class="col-sm-3">
                        <div class="product-img">
                            <a href="#"><img src="frontend_assets/data/wishlist4.jpg" alt="Product"></a>
                        </div>
                        <h5 class="product-name">
                            <a href="#">Adipiscing aliquet sed in lacus, Liqui-gels 24</a>
                        </h5>
                        <div class="qty">
                            <label>Quantity</label>
                            <input type="text" class="form-control input input-sm">
                        </div>
                        <div class="priority">
                            <label>Priority</label>
                            <select class="form-control input iput-sm">
                                <option>Medium</option>
                            </select>
                        </div>
                        <button class="button button-sm">Save</button>
                    </li>
                    <li class="col-sm-3">
                        <div class="product-img">
                            <a href="#"><img src="frontend_assets/data/wishlist5.jpg" alt="Product"></a>
                        </div>
                        <h5 class="product-name">
                            <a href="#">Adipiscing aliquet sed in lacus, Liqui-gels 24</a>
                        </h5>
                        <div class="qty">
                            <label>Quantity</label>
                            <input type="text" class="form-control input input-sm">
                        </div>
                        <div class="priority">
                            <label>Priority</label>
                            <select class="form-control input iput-sm">
                                <option>Medium</option>
                            </select>
                        </div>
                        <div class="button-action">
                            <button class="button button-sm">Save</button>
                            <a href="#"><i class="fa fa-close"></i></a>
                        </div>
                    </li>
                    <li class="col-sm-3">
                        <div class="product-img">
                            <a href="#"><img src="frontend_assets/data/wishlist6.jpg" alt="Product"></a>
                        </div>
                        <h5 class="product-name">
                            <a href="#">Adipiscing aliquet sed in lacus, Liqui-gels 24</a>
                        </h5>
                        <div class="qty">
                            <label>Quantity</label>
                            <input type="text" class="form-control input input-sm">
                        </div>
                        <div class="priority">
                            <label>Priority</label>
                            <select class="form-control input iput-sm">
                                <option>Medium</option>
                            </select>
                        </div>
                        <div class="button-action">
                            <button class="button button-sm">Save</button>
                            <a href="#"><i class="fa fa-close"></i></a>
                        </div>
                    </li>
                    <li class="col-sm-3">
                        <div class="product-img">
                            <a href="#"><img src="frontend_assets/data/wishlist7.jpg" alt="Product"></a>
                        </div>
                        <h5 class="product-name">
                            <a href="#">Adipiscing aliquet sed in lacus, Liqui-gels 24</a>
                        </h5>
                        <div class="qty">
                            <label>Quantity</label>
                            <input type="text" class="form-control input input-sm">
                        </div>
                        <div class="priority">
                            <label>Priority</label>
                            <select class="form-control input iput-sm">
                                <option>Medium</option>
                            </select>
                        </div>
                        <div class="button-action">
                            <button class="button button-sm">Save</button>
                            <a href="#"><i class="fa fa-close"></i></a>
                        </div>
                    </li>
                    <li class="col-sm-3">
                        <div class="product-img">
                            <a href="#"><img src="frontend_assets/data/wishlist8.jpg" alt="Product"></a>
                        </div>
                        <h5 class="product-name">
                            <a href="#">Adipiscing aliquet sed in lacus, Liqui-gels 24</a>
                        </h5>
                        <div class="qty">
                            <label>Quantity</label>
                            <input type="text" class="form-control input input-sm">
                        </div>
                        <div class="priority">
                            <label>Priority</label>
                            <select class="form-control input iput-sm">
                                <option>Medium</option>
                            </select>
                        </div>
                        <div class="button-action">
                            <button class="button button-sm">Save</button>
                            <a href="#"><i class="fa fa-close"></i></a>
                        </div>
                    </li>
                </ul>
            </div>
            <!-- ./ Center colunm -->
        </div>
        <!-- ./row-->
    </div>
</div>
@endsection