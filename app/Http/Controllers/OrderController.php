<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Redirect;
use Session;

class OrderController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function manage_order() {
        $order_info = DB::table('tbl_order')
                ->join('tbl_customer', 'id', '=', 'tbl_order.customer_id')
                ->select('tbl_order.*', 'tbl_customer.*')
                ->get();
        $order_page = view('admin.pages.manage_order')->with('order_info', $order_info);
        return view('admin.admin_master')
                        ->with('content', $order_page);
    }

    public function view_invoice($id) {
        $order_info_by_id = DB::table('tbl_order')
                ->join('tbl_customer', 'tbl_order.customer_id', '=', 'tbl_customer.id')
                ->join('tbl_payment', 'tbl_order.payment_id', '=', 'tbl_payment.payment_id')
                ->where('tbl_order.order_id', $id)
                ->select('tbl_order.*', 'tbl_customer.*', 'tbl_payment.payment_type')
                ->first();
        $shipping_info_by_id = DB::table('tbl_order')
                ->join('tbl_shipping', 'tbl_order.shipping_id', '=', 'tbl_shipping.shipping_id')
                ->where('tbl_order.order_id', $id)
                ->select('tbl_order.order_id', 'tbl_shipping.*')
                ->first();

        $order_details = DB::table('tbl_order_details')
                ->where('order_id', $id)
                ->get();
//        echo '<pre>';
//        print_r($order_info_by_id);
//        exit();
        $view_invoice = view('admin.pages.view_invoice')
                ->with('order_info_by_id', $order_info_by_id)
                ->with('shipping_info_by_id', $shipping_info_by_id)
                ->with('order_details', $order_details);
        return view('admin.admin_master')
                        ->with('content', $view_invoice);
    }

    public function delete_order($id) {
        DB::table('tbl_order')
                ->where('order_id', $id)
                ->delete();
        Session::put('message', 'Delete Order Successfully!!');
        return Redirect::to('/manage-order');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
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
