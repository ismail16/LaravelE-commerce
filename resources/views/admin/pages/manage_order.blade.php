@extends('admin.admin_master')
@section('content')

<!-- BEGIN PAGE HEADER-->   
<div class="row-fluid">
    <div class="span12">
        <!-- BEGIN THEME CUSTOMIZER-->
        <div id="theme-change" class="hidden-phone">
            <i class="icon-cogs"></i>
            <span class="settings">
                <span class="text">Theme Color:</span>
                <span class="colors">
                    <span class="color-default" data-style="default"></span>
                    <span class="color-green" data-style="green"></span>
                    <span class="color-gray" data-style="gray"></span>
                    <span class="color-purple" data-style="purple"></span>
                    <span class="color-red" data-style="red"></span>
                </span>
            </span>
        </div>
        <!-- END THEME CUSTOMIZER-->
        <!-- BEGIN PAGE TITLE & BREADCRUMB-->
        <h3 class="page-title">
            Manage Order
        </h3>

        <!-- END PAGE TITLE & BREADCRUMB-->
    </div>
</div>
<!-- END PAGE HEADER-->

<!-- BEGIN EDITABLE TABLE widget-->
<div class="row-fluid">
    <div class="span12">

        <!-- BEGIN EXAMPLE TABLE widget-->
        <div class="widget purple">
            <div class="widget-title">
                <h4><i class="icon-reorder"></i> All Orders</h4>

                <h3 align="center" style="color:red">
                    <?php
                    $message = Session::get('message');
                    if ($message) {
                        echo $message;
                        Session::put('message', null);
                    }
                    ?>

                </h3>




                <span class="tools">
                    <a href="javascript:;" class="icon-chevron-down"></a>
                    <a href="javascript:;" class="icon-remove"></a>
                </span>
            </div>
            <div class="widget-body">
                <div>


                    <div class="clearfix">
                        <div class="btn-group"></div>
                        <div class="btn-group pull-right">
                            <button class="btn dropdown-toggle" data-toggle="dropdown">Tools <i class="icon-angle-down"></i>
                            </button>
                            <ul class="dropdown-menu pull-right">
                                <li><a href="#">Print</a></li>
                                <li><a href="#">Save as PDF</a></li>
                                <li><a href="#">Export to Excel</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="space15"></div>
                    <table class="table table-striped table-hover table-bordered" id="editable-sample">
                        <thead>
                            <tr>
                                <th>Order ID</th>
                                <th>Customer Name</th>
                                <th>Order Total</th>
                                <th>Order date</th>
                                <th> Order Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach($order_info as $v_order)
                            <tr class="">
                                <td>{{$v_order->order_id}}</td>
                                <td>{{$v_order->first_name}}</td>
                                <td>{{$v_order->order_total}}</td>
                                <td>{{$v_order->created_at}}</td>

                                <td class="center">
                                    <span class="label label-success">{{$v_order->order_status}}</span>
                                </td>

                                </td>
                                <td>

                                    <a class="btn btn-primary" href="{{url('/view-invoice/'.$v_order->order_id)}}" title="View Invoice">
                                        <i class="halflings-icon white  icon-zoom-in"></i>  
                                    </a>
                                    <a class="btn btn-info" href="#">

                                        <i class="halflings-icon icon-pencil"></i>  
                                    </a>
                                    <a class="btn btn-danger" href="{{url('/delete-order/'.$v_order->order_id)}}">
                                        <i class="halflings-icon icon-trash"></i> 
                                    </a>
                                </td>
                            </tr>
                            @endforeach



                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- END EXAMPLE TABLE widget-->
    </div>
</div>

<!-- END EDITABLE TABLE widget-->

@endsection