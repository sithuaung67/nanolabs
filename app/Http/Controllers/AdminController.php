<?php

namespace App\Http\Controllers;

use App\Customer;
use App\Invoice;
use App\Notification_Group;
use App\Notification_Once;
use App\Order;
use App\OrderInvoice;
use App\Rank;
use App\Sale;
use App\SaleInvoice;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Spatie\Permission\Models\Role;
use App\User;
use Auth;



class AdminController extends Controller
{
    //admin or user
    public function getUsers(){
        $users=User::all();
        $roles=Role::all();
        return view ('admin.users.users')->with(['users'=>$users])->with(['roles'=>$roles]);
    }
    public function getNewUser(){
        $roles=Role::all();
        return view ('admin.users.new-user')->with(['roles'=>$roles]);
    }
    public function postNewUser(Request $request){
        $this->validate($request,[
            'name'=>'required|unique:users',
            'full_name'=>'required',
            'role'=>'required',
            'password'=>'required|min:5'
        ]);

        $user=new User();
        $user->name=$request['name'];
        $user->full_name=$request['full_name'];
        $user->password=bcrypt($request['password']);
        $user->save();
        $user->syncRoles($request['role']);
        return redirect()->back()->with('info', 'The new user account have been created.');
    }
    public function postDeleteUser(Request $request){
        $id=$request['id'];
        $user=User::where('id', $id)->first();
        $user->delete();
        return redirect()->back()->with('info', "The selected user account have been deleted.");
    }
    public function postUpdateUser(Request $request){
        $name=$request['name'];
        $full_name=$request['full_name'];
        $id=$request['id'];
        $role=$request['role'];
        $password=$request['password'];

        $user=User::where('id', $id)->first();

        if($password){
            $user->password=bcrypt($password);
        }
        $user->name=$name;
        $user->full_name=$full_name;
        $user->update();
        $user->syncRoles($role);
        return redirect()->back()->with('info','The selected user account have been updated.');
    }
    public function getUserAccountSetting(){
        return view ('admin.users.setting');
    }
    public function postUpdatePassword(Request $request){
        $this->validate($request,[
           'new_password'=>'required',
           'new_password_again'=>'required|same:new_password'
        ]);

        $user=User::where('id', Auth::User()->id)->first();
        $user->password=bcrypt($request['new_password']);
        $user->update();
        return redirect()->back()->with('info', 'Your account password have been updated.');
    }


