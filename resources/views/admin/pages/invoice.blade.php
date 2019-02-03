@extends('admin.admin_master')
@section('admin_content')

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
            Invoice
        </h3>
        <ul class="breadcrumb">
            <li>
                <a href="#">Home</a>
                <span class="divider">/</span>
            </li>
            <li>
                <a href="#">Extra</a>
                <span class="divider">/</span>
            </li>
            <li class="active">
                Invoice
            </li>
            <li class="pull-right search-wrap">
                <form action="search_result.html" class="hidden-phone">
                    <div class="input-append search-input-area">
                        <input class="" id="appendedInputButton" type="text">
                        <button class="btn" type="button"><i class="icon-search"></i> </button>
                    </div>
                </form>
            </li>
        </ul>
        <!-- END PAGE TITLE & BREADCRUMB-->
    </div>
</div>
<!-- END PAGE HEADER-->
<!-- BEGIN PAGE CONTENT-->
<div class="row-fluid">
    <!--BEGIN METRO STATES-->
    <div class="metro-nav">

        <div class="metro-nav-block  nav-block-grey">
            <a href="invoice.html" data-original-title="">
                <div class="text-center">
                    <i class="icon-eye-open"></i>
                </div>
                <div class="status">View Invoice</div>
            </a>
        </div>
        <div class="metro-nav-block nav-block-blue ">
            <a href="create_invoice.html" data-original-title="">
                <div class="text-center">
                    <i class="icon-edit"></i>
                </div>
                <div class="status">Create Invoice</div>
            </a>
        </div>
        <div class="metro-nav-block  nav-block-red">
            <a href="invoice_list.html" data-original-title="">
                <div class="text-center">
                    <i class="icon-th-list"></i>
                </div>
                <div class="status">Invoice List</div>
            </a>
        </div>
    </div>
    <div class="space10"></div>
    <!--END METRO STATES-->
</div>
<div class="row-fluid">
    <div class="span12">
        <!-- BEGIN BLANK PAGE PORTLET-->
        <div class="widget purple">
            <div class="widget-title">
                <h4><i class="icon-edit"></i> Invoice Page </h4>
                <span class="tools">
                    <a href="javascript:;" class="icon-chevron-down"></a>
                    <a href="javascript:;" class="icon-remove"></a>
                </span>
            </div>
            <div class="widget-body">
                <div class="row-fluid">
                    <div class="span12">
                        <div class="text-center">
                            <img alt="" src="img/vector-lab.jpg">
                        </div>
                        <hr>

                    </div>
                </div>
                <div class="space20"></div>
                <div class="row-fluid invoice-list">
                    <div class="span4">
                        <h4>BILLING ADDRESS</h4>
                        <p>
                            Jonathan Smith <br>
                            44 Dreamland Tower, Suite 566 <br>
                            ABC, Dreamland 1230<br>
                            Tel: +12 (012) 345-67-89
                        </p>
                    </div>
                    <div class="span4">
                        <h4>SHIPPING ADDRESS</h4>
                        <p>
                            Vector Lab<br>
                            Road 1, House 2, Sector 3<br>
                            ABC, Dreamland 1230<br>
                            P: +38 (123) 456-7890<br>
                        </p>
                    </div>
                    <div class="span4">
                        <h4>INVOICE INFO</h4>
                        <ul class="unstyled">
                            <li>Invoice Number		: <strong>69626</strong></li>
                            <li>Invoice Date		: 2013-03-17</li>
                            <li>Due Date			: 2013-03-20</li>
                            <li>Invoice Status		: Paid</li>
                        </ul>
                    </div>
                </div>
                <div class="space20"></div>
                <div class="space20"></div>
                <div class="row-fluid">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Item</th>
                                <th class="hidden-480">Description</th>
                                <th class="hidden-480">Unit Cost</th>
                                <th class="hidden-480">Quantity</th>
                                <th>Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>LCD Monitor</td>
                                <td class="hidden-480">20 inch Philips LCD Black color monitor</td>
                                <td class="hidden-480">$ 1000</td>
                                <td class="hidden-480">2</td>
                                <td>$ 2000</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Laptop</td>
                                <td class="hidden-480">Apple Mac book pro 15” Retina Display. 2.8 GHz Processor,8 GB Ram</td>
                                <td class="hidden-480">$1750</td>
                                <td class="hidden-480">1</td>
                                <td>$1750</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Mouse</td>
                                <td class="hidden-480">Apple Magic Mouse</td>
                                <td class="hidden-480">$90</td>
                                <td class="hidden-480">3</td>
                                <td>$270</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Personal Computer</td>
                                <td class="hidden-480">iMac 21 inch slim body. 1.7 GHz, 8 GB Ram</td>
                                <td class="hidden-480">$1200</td>
                                <td class="hidden-480">2</td>
                                <td>$2400</td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>Printer</td>
                                <td class="hidden-480">Epson Color Jet printer </td>
                                <td class="hidden-480">$200</td>
                                <td class="hidden-480">2</td>
                                <td>$400</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="space20"></div>
                <div class="row-fluid">
                    <div class="span4 invoice-block pull-right">
                        <ul class="unstyled amounts">
                            <li><strong>Sub - Total amount :</strong> $6820</li>
                            <li><strong>Discount :</strong> 10%</li>
                            <li><strong>VAT :</strong> -----</li>
                            <li><strong>Grand Total :</strong> $6138</li>
                        </ul>
                    </div>
                </div>
                <div class="space20"></div>
                <div class="row-fluid text-center">
                    <a class="btn btn-success btn-large hidden-print"> Submit Your Invoice <i class="icon-check"></i></a>
                    <a class="btn btn-inverse btn-large hidden-print" onclick="javascript:window.print();">Print <i class="icon-print icon-big"></i></a>
                </div>
            </div>
        </div>
        <!-- END BLANK PAGE PORTLET-->
    </div>
</div>
<!-- END PAGE CONTENT-->

@endsection