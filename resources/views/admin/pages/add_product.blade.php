@extends('admin.admin_master')
@section('content')
<!-- BEGIN PAGE HEADER-->   
<script type="text/javascript">
    function add_more()
    {
        var image_file = "<input type='file' name='product_image[]' >";
        document.getElementById('abc').innerHTML = image_file;
        return false;
    }

</script>
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
            Add Product
        </h3>
        <ul class="breadcrumb">

            <a href="{{URL::to('/manage-product')}}" class="btn">All Products</a> 

        </ul>
        <!-- END PAGE TITLE & BREADCRUMB-->
    </div>
</div>
<div class="row-fluid">
    <div class="span12">
        <!-- BEGIN SAMPLE FORMPORTLET-->
        <div class="widget green">
            <div class="widget-title">
                <h4><i class="icon-reorder"></i> Add Product Form </h4>
                <span class="tools">
                    <a href="javascript:;" class="icon-chevron-down"></a>
                    <a href="javascript:;" class="icon-remove"></a>
                </span>
            </div>
            <div class="widget-body">
                <!-- BEGIN FORM-->
                {!! Form::open(array('url'=>'save-product', 'class'=>'form-horizontal', 'role' => 'form', 'method' => 'POST', 'enctype'=>'multipart/form-data')) !!}
                <form action="#" class="form-horizontal">
                    <div class="control-group">
                        <label class="control-label">Product Name</label>
                        <div class="controls">
                            <input type="text" name="product_name" class="span6 " required/>
                            <!-- //<span class="help-inline">Some hint here</span> -->
                        </div>
                    </div>



                    <div class="control-group">
                        <label class="control-label">Category</label>
                        <div class="controls">
                            <select data-placeholder="Your Favorite Type of Bear" name="category_id" class="chzn-select-deselect span6" tabindex="-1" id="selCSI">
                                <option>Parent</option>
                                @foreach($category_info as $c_info)


                                @if($c_info->parent_id == 0)
                                <option value="{{$c_info->id}}">{{$c_info->category_name}}</option>
                                <?php
                                $sub_category = DB::table('category')
                                        ->where('parent_id', $c_info->id)
                                        ->get();
                                ?>
                                @foreach($sub_category as $v_sub_category)
                                <option value="{{$v_sub_category->id}}"> --->{{$v_sub_category->category_name}}</option>
                                @endforeach
                                @endif

                                @endforeach

                            </select>
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label">  Manufacture</label>
                        <div class="controls">
                            <select data-placeholder="Your Favorite Type of Bear" name="manufacture_id" class="chzn-select-deselect span6" tabindex="-1" id="selCSI2">
                                <option value="13">SELECT</option>
                                @foreach($manufacture as $m_info)

                                <option value="{{$m_info->id}}">{{$m_info->manufacture_name}}</option>
                                @endforeach

                            </select>
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label">Product short description</label>
                        <div class="controls">
                            <textarea class="span6 " name="short_description" rows="3" required></textarea>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">Product long description</label>
                        <div class="controls">
                            <textarea class="span6 " name="long_description" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">New price</label>
                        <div class="controls">
                            <input type="number" name="new_price" class="span6 " required/>

                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">Old price</label>
                        <div class="controls">
                            <input type="number" name="old_price" class="span6 " required />

                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">Stock</label>
                        <div class="controls">
                            <input type="number" name="stock" class="span6 " required/>

                        </div>
                    </div>



                    <div class="control-group">
                        <label class="control-label">Product Image</label>
                        <div class="controls">

                            <div data-provides="fileupload" class="fileupload fileupload-new">
                                <div style="width: 125px; height: 75px;" class="fileupload-new thumbnail">
                                    <img alt="" src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image">
                                </div>
                                <div style="max-width: 125px; max-height: 75px; line-height: 20px;" class="fileupload-preview fileupload-exists thumbnail"></div>
                                <div>
                                    <span class="btn btn-file"><span class="fileupload-new">Select image</span>
                                        <span class="fileupload-exists">Change</span>
                                        <input type="file" name="product_image[]" class="default">
                                    </span>
                                    <a data-dismiss="fileupload" class="btn fileupload-exists" href="#">Remove</a>
                                </div>
                            </div>

                            <div data-provides="fileupload" class="fileupload fileupload-new">
                                <div style="width: 125px; height: 75px;" class="fileupload-new thumbnail">
                                    <img alt="" src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image">
                                </div>
                                <div style="max-width: 125px; max-height: 75px; line-height: 20px;" class="fileupload-preview fileupload-exists thumbnail"></div>
                                <div>
                                    <span class="btn btn-file"><span class="fileupload-new">Select image</span>
                                        <span class="fileupload-exists">Change</span>
                                        <input type="file" name="product_image[]" class="default">
                                    </span>
                                    <a data-dismiss="fileupload" class="btn fileupload-exists" href="#">Remove</a>
                                </div>
                            </div>

                            <div data-provides="fileupload" class="fileupload fileupload-new">
                                <div style="width: 125px; height: 75px;" class="fileupload-new thumbnail">
                                    <img alt="" src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image">
                                </div>
                                <div style="max-width: 125px; max-height: 75px; line-height: 20px;" class="fileupload-preview fileupload-exists thumbnail"></div>
                                <div>
                                    <span class="btn btn-file"><span class="fileupload-new">Select image</span>
                                        <span class="fileupload-exists">Change</span>
                                        <input type="file" name="product_image[]" class="default">
                                    </span>
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

                    <!--  <div class="control-group">
                         <label class="control-label">Product Image</label>
                         <div class="controls">
                             <div data-provides="fileupload" class="fileupload fileupload-new">
                                
                                 <div>
                                     
                                         <input type="file" name="product_image[]" required>
                                         <br/>
                                          <input type="file" name="product_image[]" >
                                          <br/>
                                           <input type="file" name="product_image[]" >
                                          <br/>
                                           <input type="file" name="product_image[]" >
                                     
                                 </div>
                             </div>
                             <button class="label label-important" onclick="return add_more()">Add More</button>
                             
                         </div>
                     </div> -->

                    <div class="control-group">
                        <label class="control-label" for="appendedPrependedInput">Is Featured</label>
                        <div class="controls">
                            <div class="input-prepend input-append">
                                <input type="checkbox" name="is_featured">
                            </div>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">Publication Status</label>
                        <div class="controls">
                            <label class="radio">
                                <input type="radio" name="publication_status" id="optionsRadios1" value="1" checked="">
                                Publish
                            </label>
                            <div style="clear:both"></div>
                            <label class="radio">
                                <input type="radio" name="publication_status" id="optionsRadios2" value="0">
                                Unpublish
                            </label>
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