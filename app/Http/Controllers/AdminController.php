<?php

namespace App\Http\Controllers;

use App\Customer;
use App\Invoice;
use App\Order;
use App\Sale;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use App\User;
use Auth;



class AdminController extends Controller
{
    public function getDashboard(){
        $users=User::all();

        return view ('admin.dashboard.index')->with(['users'=>$users]);
    }
    public function getError(){
        return view ('admin.dashboard.error');
    }
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
    public function postUpdateCustomerPassword(Request $request){
//            $this->validate($request,[
//               'new_password'=>'required',
//               'new_password_again'=>'required|same:new_password'
//            ]);
            $id=$request['id'];
            $password=$request['password'];
            $customer=Customer::where('id', $id)->first();
        if($password){
            $customer->password=bcrypt($password);
        }
            $customer->update();
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
        $invoice=Invoice::all();
        $customer=Customer::where('id', $id)->first();
        $sale=Sale::all();
        return view ('admin.customers.invoicehistory')->with(['invoice'=>$invoice])->with(['customer'=>$customer,'sale'=>$sale]);
    }
    public function getCustomerInvoiceInfo(Request $request){
        $ids=$request['id'];
        $invoice=Invoice::where('id',$ids)->first();
        $customer=Customer::all();
        $sale=Sale::all();
        return view ('admin.customers.invoiceDetail')->with(['invoice'=>$invoice])->with(['customer'=>$customer,'sale'=>$sale]);
    }
    public function getNewCustomer(){
        return view ('admin.customers.new-customer');
    }
    public function postNewCustomer(Request $request){
        $this->validate($request,[
            'name'=>'required',
            'full_name'=>'required',
            'birthday'=>'required',
            'phone'=>'required',
            'shop'=>'required',
            'address'=>'required',
            'town'=>'required',
            'password'=>'required|min:5'
        ]);

        $customer=new Customer();
        $customer->user_name=$request['name'];
        $customer->customer_name=$request['full_name'];
        $customer->birthday=$request['birthday'];
        $customer->phone=$request['phone'];
        $customer->shop=$request['shop'];
        $customer->address=$request['address'];
        $customer->town=$request['town'];
        $customer->password=bcrypt($request['password']);
        $customer->save();
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
        $password=$request['password'];

        $customer=Customer::where('id', $id)->first();

        if($password){
            $customer->password=bcrypt($password);
        }
        $customer->user_name=$name;
        $customer->customer_name=$full_name;
        $customer->birthday=$birthday;
        $customer->phone=$phone;
        $customer->shop=$shop;
        $customer->address=$address;
        $customer->town=$town;
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
        $customers=Customer::OrderBy('id','asc')
            ->where('birthday',"LIKE","%$birthday%")
            ->where('shop' , "LIKE" , "%$shop%")
            ->where('user_name' , "LIKE" , "%$user_name%")
            ->where('customer_name' , "LIKE" , "%$customer_name%")
            ->where('phone' , "LIKE" , "%$phone%")
            ->where('town' , "LIKE" , "%$town%")
            ->get();
        return view('admin.customers.customers')->with(['customers'=>$customers]);
    }





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
            'shop'=>'required',
            'address'=>'required',
            'town'=>'required',
            'password'=>'required|min:5'
        ]);

        $customer=new Sale();
        $customer->user_name=$request['name'];
        $customer->sale_name=$request['full_name'];
        $customer->birthday=$request['birthday'];
        $customer->phone=$request['phone'];
        $customer->shop=$request['shop'];
        $customer->address=$request['address'];
        $customer->town=$request['town'];
        $customer->password=bcrypt($request['password']);
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
        $shop=$request['shop'];
        $address=$request['address'];
        $town=$request['town'];
        $password=$request['password'];

        $customer=Sale::where('id', $id)->first();

        if($password){
            $customer->password=bcrypt($password);
        }
        $customer->user_name=$name;
        $customer->sale_name=$full_name;
        $customer->birthday=$birthday;
        $customer->phone=$phone;
        $customer->shop=$shop;
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
        $invoice=Invoice::all();
        $sale=Sale::where('id', $id)->first();
        $customer=Customer::all();
        return view ('admin.sales.saleHistory')->with(['invoice'=>$invoice])->with(['customer'=>$customer,'sale'=>$sale]);
    }
    public function getSaleInvoiceInfo(Request $request){
        $ids=$request['id'];
        $invoice=Invoice::where('id',$ids)->first();
        $customer=Customer::all();
        $sale=Sale::all();
        return view ('admin.sales.saleDetail')->with(['invoice'=>$invoice])->with(['customer'=>$customer,'sale'=>$sale]);
    }
    public function getSearchSale(Request $request){
        $birthday=$request['birthday'];
        $shop=$request['shop'];
        $user_name=$request['user_name'];
        $sale_name=$request['sale_name'];
        $phone=$request['phone'];
        $town=$request['town'];
        $sale=Sale::OrderBy('id','asc')
            ->where('birthday',"LIKE","%$birthday%")
            ->where('shop' , "LIKE" , "%$shop%")
            ->where('user_name' , "LIKE" , "%$user_name%")
            ->where('sale_name' , "LIKE" , "%$sale_name%")
            ->where('phone' , "LIKE" , "%$phone%")
            ->where('town' , "LIKE" , "%$town%")
            ->get();
        return view('admin.sales.sale')->with(['sale'=>$sale]);
    }






    public function getInvoice()
    {
        $customers=Customer::all();
        $sale=Sale::all();
        $invoice = Invoice::all();
        return view('admin.Invoice.invoices')->with(['invoice' => $invoice,'customers'=>$customers,'sale'=>$sale]);
    }
    public function getInvoicePrint()
    {
        $customers=Customer::all();
        $sale=Sale::all();
        $invoice = Invoice::all();
        return view('admin.Invoice.invoicePrint')->with(['invoice' => $invoice,'customers'=>$customers,'sale'=>$sale]);
    }
    public function getNewInvoice(){
        $sale=Sale::all();
        $customer=Customer::all();
        return view ('admin.Invoice.new-invoice')->with(['customer'=>$customer])->with(['sale'=>$sale]);
    }

    public function postNewInvoice(Request $request)
    {
        $this->validate($request,[
            'customer_name'=>'required',
            'sale_name'=>'required',
            'date'=>'required',
            'invoice_number'=>'required',
            'quantity'=>'required',
            'shop'=>'required',
            'select_point'=>'required',
            'point'=>'required',
            'kyat'=>'required',
            'pal'=>'required',
            'ywaw'=>'required',
            'gram'=>'required',
            'coupon'=>'required',
        ]);

        $invoice=new Invoice();
        $invoice->customer_name=$request['customer_name'];
        $invoice->sale_name=$request['sale_name'];
        $invoice->date=$request['date'];
        $invoice->invoice_number=$request['invoice_number'];
        $invoice->shop=$request['shop'];
        $invoice->quantity=$request['quantity'];
        $invoice->select_point=$request['select_point'];
        $invoice->point=$request['point'];
        $invoice->kyat=$request['kyat'];
        $invoice->pal=$request['pal'];
        $invoice->ywaw=$request['ywaw'];
        $invoice->gram=$request['gram'];
        $invoice->coupon=$request['coupon'];
        $invoice->Save();

        return redirect()->back()->with('info','The new user account have been created.');
    }
    public function postUpdateInvoice(Request $request){
        $id=$request['id'];
        $customer_name=$request['customer_name'];
        $sale_name=$request['sale_name'];
        $date=$request['date'];
        $invoice_number=$request['invoice_number'];
        $shop=$request['shop'];
        $quantity=$request['quantity'];
        $select_point=$request['select_point'];
        $point=$request['point'];
        $kyat=$request['kyat'];
        $pal=$request['pal'];
        $ywaw=$request['ywaw'];
        $gram=$request['gram'];
        $coupon=$request['coupon'];


        $invoice=Invoice::where('id', $id)->first();
        $invoice->customer_name=$customer_name;
        $invoice->sale_name=$sale_name;
        $invoice->date=$date;
        $invoice->invoice_number=$invoice_number;
        $invoice->shop=$shop;
        $invoice->quantity=$quantity;
        $invoice->select_point=$select_point;
        $invoice->point=$point;
        $invoice->kyat=$kyat;
        $invoice->pal=$pal;
        $invoice->ywaw=$ywaw;
        $invoice->gram=$gram;
        $invoice->coupon=$coupon;
        $invoice->update();
        return redirect()->back()->with('info','The selected user account have been updated.');
    }
    public function postDeleteInvoice(Request $request){
        $id=$request['id'];
        $user=Invoice::where('id', $id)->first();
        $user->delete();
        return redirect()->back()->with('info', "The selected user account have been deleted.");
    }
    public function getSearchInvoice(Request $request){
        $customers=Customer::all();
        $sale=Sale::all();
        $date=$request['date'];
        $shop=$request['shop'];
        $invoice_number=$request['invoice_number'];
        $invoice=Invoice::OrderBy('id','asc')
            ->where('date',"LIKE","%$date%")
            ->where('shop' , "LIKE" , "%$shop%")
            ->where('invoice_number' , "LIKE" , "%$invoice_number%")
            ->get();
        return view('admin.Invoice.invoices')->with(['invoice'=>$invoice,'invoice_number'=>$invoice_number,'customers'=>$customers,'sale'=>$sale]);
    }





    public function getSearchOrder(Request $request){
        $customers=Customer::all();
        $sale=Sale::all();
        $date=$request['date'];
        $shop=$request['shop'];
        $invoice_number=$request['order_number'];
        $invoice=Order::OrderBy('id','asc')
            ->where('date',"LIKE","%$date%")
            ->where('shop' , "LIKE" , "%$shop%")
            ->where('order_number' , "LIKE" , "%$invoice_number%")
            ->get();
        return view('admin.order.orders')->with(['invoice'=>$invoice,'invoice_number'=>$invoice_number,'customers'=>$customers,'sale'=>$sale]);
    }
    public function getOrder()
    {
        $customers=Customer::all();
        $sale=Sale::all();
        $invoice = Order::all();
        return view('admin.order.orders')->with(['invoice' => $invoice,'customers'=>$customers,'sale'=>$sale]);
    }
    public function getOrderPrint()
    {
        $customers=Customer::all();
        $sale=Sale::all();
        $invoice = Order::all();
        return view('admin.order.orderPrint')->with(['invoice' => $invoice,'customers'=>$customers,'sale'=>$sale]);
    }
    public function getNewOrder(){
        $sale=Sale::all();
        $customer=Customer::all();
        return view ('admin.order.new-order')->with(['customer'=>$customer])->with(['sale'=>$sale]);
    }

    public function postNewOrder(Request $request)
    {
        $this->validate($request,[
            'customer_name'=>'required',
            'sale_name'=>'required',
            'date'=>'required',
            'order_number'=>'required',
            'quantity'=>'required',
            'shop'=>'required',
            'select_point'=>'required',
            'point'=>'required',
            'kyat'=>'required',
            'pae'=>'required',
            'yway'=>'required',
            'gram'=>'required',
            'coupon'=>'required',
        ]);

        $invoice=new Order();
        $invoice->customer_name=$request['customer_name'];
        $invoice->sale_name=$request['sale_name'];
        $invoice->date=$request['date'];
        $invoice->order_number=$request['order_number'];
        $invoice->shop=$request['shop'];
        $invoice->quantity=$request['quantity'];
        $invoice->select_point=$request['select_point'];
        $invoice->point=$request['point'];
        $invoice->kyat=$request['kyat'];
        $invoice->pae=$request['pae'];
        $invoice->yway=$request['yway'];
        $invoice->gram=$request['gram'];
        $invoice->coupon=$request['coupon'];
        $invoice->Save();

        return redirect()->back()->with('info','The new user account have been created.');
    }
    public function postUpdateOrder(Request $request){
        $id=$request['id'];
        $customer_name=$request['customer_name'];
        $sale_name=$request['sale_name'];
        $date=$request['date'];
        $order_number=$request['order_number'];
        $shop=$request['shop'];
        $quantity=$request['quantity'];
        $select_point=$request['select_point'];
        $point=$request['point'];
        $kyat=$request['kyat'];
        $pae=$request['pae'];
        $yway=$request['yway'];
        $gram=$request['gram'];
        $coupon=$request['coupon'];


        $invoice=Order::where('id', $id)->first();
        $invoice->customer_name=$customer_name;
        $invoice->sale_name=$sale_name;
        $invoice->date=$date;
        $invoice->order_number=$order_number;
        $invoice->shop=$shop;
        $invoice->quantity=$quantity;
        $invoice->select_point=$select_point;
        $invoice->point=$point;
        $invoice->kyat=$kyat;
        $invoice->pae=$pae;
        $invoice->yway=$yway;
        $invoice->gram=$gram;
        $invoice->coupon=$coupon;
        $invoice->update();
        return redirect()->back()->with('info','The selected user account have been updated.');
    }
    public function postDeleteOrder(Request $request){
        $id=$request['id'];
        $user=Order::where('id', $id)->first();
        $user->delete();
        return redirect()->back()->with('info', "The selected user account have been deleted.");
    }
    public function getRank()
    {
        $customer=Customer::all();
        return view('admin.rank.rank')->with(['customer'=>$customer]);
    }
    public function getNoti(){
        $customers=Customer::all();
        return view('admin.Noti.notification')->with(['customers'=>$customers]);
    }
    public function postNoti(Request $request){
        $id=$request['id'];
        $customer=Customer::where('id', $id)->first();

        $customer->notification=$request['about'];

        $customer->save();
        return redirect()->back()->with(['info'=>'You post notification successfully']);
    }
}