    public function getCustomer(){
        $customers=Customer::all();
        return view ('admin.customers.customers')->with(['customers'=>$customers]);
    }
    public function getCustomerInfo(Request $request){
        $id=$request['id'];
        $customers=Customer::where('id', $id)->first();
        return view ('admin.customers.customerinfo')->with(['customers'=>$customers]);
    }
    public function getCustomerInvoiceHistory(Request $request){
        $id=$request['id'];
        $invoice=SaleInvoice::all();
        $customers=Customer::where('id', $id)->first();
        $sale=Sale::all();
        return view ('admin.customers.invoicehistory')->with(['invoice'=>$invoice])->with(['customers'=>$customers,'sale'=>$sale]);
    }
    public function getCustomerOrderHistory(Request $request){
        $id=$request['id'];
        $invoice=OrderInvoice::all();
        $customers=Customer::where('id', $id)->first();
        $sale=Sale::all();
        return view ('admin.customers.orderhistory')->with(['invoice'=>$invoice])->with(['customers'=>$customers,'sale'=>$sale]);
    }
    public function getCustomerOrderInfo(Request $request){
        $ids=$request['id'];
        $invoice=OrderInvoice::where('id',$ids)->first();
        $customer=Customer::all();
        $sale=Sale::all();
        return view ('admin.customers.orderDetail')->with(['invoice'=>$invoice])->with(['customer'=>$customer,'sale'=>$sale]);
    }
    public function getCustomerInvoiceInfo(Request $request){
        $ids=$request['id'];
        $invoice=SaleInvoice::where('id',$ids)->first();
        $customer=Customer::all();
        $sale=Sale::all();
        return view ('admin.customers.invoiceDetail')->with(['invoice'=>$invoice])->with(['customer'=>$customer,'sale'=>$sale]);
    }
    public function getNewCustomer(){
        return view ('admin.customers.new-customer');
    }
    public function postNewCustomer(Request $request){
        $this->validate($request,[
//            'name'=>'required',
            'full_name'=>'required',
//            'birthday'=>'required',
//            'phone'=>'required',
//            'shop'=>'required',
//            'address'=>'required',
//            'town'=>'required',
//            'nrc'=>'required',
        ]);
        $full_name=$request['full_name'];

        $img_name=public_path("ntg/$full_name.png");

        $customer=new Customer();
        $customer->user_name=$request['name'];
        $customer->customer_name=$full_name;
        $customer->birthday=$request['birthday'];
        $customer->phone=$request['phone'];
        $customer->shop=$request['shop'];
        $customer->address=$request['address'];
        $customer->town=$request['town'];
        $customer->nrc=$request['nrc'];
        $customer->path=$img_name;
        $customer->save();

        QrCode::size(500)->format('png')->generate($full_name, public_path("ntg/$full_name.png"));
        return redirect()->back()->with('info', 'The new user account have been created.');
    }
    public function postDeleteCustomer(Request $request){
        $id=$request['id'];
        $user=Customer::where('id', $id)->first();
        $user->delete();
        return redirect()->back()->with('info', "The selected user account have been deleted.");
    }
    public function postUpdateCustomer(Request $request){
        $id=$request['id'];
        $name=$request['name'];
        $full_name=$request['full_name'];
        $birthday=$request['birthday'];
        $phone=$request['phone'];
        $shop=$request['shop'];
        $address=$request['address'];
        $town=$request['town'];
        $nrc=$request['nrc'];

        $customer=Customer::where('id', $id)->first();

        $customer->user_name=$name;
        $customer->customer_name=$full_name;
        $customer->birthday=$birthday;
        $customer->phone=$phone;
        $customer->shop=$shop;
        $customer->address=$address;
        $customer->town=$town;
        $customer->nrc=$nrc;
        $customer->update();
        return redirect()->back()->with('info','The selected user account have been updated.');
    }
    public function getSearchCustomer(Request $request){
        $birthday=$request['birthday'];
        $shop=$request['shop'];
        $user_name=$request['user_name'];
        $customer_name=$request['customer_name'];
        $phone=$request['phone'];
        $town=$request['town'];
        $nrc=$request['nrc'];
        $customers=Customer::OrderBy('id','asc')
            ->where('birthday',"LIKE","%$birthday%")
            ->where('shop' , "LIKE" , "%$shop%")
            ->where('user_name' , "LIKE" , "%$user_name%")
            ->where('customer_name' , "LIKE" , "%$customer_name%")
            ->where('phone' , "LIKE" , "%$phone%")
            ->where('town' , "LIKE" , "%$town%")
            ->where('nrc' , "LIKE" , "%$nrc%")
            ->get();
        return view('admin.customers.customers')->with(['customers'=>$customers]);
    }




//sale
    public function getSale(){
        $sale=Sale::all();
        return view ('admin.sales.sale')->with(['sale'=>$sale]);
    }
    public function getNewSale(){
        return view ('admin.sales.new-sale');
    }
    public function postNewSale(Request $request){
        $this->validate($request,[
            'name'=>'required',
            'full_name'=>'required',
            'birthday'=>'required',
            'phone'=>'required',
            'address'=>'required',
            'town'=>'required',
        ]);

        $customer=new Sale();
        $customer->user_name=$request['name'];
        $customer->sale_name=$request['full_name'];
        $customer->birthday=$request['birthday'];
        $customer->phone=$request['phone'];
        $customer->address=$request['address'];
        $customer->town=$request['town'];
        $customer->save();
        return redirect()->back()->with('info', 'The new user account have been created.');
    }
    public function postDeleteSale(Request $request){
        $id=$request['id'];
        $user=Sale::where('id', $id)->first();
        $user->delete();
        return redirect()->back()->with('info', "The selected user account have been deleted.");
    }
    public function postUpdateSale(Request $request){
        $id=$request['id'];
        $name=$request['name'];
        $full_name=$request['full_name'];
        $birthday=$request['birthday'];
        $phone=$request['phone'];
        $address=$request['address'];
        $town=$request['town'];

        $customer=Sale::where('id', $id)->first();

        $customer->user_name=$name;
        $customer->sale_name=$full_name;
        $customer->birthday=$birthday;
        $customer->phone=$phone;
        $customer->address=$address;
        $customer->town=$town;
        $customer->update();
        return redirect()->back()->with('info','The selected user account have been updated.');
    }
    public function getSaleInfo(Request $request){
        $id=$request['id'];
        $sale=Sale::where('id', $id)->first();
        return view ('admin.sales.saleInfo')->with(['sale'=>$sale]);
    }
    public function getSaleInvoiceHistory(Request $request){
        $id=$request['id'];
        $invoice=SaleInvoice::all();
        $sale=Sale::where('id', $id)->first();
        $customers=Customer::all();
        return view ('admin.sales.saleHistory')->with(['invoice'=>$invoice])->with(['customers'=>$customers,'sale'=>$sale]);
    }
    public function getSaleOrderHistory(Request $request){
        $id=$request['id'];
        $invoice=OrderInvoice::all();
        $sale=Sale::where('id', $id)->first();
        $customers=Customer::all();
        return view ('admin.sales.saleOrderHistory')->with(['invoice'=>$invoice])->with(['customers'=>$customers,'sale'=>$sale]);
    }
    public function getSaleInvoiceInfo(Request $request){
        $ids=$request['id'];
        $invoice=SaleInvoice::where('id',$ids)->first();
        $customer=Customer::all();
        $sale=Sale::all();
        return view ('admin.sales.saleDetail')->with(['invoice'=>$invoice])->with(['customer'=>$customer,'sale'=>$sale]);
    }
    public function getSaleOrderInfo(Request $request){
        $ids=$request['id'];
        $invoice=OrderInvoice::where('id',$ids)->first();
        $customer=Customer::all();
        $sale=Sale::all();
        return view ('admin.sales.saleOrderDetail')->with(['invoice'=>$invoice])->with(['customer'=>$customer,'sale'=>$sale]);
    }
    public function getSearchSale(Request $request){
        $birthday=$request['birthday'];
        $user_name=$request['user_name'];
        $sale_name=$request['sale_name'];
        $phone=$request['phone'];
        $town=$request['town'];
        $sale=Sale::OrderBy('id','asc')
            ->where('birthday',"LIKE","%$birthday%")
            ->where('user_name' , "LIKE" , "%$user_name%")
            ->where('sale_name' , "LIKE" , "%$sale_name%")
            ->where('phone' , "LIKE" , "%$phone%")
            ->where('town' , "LIKE" , "%$town%")
            ->get();
        return view('admin.sales.sale')->with(['sale'=>$sale]);
    }




