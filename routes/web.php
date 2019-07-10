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
        return redirect()->route('showData');
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


        Route::get('/customerInfo',[
            'uses'=>'AdminController@getCustomerInfo',
            'as'=>'get.customerInfo'
        ]);
        Route::get('/customerInvoiceInfo',[
            'uses'=>'AdminController@getCustomerInvoiceInfo',
            'as'=>'get.customerInvoiceInfo'
        ]);
        Route::get('/customers',[
            'uses'=>'AdminController@getCustomer',
            'as'=>'customers'
        ]);
        Route::get('/customers/InvoiceHistory',[
            'uses'=>'AdminController@getCustomerInvoiceHistory',
            'as'=>'customers.invoice.history'
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
        Route::get('invoice',[
           'uses'=>'AdminController@getInvoice',
           'as'=>'invoices'
        ]);
        Route::get('/invoice/new',[
            'uses'=>'AdminController@getNewInvoice',
            'as'=>'get.newInvoice'
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



        Route::get('data',[
           'uses'=>'DataController@getData',
           'as'=>'data'
        ]);
        Route::get('showData',[
            'uses'=>'DataController@getShowData',
            'as'=>'showData'
        ]);
        Route::post('postData',[
           'uses'=>'DataController@postData',
           'as'=>'postData'
        ]);
        Route::post('/data/delete',[
            'uses'=>'DataController@postDeleteData',
            'as'=>'data.delete'
        ]);

        Route::post('/data/update',[
            'uses'=>'DataController@postUpdateData',
            'as'=>'data.update'
        ]);
        Route::get('/search/department',[
            'uses'=>'DataController@getSearchDepartment',
            'as'=>'search.data'
        ]);
        Route::get('/search/date',[
            'uses'=>'DataController@getSearchDate',
            'as'=>'search.date'
        ]);
        Route::post('/data/update',[
            'uses'=>'DataController@postUpdateData',
            'as'=>'update.data'
        ]);
        Route::get('/view',[
           'uses'=>'DataController@getViewData',
           'as'=>'view.data'
        ]);
        Route::get('/back',[
            'uses'=>'DataController@getBack',
            'as'=>'back'
        ]);
        Route::get('/search/data',[
            'uses'=>'DataController@getSearchAll',
            'as'=>'search.all'
        ]);

    });



});



