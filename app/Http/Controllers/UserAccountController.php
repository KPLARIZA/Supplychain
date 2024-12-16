<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserAccount;

class UserAccountController extends Controller
{
    public function index(){
        $useraccounts = UserAccount::orderBy('id', 'desc')->get();
        $total =UserAccount::count();
        return view ('admin.userAccount.home', compact(['useraccounts', 'total']));
        
    }
    public function edit($id){
        $useraccounts = UserAccount::findOrFail($id);
        return view ('admin.userAccount.update', compact('useraccounts'));

    }
    public function delete ($id){
        $useraccounts = UserAccount::findOrFail($id);
        if($useraccounts){
            session()->flash ('success', 'Account deleted Successfully');
            return redirect (route ('admin/userAccount'));      

        } else {
            session ()->flash ('error', 'Failed!!');
            return redirect (route ('admin/userAccount/'));
        }
    }
    
    public function create (){
        return view ('admin.userAccount.create');
        
    }
    public function save(Request $request){
        $validation = $request->validate([
            'name' => 'required',
            'address' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'password' => 'required',
            'AccountType' => 'required',
    
        ]);
        $data = userAccount::create ($validation);
        if($data){
            session ()->flash ('success', 'Account added Successfully');
            return redirect(route ('admin/userAccount'));
        
        }else{
            session()->flash('error', 'Some problem occure');
            return redirection(route ('admin.userAccount/create'));
        }
    }

    public function update(Request $request, $id){
    $userAccount = UserAccount::findOrFail($id);
    $name = $request->name;
    $address = $request->address;
    $phone = $request->phone;
    $email = $request->email;
    $password = $request->password;
    $AccountType = $request->AccountType;

    $userAccount->name= $name;
    $userAccount->address= $address;
    $userAccount->phone= $phone;
    $userAccount->email= $email ;
    $userAccount->password= $password ;
    $userAccount->AccountType= $AccountType ;
    $data = $userAccount->save();

    if ($data){
        session()->flash('success', 'Account updated Succesfully');
        return redirect(route ('admin/userAccount'));

    }else {
        session()->flash('error', 'Some problem occure');
        return redirect (route ('admin/userAccount/update'));

    

    }
}
}
