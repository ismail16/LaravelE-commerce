<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Session;
use Redirect;

class WelcomeController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $home_top_content = view('pages.home_top_content');
        $home_category_box = view('pages.home_category_box');
        $brand_showcase = view('pages.home_brand_showcase');
        $hot_categories = view('pages.home_hot_categories');
        return view('master')
                        ->with('home_top_content', $home_top_content)
                        ->with('content', $home_category_box)
                        ->with('brand_showcase', $brand_showcase)
                        ->with('hot_categories', $hot_categories);
    }

    public function category($id) {
        $category_info = DB::table('product')
                ->join('tbl_product_image', 'product.id', '=', 'tbl_product_image.product_id')
                ->join('category', 'product.category_id', '=', 'category.id')
                ->where('tbl_product_image.image_label', 1)
                ->where('category_id', $id)
                ->select('product.*', 'tbl_product_image.image_option', 'category.category_name')
                ->get();
//        echo '<pre>';
//        print_r($category_info);
//        exit();
        $category_page = view('pages.category_page')
                ->with('category_info', $category_info);
        return view('master')
                        ->with('content', $category_page);
    }

    public function sub_category($id) {
        $category_info = DB::table('product')
                ->join('tbl_product_image', 'product.id', '=', 'tbl_product_image.product_id')
                ->join('category', 'product.category_id', '=', 'category.id')
                ->where('tbl_product_image.image_label', 1)
                ->where('category_id', $id)
                ->select('product.*', 'tbl_product_image.image_option', 'category.category_name')
                ->get();
//        echo '<pre>';
//        print_r($category_info);
//        exit();
        $category_page = view('pages.sub_category_page')
                ->with('category_info', $category_info);
        return view('master')
                        ->with('content', $category_page);
    }

    public function product_details($id) {
        $product_info_by_id = DB::table('product')
                ->join('tbl_product_image', 'product.id', '=', 'tbl_product_image.product_id')
                ->where('tbl_product_image.image_label', 1)
                ->where('id', $id)
                ->select('product.*', 'tbl_product_image.image_option')
                ->first();
//        echo "<pre>";
//        print_r($product_info_by_id);
//        exit();
        $product_page = view('pages.product_single')
                ->with('product_info', $product_info_by_id);
        return view('master')
                        ->with('content', $product_page);
    }

    public function cart() {
        $cart_page = view('pages.cart');
        return view('master')
                        ->with('content', $cart_page);
    }

    public function login() {
        $login_page = view('pages.login');
        return view('master')
                        ->with('content', $login_page);
    }

    public function compare() {
        $compare_page = view('pages.compare');
        return view('master')
                        ->with('content', $compare_page);
    }

    public function wishlist() {
        $wishlist_page = view('pages.wishlist');
        return view('master')
                        ->with('content', $wishlist_page);
    }

    public function blog() {
        $blog_page = view('pages.blog');
        return view('master')
                        ->with('content', $blog_page);
    }

    public function about() {
        $blog_page = view('pages.blog');
        return view('master')
                        ->with('content', $blog_page);
    }

    public function blog_details() {
        $blog_details_page = view('pages.blog_details');
        return view('master')
                        ->with('content', $blog_details_page);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function ajax_email_check($email_address = null) {
        $customer_info = DB::table('tbl_customer')
                ->where('email_address', $email_address)
                ->first();
        if ($customer_info) {
            echo 'Alerdy Exists !';
        } else {
            echo 'Avilable';
        }
    }

    public function logout() {
        Session::put('customer_id', '');
        Session::put('customer_name', '');
        Session::flash('message', "You are successfully logout");
        return Redirect::to('/');
    }

    public function create() {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        //
    }

}
