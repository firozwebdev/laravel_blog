<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
//use App\Http\Requests;
use DB;
use Session;
session_start();
class AdminController extends Controller
{
    public function __construct() {
        $admin_id=Session::get('admin_id');
        if($admin_id != NULL)
        {
            return Redirect::to('/dashboard')->send();
        }
    }


    public function admin_login()
    {
        return view('admin.login');
    }
    public function admin_login_check(Request $request)
    {

        $admin_email_address=$request->admin_email_address;
        $admin_password=md5($request->admin_password);
       
       //echo $admin_email_address .'----------'.$admin_password;
        $result = DB::table('admin')
                ->where('admin_email_address',$admin_email_address)
                ->where('admin_password',$admin_password)
                ->first();

        if($result)
        {
            Session::put('admin_id',$result->admin_id);
            Session::put('admin_name',$result->admin_name);
            return Redirect::to('/dashboard');
        }
        else{
            
            Session::put('exception','User Id Or Password Invalide !');
            return Redirect::to('/admin-login');
        }
    }
    
    
}
