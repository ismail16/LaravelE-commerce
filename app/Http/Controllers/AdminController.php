<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use DB;
use Session;
use Redirect;

class AdminController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        return view('admin.admin_login');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function admin_login_check(Request $request) {
        echo 'in super';
        $admin_email_address = $request->admin_email_address;
        $admin_password = md5($request->admin_password);
        $admin = DB::table('tbl_admin')
                ->select('*')
                ->where('admin_email', $admin_email_address)
                ->where('admin_password', $admin_password)
                ->first();
        if ($admin) {
            Session::put('admin_id', $admin->id);
            Session::put('admin_name', $admin->admin_name);
            Session::put('access_label', $admin->admin_lavel);
            return Redirect::to('/dashboard');
        } else {

            Session::put('message', 'Your email or password is invalid');
            return Redirect::to('/admin-panel');
        }
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