    //Invoice
    public function getInvoice()
    {
        $customers=Customer::all();
        $sale=Sale::all();
        $invoice = SaleInvoice::all();
        return view('admin.Invoice.invoices')->with(['invoice' => $invoice,'customers'=>$customers,'sale'=>$sale]);
    }
    public function getInvoicePrint()
    {
        $customers=Customer::all();
        $sale=Sale::all();
        $invoice = SaleInvoice::orderBy('id')->paginate('6');
        return view('admin.Invoice.invoicePrint')->with(['invoice' => $invoice,'customers'=>$customers,'sale'=>$sale]);
    }
    public function getNewInvoice(){
        $sale=Sale::all();
        $customer=Customer::all();
        return view ('admin.Invoice.new-invoice')->with(['customer'=>$customer])->with(['sale'=>$sale]);
    }

    public function postNewInvoice(Request $request)
    {
//        $this->validate($request,[
//            'customer_name'=>'required',
//            'sale_name'=>'required',
//            'date'=>'required',
//            'invoice_number'=>'required',
//            'quantity'=>'required',
//            'shop'=>'required',
//            'select_point'=>'required',
//            'point'=>'required',
//            'kyat'=>'required',
//            'pal'=>'required',
//            'ywaw'=>'required',
//            'gram'=>'required',
//            'coupon'=>'required',
//        ]);

        $invoice=new SaleInvoice();
        $invoice->sale_user_name=$request['sale_user_name'];
        $invoice->voucher_number=$request['voucher_number'];
        $invoice->order_date=$request['order_date'];
        $invoice->qty=$request['qty'];
        $invoice->point_eight=$request['point_eight'];
        $invoice->total_point=$request['total_point'];
        $invoice->kyat=$request['kyat'];
        $invoice->pal=$request['pal'];
        $invoice->yae=$request['yae'];
        $invoice->gram=$request['gram'];
        $invoice->cupon_code=$request['cupon_code'];

        $invoice->customer_id=$request['customer_id'];
        $invoice->ring=$request['ring'];
        $invoice->ring_number=$request['ring_number'];
        $invoice->ring_point_eight=$request['ring_point_eight'];
        $invoice->ring_kyat=$request['ring_kyat'];
        $invoice->ring_pal=$request['ring_pal'];
        $invoice->ring_yae=$request['ring_yae'];
        $invoice->bangles=$request['bangles'];
        $invoice->bangles_number=$request['bangles_number'];
        $invoice->bangles_point_eight=$request['bangles_point_eight'];
        $invoice->bangles_kyat=$request['bangles_kyat'];
        $invoice->bangles_pal=$request['bangles_pal'];
        $invoice->bangles_yae=$request['bangles_yae'];
        $invoice->necklace=$request['necklace'];
        $invoice->necklace_number=$request['necklace_number'];
        $invoice->necklace_point_eight=$request['necklace_point_eight'];
        $invoice->necklace_kyat=$request['necklace_kyat'];
        $invoice->necklace_pal=$request['necklace_pal'];
        $invoice->necklace_yae=$request['necklace_yae'];
        $invoice->earring=$request['earring'];
        $invoice->earring_number=$request['earring_number'];
        $invoice->earring_point_eight=$request['earring_point_eight'];
        $invoice->earring_kyat=$request['earring_kyat'];
        $invoice->earring_pal=$request['earring_pal'];
        $invoice->earring_yae=$request['earring_yae'];
        $invoice->Save();

        return redirect()->back()->with('info','The new user account have been created.');
    }
    public function postUpdateInvoice(Request $request){
        $id=$request['id'];
        $sale_user_name=$request['sale_user_name'];
        $voucher_number=$request['voucher_number'];
        $order_date=$request['order_date'];
        $qty=$request['qty'];
        $point_eight=$request['point_eight'];
        $total_point=$request['total_point'];
        $kyat=$request['kyat'];
        $pal=$request['pal'];
        $yae=$request['yae'];
        $gram=$request['gram'];
        $cupon_code=$request['cupon_code'];
        $customer_id=$request['customer_id'];
        $ring=$request['ring'];
        $ring_number=$request['ring_number'];
        $ring_point_eight=$request['ring_point_eight'];
        $ring_kyat=$request['ring_kyat'];
        $ring_pal=$request['ring_pal'];
        $ring_yae=$request['ring_yae'];
        $bangles=$request['bangles'];
        $bangles_number=$request['bangles_number'];
        $bangles_point_eight=$request['bangles_point_eight'];
        $bangles_kyat=$request['bangles_kyat'];
        $bangles_pal=$request['bangles_pal'];
        $bangles_yae=$request['bangles_yae'];
        $necklace=$request['necklace'];
        $necklace_number=$request['necklace_number'];
        $necklace_point_eight=$request['necklace_point_eight'];
        $necklace_kyat=$request['necklace_kyat'];
        $necklace_pal=$request['necklace_pal'];
        $necklace_yae=$request['necklace_yae'];
        $earring=$request['earring'];
        $earring_number=$request['earring_number'];
        $earring_point_eight=$request['earring_point_eight'];
        $earring_kyat=$request['earring_kyat'];
        $earring_pal=$request['earring_pal'];
        $earring_yae=$request['earring_yae'];

        $invoice=SaleInvoice::where('id', $id)->first();
        $invoice->sale_user_name=$sale_user_name;
        $invoice->voucher_number=$voucher_number;
        $invoice->order_date=$order_date;
        $invoice->qty=$qty;
        $invoice->point_eight=$point_eight;
        $invoice->total_point=$total_point;
        $invoice->kyat=$kyat;
        $invoice->pal=$pal;
        $invoice->yae=$yae;
        $invoice->gram=$gram;
        $invoice->cupon_code=$cupon_code;
        $invoice->customer_id=$customer_id;
        $invoice->ring=$ring;
        $invoice->ring_number=$ring_number;
        $invoice->ring_point_eight=$ring_point_eight;
        $invoice->ring_kyat=$ring_kyat;
        $invoice->ring_pal=$ring_pal;
        $invoice->ring_yae=$ring_yae;
        $invoice->bangles=$bangles;
        $invoice->bangles_number=$bangles_number;
        $invoice->bangles_point_eight=$bangles_point_eight;
        $invoice->bangles_kyat=$bangles_kyat;
        $invoice->bangles_pal=$bangles_pal;
        $invoice->bangles_yae=$bangles_yae;
        $invoice->necklace=$necklace;
        $invoice->necklace_number=$necklace_number;
        $invoice->necklace_point_eight=$necklace_point_eight;
        $invoice->necklace_kyat=$necklace_kyat;
        $invoice->necklace_pal=$necklace_pal;
        $invoice->necklace_yae=$necklace_yae;
        $invoice->earring=$earring;
        $invoice->earring_number=$earring_number;
        $invoice->earring_point_eight=$earring_point_eight;
        $invoice->earring_kyat=$earring_kyat;
        $invoice->earring_pal=$earring_pal;
        $invoice->earring_yae=$earring_yae;
        $invoice->update();
        return redirect()->back()->with('info','The selected user account have been updated.');
    }
    public function postDeleteInvoice(Request $request){
        $id=$request['id'];
        $user=SaleInvoice::where('id', $id)->first();
        $user->delete();
        return redirect()->back()->with('info', "The selected user account have been deleted.");
    }
    public function getSearchInvoice(Request $request){
        $customers=Customer::all();
        $sale=Sale::all();
        $date=$request['order_date'];
        $sale_user_name=$request['sale_user_name'];
        $customer_id=$request['customer_id'];
        $invoice_number=$request['voucher_number'];
        $invoice=SaleInvoice::OrderBy('id','asc')
            ->where('order_date',"LIKE","%$date%")
            ->where('sale_user_name',"LIKE","%$sale_user_name%")
            ->where('customer_id',"LIKE","%$customer_id%")
            ->where('voucher_number' , "LIKE" , "%$invoice_number%")
            ->get();
        return view('admin.Invoice.invoices')->with(['invoice'=>$invoice,'invoice_number'=>$invoice_number,'customers'=>$customers,'sale'=>$sale]);
    }



