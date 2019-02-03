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
            Editable Table
        </h3>
        <ul class="breadcrumb">
            <li>
                <a href="#">Home</a>
                <span class="divider">/</span>
            </li>
            <li>
                <a href="#">Data Table</a>
                <span class="divider">/</span>
            </li>
            <li class="active">
                Editable Table
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
<!-- BEGIN EDITABLE TABLE widget-->
<div class="row-fluid">
    <div class="span12">
        <!-- BEGIN EXAMPLE TABLE widget-->
        <div class="widget purple">
            <div class="widget-title">
                <h4><i class="icon-reorder"></i> Editable Table</h4>
                <span class="tools">
                    <a href="javascript:;" class="icon-chevron-down"></a>
                    <a href="javascript:;" class="icon-remove"></a>
                </span>
            </div>
            <div class="widget-body">
                <div>
                    <div class="clearfix">
                        <div class="btn-group">
                            <button id="editable-sample_new" class="btn green">
                                Add New <i class="icon-plus"></i>
                            </button>
                        </div>
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
                                <th>Username</th>
                                <th>Full Name</th>
                                <th>Points</th>
                                <th>Notes</th>
                                <th>Edit</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="">
                                <td>Jondi Rose</td>
                                <td>Alfred Jondi Rose</td>
                                <td>1234</td>
                                <td class="center">super user</td>
                                <td><a class="edit" href="javascript:;">Edit</a></td>
                                <td><span class="label label-important label-mini">Due</span></td>
                                <td>
                                    <button class="btn btn-success"><i class="icon-ok"></i></button>
                                    <button class="btn btn-primary"><i class="icon-pencil"></i></button>
                                    <button class="btn btn-danger"><i class="icon-trash "></i></button>
                                </td>
                            </tr>
                            <tr class="">
                                <td>Dulal</td>
                                <td>Jonathan Smith</td>
                                <td>434</td>
                                <td class="center">new user</td>
                                <td><a class="edit" href="javascript:;">Edit</a></td>
                                <td><span class="label label-success label-mini">Paid</span></td>
                                <td>
                                    <button class="btn btn-success"><i class="icon-ok"></i></button>
                                    <button class="btn btn-primary"><i class="icon-pencil"></i></button>
                                    <button class="btn btn-danger"><i class="icon-trash "></i></button>
                                </td>
                            </tr>
                            

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