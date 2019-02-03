<?php

/*
  |--------------------------------------------------------------------------
  | Web Routes
  |--------------------------------------------------------------------------
  |
  | This file is where you may define all of the routes that are handled
  | by your application. Just tell Laravel the URIs it should respond
  | to using a Closure or controller method. Build something great!
  |
 */

//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/', 'WelcomeController@index');
Route::get('/category/{id}', 'WelcomeController@category');
Route::get('/sub_category/{id}', 'WelcomeController@sub_category');
Route::get('/product-details/{id}', 'WelcomeController@product_details');
Route::get('/cart', 'WelcomeController@cart');
Route::get('/about', 'WelcomeController@about');

Route::get('/checkout', 'CheckoutController@checkout');
Route::post('/login-customer', 'CheckoutController@login_customer');
Route::post('/save-customer', 'CheckoutController@save_customer');
Route::get('/shipping-address', 'CheckoutController@shipping_address');
Route::post('/save-shipping', 'CheckoutController@save_shipping');
Route::post('/place-order', 'CheckoutController@place_order');
Route::get('/order-successfull/{id}', 'CheckoutController@order_successfull');


Route::get('/payment', 'CheckoutController@payment');
Route::get('/login', 'WelcomeController@login');
Route::get('/compare', 'WelcomeController@compare');
Route::get('/wishlist', 'WelcomeController@wishlist');
Route::get('/blog', 'WelcomeController@blog');
Route::get('/blog-details', 'WelcomeController@blog_details');

/*
 * Start Cart
 */
Route::match(['get', 'post'], '/add-to-cart/{id}', 'CartController@add_to_cart');
Route::get('/show-cart', 'CartController@show_cart');
Route::post('/update-cart', 'CartController@update_cart');
Route::get('/delete-to-cart/{id}', 'CartController@delete_to_cart');


Route::get('/ajax-email-check/{id}', 'WelcomeController@ajax_email_check');

Route::get('/customer-logout', 'WelcomeController@logout');


/*
  |--------------------------------------------------------------------------
  | SUPER ADMIN
  |--------------------------------------------------------------------------
  |
  | This file is where you may define all of the routes that are handled
  | by your application. Just tell Laravel the URIs it should respond
  | to using a Closure or controller method. Build something great!
  |
 */
Route::get('/admin', 'AdminController@index');
Route::post('/admin-login-check', 'AdminController@admin_login_check');
Route::get('/logout', 'SuperAdminController@logout');
Route::get('/dashboard', 'SuperAdminController@index');

Route::get('/manage-category', 'SuperAdminController@category');

Route::get('/add-category', 'SuperAdminController@add_category');
Route::post('/save-category', 'SuperAdminController@save_category');
Route::get('/unpublished-category/{id}', 'SuperAdminController@unpublished_category');
Route::get('/published-category/{id}', 'SuperAdminController@published_category');
Route::get('/delete-category/{id}', 'SuperAdminController@delete_category');
Route::get('/edit-category/{id}', 'SuperAdminController@edit_category');
Route::post('/update-category', 'SuperAdminController@update_category');
Route::get('/up-category/{id}', 'SuperAdminController@up_category');
Route::get('/arcive-category', 'SuperAdminController@arcive_category');


// Route::get('/add-sub-category','SuperAdminController@add_sub_category');
// Route::post('/save-sub-category','SuperAdminController@save_sub_category');
// Route::get('/unpublished-sub-category/{id}','SuperAdminController@unpublished_sub_category');
// Route::get('/published-sub-category/{id}','SuperAdminController@published_sub_category');
// Route::get('/delete-sub-category/{id}','SuperAdminController@delete_sub_category');
// Route::get('/edit-sub-category/{id}','SuperAdminController@edit_sub_category');
// Route::post('/update-sub-category','SuperAdminController@update_sub_category');
// Route::get('/up-sub-category/{id}','SuperAdminController@up_sub_category');
// Route::get('/arcive-sub-category','SuperAdminController@arcive_sub_category');




Route::get('/add-manufacture', 'SuperAdminController@add_manufacture');
Route::post('/save-manufacture', 'SuperAdminController@save_manufacture');
Route::get('/manage-manufacture', 'SuperAdminController@manage_manufacture');
Route::get('/published-manufacture/{id}', 'SuperAdminController@published_manufacture');
Route::get('/unpublished-manufacture/{id}', 'SuperAdminController@unpublished_manufacture');
Route::get('/edit-manufacture/{id}', 'SuperAdminController@edit_manufacture');
Route::post('/update-manufacture', 'SuperAdminController@update_manufacture');
Route::get('/delete-manufacture/{id}', 'SuperAdminController@delete_manufacture');


Route::get('/manage-product', 'SuperAdminController@manage_product');
Route::get('/add-product', 'SuperAdminController@add_product');
Route::post('/save-product', 'SuperAdminController@save_product');
Route::get('/delete-product/{id}', 'SuperAdminController@delete_product');
Route::get('/unpublished-product/{id}', 'SuperAdminController@unpublished_product');
Route::get('/published-product/{id}', 'SuperAdminController@published_product');
Route::get('/edit-product/{id}', 'SuperAdminController@edit_product');
Route::post('/update-product', 'SuperAdminController@update_product');


Route::get('/manage-order', 'OrderController@manage_order');
Route::get('/view-invoice/{id}', 'OrderController@view_invoice');
Route::get('/delete-order/{id}', 'OrderController@delete_order');