    //order
    public function getSearchOrder(Request $request){
        $customers=Customer::all();
        $sale=Sale::all();
        $date=$request['order_date'];
        $sale_user_name=$request['sale_user_name'];
        $customer_id=$request['customer_id'];
        $invoice_number=$request['voucher_number'];
        $invoice=OrderInvoice::OrderBy('id','asc')
            ->where('order_date',"LIKE","%$date%")
            ->where('sale_user_name',"LIKE","%$sale_user_name%")
            ->where('customer_id',"LIKE","%$customer_id%")
            ->where('voucher_number' , "LIKE" , "%$invoice_number%")
            ->get();
        return view('admin.order.orders')->with(['invoice'=>$invoice,'invoice_number'=>$invoice_number,'customers'=>$customers,'sale'=>$sale]);
    }
    public function getOrder()
    {
        $customers=Customer::all();
        $sale=Sale::all();
        $invoice = OrderInvoice::all();
        return view('admin.order.orders')->with(['invoice' => $invoice,'customers'=>$customers,'sale'=>$sale]);
    }
    public function getOrderPrint()
    {
        $customers=Customer::all();
        $sale=Sale::all();
        $invoice = OrderInvoice::orderBy('id')->paginate('6');
        return view('admin.order.orderPrint')->with(['invoice' => $invoice,'customers'=>$customers,'sale'=>$sale]);
    }
    public function getNewOrder(){
        $sale=Sale::all();
        $customer=Customer::all();
        return view ('admin.order.new-order')->with(['customer'=>$customer])->with(['sale'=>$sale]);
    }

