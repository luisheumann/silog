<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

// usage inside a laravel route
Route::get('/hola', function()
{
    $img = Image::make('images/invento.jpg')->resize(300, 200);

    return $img->response('jpg');
});



Route::resource('units', 'UnitController');

Route::get('units/{id}/delete', [
    'as' => 'units.delete',
    'uses' => 'UnitController@destroy',
]);


Route::resource('formPayments', 'FormPaymentController');

Route::get('formPayments/{id}/delete', [
    'as' => 'formPayments.delete',
    'uses' => 'FormPaymentController@destroy',
]);


Route::resource('stateBills', 'StateBillController');

Route::get('stateBills/{id}/delete', [
    'as' => 'stateBills.delete',
    'uses' => 'StateBillController@destroy',
]);


Route::resource('billDetails', 'BillDetailController');

Route::get('billDetails/{id}/delete', [
    'as' => 'billDetails.delete',
    'uses' => 'BillDetailController@destroy',
]);


Route::resource('bills', 'BillController');

Route::get('bills/{id}/delete', [
    'as' => 'bills.delete',
    'uses' => 'BillController@destroy',
]);


Route::resource('bills', 'BillController');

Route::get('bills/{id}/delete', [
    'as' => 'bills.delete',
    'uses' => 'BillController@destroy',
]);


Route::resource('billDetails', 'BillDetailController');

Route::get('billDetails/{id}/delete', [
    'as' => 'billDetails.delete',
    'uses' => 'BillDetailController@destroy',
]);


Route::resource('kardexes', 'KardexController');

Route::get('kardexes/{id}/delete', [
    'as' => 'kardexes.delete',
    'uses' => 'KardexController@destroy',
]);


Route::resource('locations', 'LocationController');

Route::get('locations/{id}/delete', [
    'as' => 'locations.delete',
    'uses' => 'LocationController@destroy',
]);


Route::resource('locationProducts', 'LocationProductController');

Route::get('locationProducts/{id}/delete', [
    'as' => 'locationProducts.delete',
    'uses' => 'LocationProductController@destroy',
]);


Route::resource('categories', 'CategoryController');

Route::get('categories/{id}/delete', [
    'as' => 'categories.delete',
    'uses' => 'CategoryController@destroy',
]);


Route::resource('products', 'ProductController');

Route::get('products/{id}/delete', [
    'as' => 'products.delete',
    'uses' => 'ProductController@destroy',
]);


Route::resource('productCosts', 'ProductCostController');

Route::get('productCosts/{id}/delete', [
    'as' => 'productCosts.delete',
    'uses' => 'ProductCostController@destroy',
]);


Route::resource('brands', 'BrandController');

Route::get('brands/{id}/delete', [
    'as' => 'brands.delete',
    'uses' => 'BrandController@destroy',
]);


Route::resource('ruleSales', 'RuleSaleController');

Route::get('ruleSales/{id}/delete', [
    'as' => 'ruleSales.delete',
    'uses' => 'RuleSaleController@destroy',
]);


Route::resource('productDetails', 'ProductDetailController');

Route::get('productDetails/{id}/delete', [
    'as' => 'productDetails.delete',
    'uses' => 'ProductDetailController@destroy',
]);


Route::resource('purchaseOrders', 'PurchaseOrderController');

Route::get('purchaseOrders/{id}/delete', [
    'as' => 'purchaseOrders.delete',
    'uses' => 'PurchaseOrderController@destroy',
]);


Route::resource('purchaseOrderDetails', 'PurchaseOrderDetailController');

Route::get('purchaseOrderDetails/{id}/delete', [
    'as' => 'purchaseOrderDetails.delete',
    'uses' => 'PurchaseOrderDetailController@destroy',
]);


Route::resource('taxes', 'TaxController');

Route::get('taxes/{id}/delete', [
    'as' => 'taxes.delete',
    'uses' => 'TaxController@destroy',
]);


Route::resource('taxBills', 'TaxBillController');

Route::get('taxBills/{id}/delete', [
    'as' => 'taxBills.delete',
    'uses' => 'TaxBillController@destroy',
]);
