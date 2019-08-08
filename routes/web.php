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



Route::get('/login',[
    'uses'=>'AuthController@getLogin',
    'as'=>'login'
]);

Route::post('/login',[
    'uses'=>'AuthController@postLogin',
    'as'=>'login'
]);



Route::group(['middleware'=>'auth'], function (){

    Route::get('/', function (){
        return redirect()->route('invoices');
    });


    Route::group(['prefix'=>'user'], function (){

        Route::get('/account/setting',[
            'uses'=>'AdminController@getUserAccountSetting',
            'as'=>'account.setting'
        ]);
        Route::post('/password/update/user',[
            'uses'=>'AdminController@postUpdatePassword',
            'as'=>'password.update'
        ]);
        Route::post('/password/update/customer',[
            'uses'=>'AdminController@postUpdateCustomerPassword',
            'as'=>'password.update.customer'
        ]);
        Route::get('/dashboard',[
            'uses'=>'AdminController@getDashboard',
            'as'=>'dashboard'
        ]);

        Route::get('/logout',[
            'uses'=>'AuthController@getLogout',
            'as'=>'logout'
        ]);
        Route::get('/error',[
            'uses'=>'AdminController@getError',
            'as'=>'error'
        ]);
    });




    Route::group(['prefix'=>'admin', ], function (){


        Route::get('/leaderboard', 'DataController@leaderboard');

        //user
        Route::get('/users',[
            'uses'=>'AdminController@getUsers',
            'as'=>'users'
        ]);
        Route::get('/user/new',[
            'uses'=>'AdminController@getNewUser',
            'as'=>'user.new'
        ]);
        Route::post('/user/new',[
            'uses'=>'AdminController@postNewUser',
            'as'=>'user.new'
        ]);
        Route::post('/user/delete',[
            'uses'=>'AdminController@postDeleteUser',
            'as'=>'user.delete'
        ]);
        Route::post('/user/update',[
            'uses'=>'AdminController@postUpdateUser',
            'as'=>'user.update'
        ]);

        //customer
        Route::get('/customerInfo',[
            'uses'=>'AdminController@getCustomerInfo',
            'as'=>'get.customerInfo'
        ]);
        Route::get('/customerInvoiceInfo',[
            'uses'=>'AdminController@getCustomerInvoiceInfo',
            'as'=>'get.customerInvoiceInfo'
        ]);
        Route::get('/customerOrderInfo',[
            'uses'=>'AdminController@getCustomerOrderInfo',
            'as'=>'get.customerOrderInfo'
        ]);
        Route::get('/customers',[
            'uses'=>'AdminController@getCustomer',
            'as'=>'customers'
        ]);
        Route::get('/customers/InvoiceHistory',[
            'uses'=>'AdminController@getCustomerInvoiceHistory',
            'as'=>'customers.invoice.history'
        ]);
        Route::get('/customers/OrderHistory',[
            'uses'=>'AdminController@getCustomerOrderHistory',
            'as'=>'customers.order.history'
        ]);
        Route::get('/customer/new',[
            'uses'=>'AdminController@getNewCustomer',
            'as'=>'customer.new'
        ]);
        Route::post('/customer/new',[
            'uses'=>'AdminController@postNewCustomer',
            'as'=>'post.customer.new'
        ]);
        Route::post('/customer/delete',[
            'uses'=>'AdminController@postDeleteCustomer',
            'as'=>'customer.delete'
        ]);
        Route::post('/customer/update',[
            'uses'=>'AdminController@postUpdateCustomer',
            'as'=>'customer.update'
        ]);
        Route::get('/search/customer',[
            'uses'=>'AdminController@getSearchCustomer',
            'as'=>'search.customer'
        ]);


        //sale
        Route::get('/sales',[
            'uses'=>'AdminController@getSale',
            'as'=>'sales'
        ]);
        Route::get('/sale/new',[
            'uses'=>'AdminController@getNewSale',
            'as'=>'sale.new'
        ]);
        Route::post('/sale/new',[
            'uses'=>'AdminController@postNewSale',
            'as'=>'post.sale.new'
        ]);
        Route::post('/sale/delete',[
            'uses'=>'AdminController@postDeleteSale',
            'as'=>'sale.delete'
        ]);
        Route::post('/sale/update',[
            'uses'=>'AdminController@postUpdateSale',
            'as'=>'sale.update'
        ]);
        Route::get('/saleInfo',[
            'uses'=>'AdminController@getSaleInfo',
            'as'=>'get.saleInfo'
        ]);
        Route::get('/saleInvoiceInfo',[
            'uses'=>'AdminController@getSaleInvoiceInfo',
            'as'=>'get.saleInvoiceInfo'
        ]);
        Route::get('/saleOrderInfo',[
            'uses'=>'AdminController@getSaleOrderInfo',
            'as'=>'get.saleOrderInfo'
        ]);
        Route::get('/sales/InvoiceHistory',[
            'uses'=>'AdminController@getSaleInvoiceHistory',
            'as'=>'sales.invoice.history'
        ]);
        Route::get('/sales/OrderHistory',[
            'uses'=>'AdminController@getSaleOrderHistory',
            'as'=>'sales.order.history'
        ]);
        Route::get('/search/sale',[
            'uses'=>'AdminController@getSearchSale',
            'as'=>'search.sale'
        ]);


        //invoice
        Route::get('invoice',[
           'uses'=>'AdminController@getInvoice',
           'as'=>'invoices'
        ]);
        Route::get('/invoice/new',[
            'uses'=>'AdminController@getNewInvoice',
            'as'=>'get.newInvoice'
        ]);
        Route::get('invoice/print',[
            'uses'=>'AdminController@getInvoicePrint',
            'as'=>'print.Invoice'
        ]);
        Route::post('/invoice/new',[
           'uses'=>'AdminController@postNewInvoice',
           'as'=>'post.invoice.new'
        ]);
        Route::post('/invoice/delete',[
            'uses'=>'AdminController@postDeleteInvoice',
            'as'=>'invoice.delete'
        ]);
        Route::post('/invoice/update',[
            'uses'=>'AdminController@postUpdateInvoice',
            'as'=>'invoice.update'
        ]);
        Route::get('/search/invoice',[
            'uses'=>'AdminController@getSearchInvoice',
            'as'=>'search.invoice'
        ]);


        //order
        Route::get('/search/order',[
            'uses'=>'AdminController@getSearchOrder',
            'as'=>'search.order'
        ]);
        Route::get('order',[
           'uses'=>'AdminController@getOrder',
           'as'=>'orders'
        ]);
        Route::get('/order/new',[
            'uses'=>'AdminController@getNewOrder',
            'as'=>'get.newOrder'
        ]);
        Route::get('order/print',[
            'uses'=>'AdminController@getOrderPrint',
            'as'=>'print.Order'
        ]);
        Route::post('/order/new',[
           'uses'=>'AdminController@postNewOrder',
           'as'=>'post.order.new'
        ]);
        Route::post('/order/delete',[
            'uses'=>'AdminController@postDeleteOrder',
            'as'=>'order.delete'
        ]);
        Route::post('/order/update',[
            'uses'=>'AdminController@postUpdateOrder',
            'as'=>'order.update'
        ]);
        //Customer Ranks
        Route::get('ranks',[
            'uses'=>'AdminController@getRank',
            'as'=>'ranks'
        ]);
        //Report
        Route::get('report',[
            'uses'=>'AdminController@getReport',
            'as'=>'reports'
        ]);

        //For Notification
        Route::get('notification',[
           'uses'=>'AdminController@getNoti',
           'as'=>'getNotification'
        ]);
        Route::post('notification',[
           'uses'=>'AdminController@postNoti',
           'as'=>'postNotification'
        ]);
        Route::get('notificationOne',[
           'uses'=>'AdminController@getNotiOne',
           'as'=>'getNotificationOne'
        ]);
        Route::post('notificationOne',[
           'uses'=>'AdminController@postNotiOne',
           'as'=>'postNotificationOne'
        ]);


        //Dashboard
        Route::get('dashboard',[
            'uses'=>'AdminController@getDashboard',
            'as'=>'dashboard'
        ]);
        Route::get('viewSaleQrcode',[
            'uses'=>'AdminController@getSaleQrcode',
            'as'=>'get.viewSaleQrcode'
        ]);
        Route::get('viewCustomerQrcode',[
            'uses'=>'AdminController@getCustomerQrcode',
            'as'=>'get.viewCustomerQrcode'
        ]);

    });



});