    public function postNewOrder(Request $request)
    {
//        $this->validate($request,[
//            'customer_name'=>'required',
//            'sale_name'=>'required',
//            'date'=>'required',
//            'order_number'=>'required',
//            'quantity'=>'required',
//            'shop'=>'required',
//            'select_point'=>'required',
//            'point'=>'required',
//            'kyat'=>'required',
//            'pae'=>'required',
//            'yway'=>'required',
//            'gram'=>'required',
//            'coupon'=>'required',
//        ]);
//
//        $invoice=new Order();
//        $invoice->customer_name=$request['customer_name'];
//        $invoice->sale_name=$request['sale_name'];
//        $invoice->date=$request['date'];
//        $invoice->order_number=$request['order_number'];
//        $invoice->shop=$request['shop'];
//        $invoice->quantity=$request['quantity'];
//        $invoice->select_point=$request['select_point'];
//        $invoice->point=$request['point'];
//        $invoice->kyat=$request['kyat'];
//        $invoice->pae=$request['pae'];
//        $invoice->yway=$request['yway'];
//        $invoice->gram=$request['gram'];
//        $invoice->coupon=$request['coupon'];
//        $invoice->Save();



        $invoice=new OrderInvoice();
        $invoice->sale_user_name=$request['sale_user_name'];
        $invoice->voucher_number=$request['voucher_number'];
        $invoice->order_date=$request['order_date'];
        $invoice->qty=$request['qty'];
        $invoice->point_eight=$request['point_eight'];
        $invoice->kyat=$request['kyat'];
        $invoice->pal=$request['pal'];
        $invoice->yae=$request['yae'];
        $invoice->gram=$request['gram'];
        $invoice->cupon_code=$request['cupon_code'];

        $invoice->customer_id=$request['customer_id'];
        $invoice->ring=$request['ring'];
        $invoice->ring_number=$request['ring_number'];
        $invoice->ring_point_eight=$request['ring_point_eight'];
        $invoice->ring_kyat=$request['ring_kyat'];
        $invoice->ring_pal=$request['ring_pal'];
        $invoice->ring_yae=$request['ring_yae'];
        $invoice->bangles=$request['bangles'];
        $invoice->bangles_number=$request['bangles_number'];
        $invoice->bangles_point_eight=$request['bangles_point_eight'];
        $invoice->bangles_kyat=$request['bangles_kyat'];
        $invoice->bangles_pal=$request['bangles_pal'];
        $invoice->bangles_yae=$request['bangles_yae'];
        $invoice->necklace=$request['necklace'];
        $invoice->necklace_number=$request['necklace_number'];
        $invoice->necklace_point_eight=$request['necklace_point_eight'];
        $invoice->necklace_kyat=$request['necklace_kyat'];
        $invoice->necklace_pal=$request['necklace_pal'];
        $invoice->necklace_yae=$request['necklace_yae'];
        $invoice->earring=$request['earring'];
        $invoice->earring_number=$request['earring_number'];
        $invoice->earring_point_eight=$request['earring_point_eight'];
        $invoice->earring_kyat=$request['earring_kyat'];
        $invoice->earring_pal=$request['earring_pal'];
        $invoice->earring_yae=$request['earring_yae'];
        $invoice->Save();

        return redirect()->back()->with('info','The new user account have been created.');
    }
    public function postUpdateOrder(Request $request){
        $id=$request['id'];
        $sale_user_name=$request['sale_user_name'];
        $voucher_number=$request['voucher_number'];
        $order_date=$request['order_date'];
        $qty=$request['qty'];
        $point_eight=$request['point_eight'];
        $kyat=$request['kyat'];
        $pal=$request['pal'];
        $yae=$request['yae'];
        $gram=$request['gram'];
        $cupon_code=$request['cupon_code'];
        $customer_id=$request['customer_id'];
        $ring=$request['ring'];
        $ring_number=$request['ring_number'];
        $ring_point_eight=$request['ring_point_eight'];
        $ring_kyat=$request['ring_kyat'];
        $ring_pal=$request['ring_pal'];
        $ring_yae=$request['ring_yae'];
        $bangles=$request['bangles'];
        $bangles_number=$request['bangles_number'];
        $bangles_point_eight=$request['bangles_point_eight'];
        $bangles_kyat=$request['bangles_kyat'];
        $bangles_pal=$request['bangles_pal'];
        $bangles_yae=$request['bangles_yae'];
        $necklace=$request['necklace'];
        $necklace_number=$request['necklace_number'];
        $necklace_point_eight=$request['necklace_point_eight'];
        $necklace_kyat=$request['necklace_kyat'];
        $necklace_pal=$request['necklace_pal'];
        $necklace_yae=$request['necklace_yae'];
        $earring=$request['earring'];
        $earring_number=$request['earring_number'];
        $earring_point_eight=$request['earring_point_eight'];
        $earring_kyat=$request['earring_kyat'];
        $earring_pal=$request['earring_pal'];
        $earring_yae=$request['earring_yae'];


        $invoice=OrderInvoice::where('id', $id)->first();
        $invoice->sale_user_name=$sale_user_name;
        $invoice->voucher_number=$voucher_number;
        $invoice->order_date=$order_date;
        $invoice->qty=$qty;
        $invoice->point_eight=$point_eight;
        $invoice->kyat=$kyat;
        $invoice->pal=$pal;
        $invoice->yae=$yae;
        $invoice->gram=$gram;
        $invoice->cupon_code=$cupon_code;
        $invoice->customer_id=$customer_id;
        $invoice->ring=$ring;
        $invoice->ring_number=$ring_number;
        $invoice->ring_point_eight=$ring_point_eight;
        $invoice->ring_kyat=$ring_kyat;
        $invoice->ring_pal=$ring_pal;
        $invoice->ring_yae=$ring_yae;
        $invoice->bangles=$bangles;
        $invoice->bangles_number=$bangles_number;
        $invoice->bangles_point_eight=$bangles_point_eight;
        $invoice->bangles_kyat=$bangles_kyat;
        $invoice->bangles_pal=$bangles_pal;
        $invoice->bangles_yae=$bangles_yae;
        $invoice->necklace=$necklace;
        $invoice->necklace_number=$necklace_number;
        $invoice->necklace_point_eight=$necklace_point_eight;
        $invoice->necklace_kyat=$necklace_kyat;
        $invoice->necklace_pal=$necklace_pal;
        $invoice->necklace_yae=$necklace_yae;
        $invoice->earring=$earring;
        $invoice->earring_number=$earring_number;
        $invoice->earring_point_eight=$earring_point_eight;
        $invoice->earring_kyat=$earring_kyat;
        $invoice->earring_pal=$earring_pal;
        $invoice->earring_yae=$earring_yae;
        $invoice->update();
        return redirect()->back()->with('info','The selected user account have been updated.');
    }
    public function postDeleteOrder(Request $request){
        $id=$request['id'];
        $user=OrderInvoice::where('id', $id)->first();
        $user->delete();
        return redirect()->back()->with('info', "The selected user account have been deleted.");
    }

