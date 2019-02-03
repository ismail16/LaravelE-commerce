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
            ADD CATEGORY
        </h3>
        <ul class="breadcrumb">

            <a href="{{URL::to('/manage-category')}}" class="btn">Manage Category</a> 

        </ul>
        <!-- END PAGE TITLE & BREADCRUMB-->
    </div>
</div>
<div class="row-fluid">
    <div class="span12">
        <!-- BEGIN SAMPLE FORMPORTLET-->
        <div class="widget green">
            <div class="widget-title">
                <h4><i class="icon-reorder"></i> ADD CATEGORY Form </h4>
                <span class="tools">
                    <a href="javascript:;" class="icon-chevron-down"></a>
                    <a href="javascript:;" class="icon-remove"></a>
                </span>
            </div>
            <div class="widget-body">
                <!-- BEGIN FORM-->
                {!! Form::open(array('url'=>'save-category', 'class'=>'form-horizontal', 'role' => 'form', 'method' => 'POST','enctype'=>'multipart/form-data')) !!}
                <form action="#" class="form-horizontal">
                    <div class="control-group">
                        <label class="control-label">Category Name</label>
                        <div class="controls">
                            <input type="text" name="category_name" class="span6 " />
                            <span class="help-inline">Some hint here</span>
                        </div>
                    </div>



                    <div class="control-group">
                        <label class="control-label"> Parrent Category</label>
                        <div class="controls">
                            <select data-placeholder="Your Favorite Type of Bear" name="parent_id" class="chzn-select-deselect span6" tabindex="-1" id="selCSI">
                                <option value="0">SELECT</option>
                                @foreach($category_info as $c_info)


                                @if($c_info->parent_id == 0)
                                <option value="{{$c_info->id}}">{{$c_info->category_name}}</option>
                                <?php
                                $sub_category = DB::table('category')
                                        ->where('parent_id', $c_info->id)
                                        ->get();
                                ?>
                                @foreach($sub_category as $v_sub_category)
                                <option value="{{$v_sub_category->id}}"> -->{{$v_sub_category->category_name}}</option>
                                @endforeach
                                @endif

                                @endforeach

                            </select>
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label">Category Description</label>
                        <div class="controls">
                            <textarea class="span6 " name="category_description" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">Category Image</label>
                        <div class="controls">
                            <div data-provides="fileupload" class="fileupload fileupload-new">
                                <div style="width: 200px; height: 150px;" class="fileupload-new thumbnail">
                                    <img alt="" src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image">
                                </div>
                                <div style="max-width: 200px; max-height: 150px; line-height: 20px;" class="fileupload-preview fileupload-exists thumbnail"></div>
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

@endsection