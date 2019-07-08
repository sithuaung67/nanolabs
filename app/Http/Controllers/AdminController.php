<?php

namespace App\Http\Controllers;

use App\Customer;
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
    public function getCustomer(){
        $customers=Customer::all();
        return view ('admin.customers.customers')->with(['customers'=>$customers]);
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
            'password'=>'required|min:5'
        ]);

        $customer=new Customer();
        $customer->user_name=$request['name'];
        $customer->customer_name=$request['full_name'];
        $customer->birthday=$request['birthday'];
        $customer->phone=$request['phone'];
        $customer->shop=$request['shop'];
        $customer->address=$request['address'];
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
        $customer->update();
        return redirect()->back()->with('info','The selected user account have been updated.');
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
            'password'=>'required|min:5'
        ]);

        $customer=new Sale();
        $customer->user_name=$request['name'];
        $customer->sale_name=$request['full_name'];
        $customer->birthday=$request['birthday'];
        $customer->phone=$request['phone'];
        $customer->shop=$request['shop'];
        $customer->address=$request['address'];
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
        $customer->update();
        return redirect()->back()->with('info','The selected user account have been updated.');
    }
}