    public function getDashboard()
    {
        $invoice=Invoice::all();
        return view('admin.Dashboard.dashboard')->with(['invoice'=>$invoice]);
    }
    public function getCustomerQrcode(Request $request)
        {
            $id=$request['id'];
            $customer=Customer::where('id',$id)->first();
            return view('admin.Qrcode.viewCustomerQrcode')->with(['customer'=>$customer]);
        }
    public function getSaleQrcode(Request $request)
            {
                $id=$request['id'];
                $sale=Sale::where('id',$id)->first();
                return view('admin.Qrcode.viewSaleQrcode')->with(['sale'=>$sale]);
            }

    public function getRank()
    {
        $ranks=DB::select("SELECT * FROM scores ORDER BY 'score' DESC ");
        $sql6=DB::select("SELECT name,score, FIND_IN_SET( score, (
                          SELECT GROUP_CONCAT( DISTINCT score
                          ORDER BY score DESC ) FROM scores)
                          ) AS rank
                          FROM scores");
        $customer=OrderInvoice::all();
        $name=Customer::all();
        return view('admin.rank.rank')->with(['customer'=>$customer,'name'=>$name,'ranks'=>$ranks,'sql6'=>$sql6]);
    }
    public function getReport()
    {
        $sql6=DB::select("SELECT sale_name,point, FIND_IN_SET( point, (
                          SELECT GROUP_CONCAT( DISTINCT point
                          ORDER BY point DESC ) FROM reports)
                          ) AS rank
                          FROM reports");
       $invoice=SaleInvoice::all();
       $customer=Customer::all();
        return view('admin.Report.report')->with(['invoice'=>$invoice,'customer'=>$customer,'sql6'=>$sql6]);
    }
    public function getNoti(){
        $customers=Customer::all();
        return view('admin.Noti.notification')->with(['customers'=>$customers]);
    }
    public function postNoti(Request $request)
    {
        $noti_group = new Notification_Group();
        $noti_group->title = $request['title'];
        $noti_group->noti_date = $request['noti_date'];
        $noti_group->noti_group = $request['noti'];
        $noti_group->save();
        return redirect()->back()->with(['info' => 'You post notification successfully']);
    }

     public function getNotiOne(){
        $customer=Customer::all();
        return view('admin.Noti.notification_one')->with(['customer'=>$customer]);
    }
    public function postNotiOne(Request $request){
        $noti_group=new Notification_Once();
        $noti_group->title=$request['title'];
        $noti_group->noti_date=$request['noti_date'];
        $noti_group->customer_id=$request['customer_id'];
        $noti_group->noti_one=$request['noti'];
        $noti_group->save();
        return redirect()->back()->with(['info'=>'You post notification successfully']);
    }
}
