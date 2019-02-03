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
            Edit CATEGORY
        </h3>

        <!-- END PAGE TITLE & BREADCRUMB-->
    </div>
</div>
<div class="row-fluid">
    <div class="span12">
        <!-- BEGIN SAMPLE FORMPORTLET-->
        <div class="widget green">
            <div class="widget-title">
                <h4><i class="icon-reorder"></i> Edit CATEGORY Form </h4>
                <span class="tools">
                    <a href="javascript:;" class="icon-chevron-down"></a>
                    <a href="javascript:;" class="icon-remove"></a>
                </span>
            </div>
            <div class="widget-body">
                <!-- BEGIN FORM-->
                {!! Form::open(array('url'=>'update-category', 'class'=>'form-horizontal', 'role' => 'form', 'method' => 'POST','enctype'=>'multipart/form-data','name'=>'edit_category')) !!}
                <form action="#" class="form-horizontal">
                    <div class="control-group">
                        <label class="control-label">Category Name</label>
                        <div class="controls">
                            <input type="text" name="category_name" value="{{$category_info->category_name}}" class="span6 " />
                            <input type="hidden" name="category_id" value="{{$category_info->id}}" class="span6 " />
                            <span class="help-inline">Some hint here</span>
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label"> Parrent Category</label>
                        <div class="controls">
                            <select data-placeholder="Your Favorite Type of Bear" name="parent_id" class="chzn-select-deselect span6" tabindex="-1" id="selCSI">
                                <option value="0">SELECT</option>
                                @foreach($all_category_info as $c_info)

                                <option value="{{$c_info->id}}">{{$c_info->category_name}}</option>
                                @endforeach

                            </select>
                        </div>
                    </div>



                    <div class="control-group">
                        <label class="control-label">Category Description</label>
                        <div class="controls">
                            <textarea class="span6 " name="category_description" rows="3">{{$category_info->category_description}}</textarea>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">Category Image</label>
                        <div class="controls">
                            <div data-provides="fileupload" class="fileupload fileupload-new">
                                <div style="width: 200px; height: 150px;" class="fileupload-new thumbnail">
                                    <img alt="" src="{{URL::to($category_info->category_image)}}">
                                </div>
                                <div style="max-width: 200px; max-height: 150px; line-height: 20px;" class="fileupload-preview fileupload-exists thumbnail">

                                </div>
                                <div>

                                    <span class="btn btn-file"><span class="fileupload-new">Select image</span>
                                        <span class="fileupload-exists">Change</span>
                                        <input type="file" name="category_image" class="default"></span>
                                    <a data-dismiss="fileupload" class="btn fileupload-exists" href="#">Remove</a>
                                </div>
                            </div>
                            <span class="label label-important">NOTE!</span>
                            <span>
                                Attached image thumbnail is
                                supported in Latest Firefox, Chrome, Opera,
                                Safari and Internet Explorer 10 only
                            </span>
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
<script type="text/javascript">

    document.forms['edit_category'].elements['parent_id'].value = '<?php echo $category_info->id ?>';
</script>
@endsection