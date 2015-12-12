<?php

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where all API routes are defined.
|
*/





Route::resource("units", "UnitAPIController");

Route::resource("formPayments", "FormPaymentAPIController");

Route::resource("stateBills", "StateBillAPIController");

Route::resource("billDetails", "BillDetailAPIController");

Route::resource("bills", "BillAPIController");

Route::resource("bills", "BillAPIController");

Route::resource("billDetails", "BillDetailAPIController");

Route::resource("kardexes", "KardexAPIController");

Route::resource("locations", "LocationAPIController");

Route::resource("locationProducts", "LocationProductAPIController");

Route::resource("categories", "CategoryAPIController");

Route::resource("products", "ProductAPIController");

Route::resource("productCosts", "ProductCostAPIController");

Route::resource("brands", "BrandAPIController");

Route::resource("ruleSales", "RuleSaleAPIController");

Route::resource("productDetails", "ProductDetailAPIController");

Route::resource("purchaseOrders", "PurchaseOrderAPIController");

Route::resource("purchaseOrderDetails", "PurchaseOrderDetailAPIController");

Route::resource("taxes", "TaxAPIController");

Route::resource("taxBills", "TaxBillAPIController");