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
            ADD Manufacture
        </h3>
<!--        <ul class="breadcrumb">
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
        </ul>-->
        <!-- END PAGE TITLE & BREADCRUMB-->
    </div>
</div>
<div class="row-fluid">
    <div class="span12">
        <!-- BEGIN SAMPLE FORMPORTLET-->
        <div class="widget green">
            <div class="widget-title">
                <h4><i class="icon-reorder"></i> ADD Manufacture Form </h4>
                <span class="tools">
                    <a href="javascript:;" class="icon-chevron-down"></a>
                    <a href="javascript:;" class="icon-remove"></a>
                </span>
            </div>
            <div class="widget-body">
                <!-- BEGIN FORM-->
                {!! Form::open(array('url'=>'save-manufacture', 'class'=>'form-horizontal', 'role' => 'form', 'method' => 'POST','enctype'=>'multipart/form-data')) !!}
                <form action="#" class="form-horizontal">
                    <div class="control-group">
                        <label class="control-label">Manufacture Name</label>
                        <div class="controls">
                            <input type="text" name="manufacture_name" class="span6 " required />
                            <span class="help-inline">Some hint here</span>
                        </div>
                    </div>



                    <div class="control-group">
                        <label class="control-label">Publication_status</label>
                        <div class="controls">
                            <select data-placeholder="Your Favorite Type of Bear" name="publication_status" class="chzn-select-deselect span6" tabindex="-1" required>

                                <option value="1">Published</option>
                                <option value="0">Unpublished</option>


                            </select>
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label">Manufacture Description</label>
                        <div class="controls">
                            <textarea class="span6 " name="manufacture_description" rows="3" required></textarea>
                        </div>
                    </div>

                    <div class="form-actions">
                        <button type="submit" class="btn btn-success">Submit</button>
                        <button type="button" class="btn">Cancel</button>
                    </div>
                    {!! Form::close() !!} 
                    <!-- END FORM-->
            </div>
        </div>
        <!-- END SAMPLE FORM PORTLET-->
    </div>
</div>

@endsection