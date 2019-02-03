@extends('master')
@section('content')

<script type="text/javascript">
    $(document).ready(function(){
        $('.is-home').css('display', 'none');
    });
</script>

<div class="columns-container">
    <div class="container" id="columns">
        <!-- breadcrumb -->
        <div class="breadcrumb clearfix">
            <a class="home" href="#" title="Return to Home">Home</a>
            <span class="navigation-pipe">&nbsp;</span>
            <span class="navigation_page">Your shopping cart</span>
        </div>
        <!-- ./breadcrumb -->
        <!-- page heading-->
        <h2 class="page-heading no-line">
            <span class="page-heading-title2">Shopping Cart Summary</span>
        </h2>
        <!-- ../page heading-->
        <div class="page-content page-order">
            <ul class="step">
                <li class="current-step"><span>01. Summary</span></li>
                <li><span>02. Sign in</span></li>
                <li><span>03. Address</span></li>
                <li><span>04. Shipping</span></li>
                <li><span>05. Payment</span></li>
            </ul>
            <div class="heading-counter warning">Your shopping cart contains:
                <span>1 Product</span>
            </div>
            <div class="order-detail-content">
                <table class="table table-bordered table-responsive cart_summary">
                    <thead>
                        <tr>
                            <th class="cart_product">Product</th>
                            <th>Description</th>
                            <th>Avail.</th>
                            <th>Unit price</th>
                            <th>Qty</th>
                            <th>Total</th>
                            <th  class="action"><i class="fa fa-trash-o"></i></th>
                        </tr>
                    </thead>
                    <?php
                    $contents = Cart::content();
//                    echo '<pre>';
//                    print_r($contents);
                    ?>
                    <tbody>
                        @foreach($contents as $v_content)
                        <tr>
                            <td class="cart_product">
                                <a href="#"><img src="{{URL::to($v_content->options['image'])}}" alt="Product"></a>
                            </td>
                            <td class="cart_description">
                                <p class="product-name"><a href="#">{{$v_content->name}} </a></p>
<!--                                <small class="cart_ref">SKU : #123654999</small><br>
                                <small><a href="#">Color : Beige</a></small><br>   
                                <small><a href="#">Size : S</a></small>-->
                            </td>
                            <td class="cart_avail"><span class="label label-success">In stock</span></td>
                            <td class="price"><span>BDT {{$v_content->price}}</span></td>
                            <td class="qty">
                                {!! Form::open(['url' => '/update-cart', 'method'=>'post']) !!}
                                <input class="form-control input-sm" type="text" name="qty" value="{{$v_content->qty}}">
                                <input class="form-control input-sm" type="hidden" name="row_id" value="{{$v_content->rowId}}">
                                <br/>
                                <button type="submit">
                                    <div class="button-group">
                                        <span class="btn btn-success">Update</span>
                                    </div> 

                                </button>
                                {!! Form::close() !!}
                            </td>
                            <td class="price">
                                <span>BDT {{$v_content->price * $v_content->qty}}</span>
                            </td>
                            <td class="action">
                                <a href="{{URL::to('delete-to-cart/'.$v_content->rowId)}}">Delete item</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="2" rowspan="2"></td>
                            <td colspan="3">Total products (tax incl.)</td>
                            <td colspan="2">122.38 €</td>
                        </tr>
                        <tr>
                            <td colspan="3"><strong>Total</strong></td>
                            <td colspan="2"><strong>{{Cart::total()}}</strong></td>
                        </tr>
                    </tfoot>    
                </table>
                <div class="cart_navigation">
                    <a class="prev-btn" href="{{URL::to('/')}}">Continue shopping</a>

                    <?php
                    $customer_id = Session::get('customer_id');
                    $shipping_id = Session::get('shipping_id');
                    if ($customer_id != NULL && $shipping_id != NULL) {
                        ?>
                        <a class="next-btn" href="{{URL::to('/payment')}}">Proceed to checkout</a>
                        <?php
                    } else if ($customer_id != NULL && $shipping_id == NULL) {
                        ?>

                        <a class="next-btn" href="{{URL::to('/shipping-address')}}">Proceed to checkout</a>
                    <?php
                    } else {
                        ?>
                        <a class="next-btn" href="{{URL::to('/checkout')}}">Proceed to checkout</a>
                    <?php } ?>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection