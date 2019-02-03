@extends('master')
@section('content')
<div class="columns-container">
    <div class="container" id="columns">
        <!-- breadcrumb -->
        <div class="breadcrumb clearfix">
            <a class="home" href="#" title="Return to Home">Home</a>
            <span class="navigation-pipe">&nbsp;</span>
            <span class="navigation_page">Compare</span>
        </div>
        <!-- ./breadcrumb -->
        <!-- page heading-->
        <h2 class="page-heading">
            <span class="page-heading-title2">Compare Products</span>
        </h2>
        <!-- ../page heading-->
        <div class="page-content">
            <table class="table table-bordered table-compare">
                <tr>
                    <td class="compare-label">Product Image</td>
                    <td>
                        <a href="#"><img src="frontend_assets/data/p40.jpg" alt="Product"></a>
                    </td>
                    <td>
                        <a href="#"><img src="frontend_assets/data/p42.jpg" alt="Product"></a>
                    </td>
                    <td>
                        <a href="#"><img src="frontend_assets/data/p41.jpg" alt="Product"></a>
                    </td>

                </tr>
                <tr>
                    <td class="compare-label">Product Name</td>
                    <td>
                        <a href="#">Perfomax</a>
                    </td>
                    <td>
                        <a href="#">Perfomax</a>
                    </td>
                    <td>
                        <a href="#">Perfomax</a>
                    </td>
                </tr>
                <tr>
                    <td class="compare-label">Rating</td>
                    <td>
                        <div class="product-star">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-half-o"></i>
                            <span>(3 Reviews)</span>
                        </div>
                    </td>
                    <td>
                        <div class="product-star">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-half-o"></i>
                            <span>(3 Reviews)</span>
                        </div>
                    </td>
                    <td>
                        <div class="product-star">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-half-o"></i>
                            <span>(3 Reviews)</span>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="compare-label">Price</td>
                    <td class="price">$20</td>
                    <td class="price">$21</td>
                    <td class="price">$20.5</td>
                </tr>
                <tr>
                    <td class="compare-label">Description</td>
                    <td>Printed evening dress with straight sleeves with black thin waist belt and ruffled linings.</td>
                    <td>Printed evening dress with straight sleeves with black thin waist belt and ruffled linings.</td>
                    <td>Printed evening dress with straight sleeves with black thin waist belt and ruffled linings.</td>
                </tr>
                <tr>
                    <td class="compare-label">Manufacturer</td>
                    <td>CUCGU</td>
                    <td>Nakia</td>
                    <td>Gola</td>
                </tr>
                <tr>
                    <td class="compare-label">Availability</td>
                    <td class="instock">Instock (20 items)</td>
                    <td class="outofstock">Out of stock</td>
                    <td class="instock">Instock (20 items)</td>
                </tr>
                <tr>
                    <td class="compare-label">SKU</td>
                    <td>#873289</td>
                    <td>#874389</td>
                    <td>#874389</td>
                </tr>
                <tr>
                    <td class="compare-label">Size</td>
                    <td>X</td>
                    <td>XL</td>
                    <td>XS</td>
                </tr>
                <tr>
                    <td class="compare-label">Color</td>
                    <td>Blue</td>
                    <td>Blue</td>
                    <td>Blue</td>
                </tr>
                <tr>
                    <td class="compare-label">Weight</td>
                    <td>0.3kg</td>
                    <td>0.3kg</td>
                    <td>0.3kg</td>
                </tr>
                <tr>
                    <td class="compare-label">Dimensions</td>
                    <td>40x20x72cm</td>
                    <td>40x20x72cm</td>
                    <td>40x20x72cm</td>
                </tr>
                <tr>
                    <td class="compare-label">Action</td>
                    <td class="action">
                        <button class="add-cart button button-sm">Add to cart</button>
                        <button class="button button-sm"><i class="fa fa-heart-o"></i></button>
                        <button class="button button-sm"><i class="fa fa-close"></i></button>
                    </td>
                    <td class="action">
                        <button class="add-cart button button-sm">Add to cart</button>
                        <button class="button button-sm"><i class="fa fa-heart-o"></i></button>
                        <button class="button button-sm"><i class="fa fa-close"></i></button>
                    </td>
                    <td class="action">
                        <button class="add-cart button button-sm">Add to cart</button>
                        <button class="button button-sm"><i class="fa fa-heart-o"></i></button>
                        <button class="button button-sm"><i class="fa fa-close"></i></button>
                    </td>
                </tr>
            </table>
        </div>
    </div>
</div>
@endsection