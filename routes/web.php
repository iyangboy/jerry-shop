<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
/*
Route::get('/', function () {
    return view('welcome');
});
*/

//Route::get('/', 'PagesController@root')->name('root');
Route::redirect('/', '/products')->name('root');
Route::get('products', 'ProductsController@index')->name('products.index');

Auth::routes(['verify' => true]);

// auth 中间件代表需要登录，verified中间件代表需要经过邮箱验证
Route::group(['middleware' => ['auth', 'verified']], function() {
    // 用户地址
    Route::get('user_addresses', 'UserAddressesController@index')->name('user_addresses.index');
    Route::get('user_addresses/create', 'UserAddressesController@create')->name('user_addresses.create');
    Route::post('user_addresses', 'UserAddressesController@store')->name('user_addresses.store');
    Route::get('user_addresses/{user_address}', 'UserAddressesController@edit')->name('user_addresses.edit');
    Route::put('user_addresses/{user_address}', 'UserAddressesController@update')->name('user_addresses.update');
    Route::delete('user_addresses/{user_address}', 'UserAddressesController@destroy')->name('user_addresses.destroy');

    // 添加收藏
    Route::post('products/{product}/favorite', 'ProductsController@favor')->name('products.favor');
    // 取消收藏
    Route::delete('products/{product}/favorite', 'ProductsController@disfavor')->name('products.disfavor');
    // 收藏列表
    Route::get('products/favorites', 'ProductsController@favorites')->name('products.favorites');

    // 查看购物车
    Route::get('cart', 'CartController@index')->name('cart.index');
    // 添加到购物车
    Route::post('cart', 'CartController@add')->name('cart.add');
    // 移出购物车
    Route::delete('cart/{sku}', 'CartController@remove')->name('cart.remove');

    // 个人订单列表
    Route::get('orders', 'OrdersController@index')->name('orders.index');
    // 创建订单
    Route::post('orders', 'OrdersController@store')->name('orders.store');

});
// 产品详情
Route::get('products/{product}', 'ProductsController@show')->name('products.show');
