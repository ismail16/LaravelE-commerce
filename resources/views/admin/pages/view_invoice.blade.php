@extends('admin.admin_master')
@section('content')
<script type="text/javascript">
    function printDiv(divName) {
        var printContents = document.getElementById(divName).innerHTML;
        var originalContents = document.body.innerHTML;

        document.body.innerHTML = printContents;

        window.print();

        document.body.innerHTML = originalContents;
    }
</script>  
<style>
    .invoice-box{
        max-width:800px;
        margin:auto;
        padding:30px;
        border:1px solid #eee;
        box-shadow:0 0 10px rgba(0, 0, 0, .15);
        font-size:16px;
        line-height:24px;
        font-family:'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
        color:#555;
    }
    table tr{
        width: 100%;
    }
    .invoice-box table{
        width:100%;
        line-height:inherit;
        text-align:left;
    }

    .invoice-box table td{
        padding:5px;
        vertical-align:top;
    }

    .invoice-box table tr td:nth-child(2){
        text-align:left;
    }

    .invoice-box table tr.top table td{
        padding-bottom:20px;
    }

    .invoice-box table tr.top table td.title{
        font-size:45px;
        line-height:45px;
        color:#333;
    }

    .invoice-box table tr.information table td{
        padding-bottom:40px;
    }

    .invoice-box table tr.heading td{
        background:#eee;
        border-bottom:1px solid #ddd;
        font-weight:bold;
    }

    .invoice-box table tr.details td{
        padding-bottom:20px;
    }

    .invoice-box table tr.item td{
        border-bottom:1px solid #eee;
    }

    .invoice-box table tr.item.last td{
        border-bottom:none;
    }

    .invoice-box table tr.total td:nth-child(2){
        border-top:2px solid #eee;
        font-weight:bold;
    }

    @media only screen and (max-width: 600px) {
        .invoice-box table tr.top table td{
            width:100%;
            display:block;
            text-align:center;
        }

        .invoice-box table tr.information table td{
            width:100%;
            display:block;
            text-align:center;
        }

    }
</style>
<!-- BEGIN PAGE HEADER-->   
<div name="divName" id="printableArea">


    <div class="row-fluid">
        <div class="span12">
            <h3 class="page-title" style="border-bottom: 2px solid #9900cc;">
                View Invoice
            </h3>
        </div>
    </div>
    <div class="row-fluid">
        <div class="span12">
            <div class="invoice-box">
                <table cellpadding="0" cellspacing="0">
                    <tr class="top">
                        <td colspan="2">
                            <table>
                                <tr style="margin-left: 10px;">
                                    <td class="title">
                                        <img src="{{url('public/frontend_assets/images/logo.png')}}" style="width:100%; max-width:300px;">
                                    </td>
                                    <td></td>

                                    <td style="float: right">
                                        Invoice #: 00{{$order_info_by_id->order_id}}<br>
                                        Time: <?php $today = date("F j, Y, g:i a");
echo $today; ?><br>

                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr><br/>

                    <tr class="information">
                        <td colspan="2">
                            <table>
                                <tr style="margin-left: 20px;">
                                    <td>
                                        <h3>Customer Info:        </h3>
                                        Name: {{$order_info_by_id->first_name.' '.$order_info_by_id->last_name}}<br>
                                        Address: {{$order_info_by_id->address}}<br>
                                        {{$order_info_by_id->city}}, {{$order_info_by_id->zip_code}} <br>
                                        Mobile: {{$order_info_by_id->mobile}}
                                    </td>
                                    <td></td>
                                    <td style="float: right">
                                        <h3>Shipping Info:</h3>
                                        Name: {{$shipping_info_by_id->first_name.' '.$shipping_info_by_id->last_name}}<br>
                                        Address: {{$shipping_info_by_id->address}}<br>
                                        {{$shipping_info_by_id->city}}, {{$shipping_info_by_id->zip_code}} <br>
                                        Mobile: {{$shipping_info_by_id->mobile_number}}
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr><br/>


                    <tr class="heading">
                        <td>
                            Payment Method
                        </td>

                        <td></td>
                        <td></td>
                    </tr><br/>

                    <tr class="details">
                        <td>{{$order_info_by_id->payment_type}} </td><td></td><td></td>
                    </tr>

                    <tr class="heading">
                        <td>
                            Item
                        </td>
                        <td>
                            Quantity * price
                        </td>
                        <td>
                            Price
                        </td>
                    </tr>

                    @foreach($order_details as $v_order)
                    <tr>
                        <td>
                            {{$v_order->product_name}}
                        </td>
                        <td>
                            {{$v_order->product_sales_quantity}} * {{$v_order->product_price}} tk
                        </td>
                        <td>
                            {{$v_order->product_sales_quantity * $v_order->product_price}} tk
                        </td>
                    </tr>
                    @endforeach
                    <tr class="total" style="border-top: 1px solid #ddd;">
                        <td></td>
                        <td></td>

                        <td>
                            <b>Total: {{$order_info_by_id->order_total}} tk</b>
                        </td>
                    </tr>
                </table>
                <h1 style="text-align:right;">
                    <input type="button" onclick="printDiv('printableArea')" value="Print Invoice" />
                </h1>
            </div>
        </div>
    </div>



</div>



<!-- END EDITABLE TABLE widget-->

@endsection