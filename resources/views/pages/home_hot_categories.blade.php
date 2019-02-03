@extends('master')
@section('hot_categories')

<div id="content-wrap">
    <div class="container">
        <div id="hot-categories" class="row">
            <div class="col-sm-12 group-title-box">
                <h2 class="group-title ">
                    <span>Hot categories</span>
                </h2>
            </div>



            <?php
            $category_info = DB::table('category')
                    // ->join('product','category.id','=','product.category_id')
                    ->where('deletion_status', 1)
                    ->where('publication_status', 1)
                    ->where('parent_id', 0)
                    //->select('product.*','category.category_name')
                    ->get();
            ?>


            @foreach($category_info as $v_product)

            <div class="col-sm-6  col-lg-3 cate-box">
                <div class="cate-tit" >
                    <div class="div-1" style="width: 46%;">
                        <div class="cate-name-wrap">
                            <p class="cate-name">{{$v_product->category_name}}</p>
                        </div>
                        <a href="" class="cate-link link-active" data-ac="flipInX" ><span>shop now</span></a>
                    </div>
                    <div class="div-2" >
                        <a href="#">
                            <img src="{{URL::to($v_product->category_image)}}" alt="Category Image" class="hot-cate-img" />


                        </a>
                    </div>

                </div>
                <div class="cate-content">
                    <ul>
                        <?php
                        $child_category_info = DB::table('category')
                                ->where('deletion_status', 1)
                                ->where('publication_status', 1)
                                ->where('parent_id', $v_product->id)
                                ->get()
                        ?>
                        @foreach($child_category_info as $child_c_info)
                        <li><a href="{{URL::to('/sub_category/'.$child_c_info->id)}}">{{$child_c_info->category_name}}</a></li>
                        @endforeach

                    </ul>
                </div>
            </div> <!-- /.cate-box -->
            @endforeach




        </div> <!-- /#hot-categories -->

    </div> <!-- /.container -->
</div>

@endsection
