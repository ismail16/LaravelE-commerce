<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use Cart;
use Illuminate\Support\Facades\Redirect;

class CheckoutController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function checkout() {
        $checkout_page = view('pages.checkout');
        return view('master')
                        ->with('content', $checkout_page);
    }

    public function save_customer(Request $request) {
        $data = array();
        $data['first_name'] = $request->first_name;
        $data['last_name'] = $request->last_name;
        $data['company_name'] = $request->company_name;
        $data['email_address'] = $request->email_address;
        $data['password'] = md5($request->password);
        $data['mobile'] = $request->mobile_number;
        $data['address'] = $request->address;
        $data['city'] = $request->city;
        $data['country'] = $request->country;
        $data['zip_code'] = $request->zip_code;
        $customer_id = DB::table('tbl_customer')->insertGetId($data);
        Session::put('customer_id', $customer_id);
        return Redirect::to('/shipping-address');
    }

    public function login_customer(Request $request) {

        $customer_email_address = $request->customer_email_address;
        $customer_password = md5($request->customer_password);
        $customer = DB::table('tbl_customer')
                ->select('*')
                ->where('email_address', $customer_email_address)
                ->where('password', $customer_password)
                ->first();
        if ($customer) {
            Session::put('customer_id', $customer->id);
            Session::put('first_name', $customer->first_name);
            return Redirect::to('/shipping-address');
        } else {

            Session::put('message', 'Your email or password is invalid');
            return Redirect::to('/checkout');
        }
    }

    public function shipping_address() {
        $shipping_page = view('pages.shipping');
        return view('master')
                        ->with('content', $shipping_page);
    }

    public function save_shipping(Request $request) {
        $data = array();
        $data['first_name'] = $request->first_name;
        $data['last_name'] = $request->last_name;
        $data['company_name'] = $request->company_name;
        $data['email_address'] = $request->email_address;

        $data['mobile_number'] = $request->mobile_number;
        $data['address'] = $request->address;
        $data['city'] = $request->city;
        $data['country'] = $request->country;
        $data['zip_code'] = $request->zip_code;
        $shipping_id = DB::table('tbl_shipping')->insertGetId($data);
        Session::put('shipping_id', $shipping_id);
        return Redirect::to('/payment');
    }

    public function payment() {
        $confirm_order = view('pages.confirm_order');
        return view('master')
                        ->with('content', $confirm_order);
    }

    public function place_order(Request $request) {
        $payment_type = $request->payment_type;

        $data['payment_type'] = $payment_type;
        $payment_id = DB::table('tbl_payment')->insertGetId($data);

        /*
         * Start Order Save
         */
        $odata = array();
        $odata['customer_id'] = Session::get('customer_id');
        $odata['shipping_id'] = Session::get('shipping_id');
        $odata['payment_id'] = $payment_id;
        $order_total = str_replace(",", "", Cart::total());
        $odata['order_total'] = $order_total;
        $order_id = DB::table('tbl_order')->insertGetId($odata);
        Session::put('order_id', $order_id);

        /*
         * End Order Save
         */
        /*
         * Start Order Dtails Save
         */
        $oddata = array();
        $contents = Cart::content();
        foreach ($contents as $v_contents) {
            $oddata['order_id'] = $order_id;
            $oddata['product_id'] = $v_contents->id;
            $oddata['product_name'] = $v_contents->name;
            $oddata['product_price'] = $v_contents->price;
            $oddata['product_sales_quantity'] = $v_contents->qty;
            DB::table('tbl_order_details')->insert($oddata);
            Session::put('order_id', $order_id);
        }

        /*
         * End Order Details Save
         */

        if ($payment_type == 'paypal') {
            return view('pages.htmlWebsiteStandardPayment');
        }
        if ($payment_type == 'cash_on_delivery') {
            Cart::destroy();
            return Redirect::to('/order-successfull/{id}');
        }
    }

    // public function order_successfull()
    // {
    //      $successfull_order= view('pages.successfull_order');
    //     return view('master')
    //             ->with('content',$successfull_order);
    // }

    public function order_successfull($id) {
        $order_id = Session::get('order_id');
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
        $view_invoice = view('pages.successfull_order')
                ->with('order_info_by_id', $order_info_by_id)
                ->with('shipping_info_by_id', $shipping_info_by_id)
                ->with('order_details', $order_details);
        return view('master')
                        ->with('content', $view_invoice);
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
