<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Order;
use App\Models\Contact;
use App\Http\Requests\StoreAdminRequest;
use App\Http\Requests\UpdateAdminRequest;
use App\Models\Delivery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function addadmin(Request $request)
    {
        $admin=new Admin();

        $admin->name=$request->name;
        $admin->email=$request->email;
        $admin->username=$request->username;
        $admin->password=$request->password;
        $admin->confirmpass=$request->confirmpass;

        $admin->save();

        return "ok";


    }
    public function index()
    {
        //
        return view('admin.Home');
    }

    public function information(Request $request)
    {
        $data= Admin::where("username",$request->username)->first();

        return $data;
    }

    public function addcomment(Request $request)
    {
        $contact=new Contact();

        $contact->name= $request->name;
        
        $contact->email= $request->email;
        
        $contact->comment= $request->comment;

        $contact->save();

        return "ok";

    }

    public function allcomment()
    {
      

        $data=Contact::all();

        return $data;

    }

    public function allorder()
    {
      

        $data=Order::all();

        return $data;

    }


    public function changeinformation(Request $request)
    {
        Admin::where('username',$request->username)
                    ->update(['name'=> $request->name,'email'=> $request->email]);

        // session()->forget('delivery.name');
        // session()->put('delivery.name',$request->i_name);

        //  return redirect()->route('delivery.dashboard');

        return "ok";
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreAdminRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAdminRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function show(Admin $admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function edit(Admin $admin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAdminRequest  $request
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAdminRequest $request, Admin $admin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function destroy(Admin $admin)
    {
        //
    }
    public function adminDash(){
        return view('admin.adminDash');

    }
    public function aboutus(){
        return view('admin.aboutus');

    }
    public function Profile(Request $request){
        $admin = Admin::where('username', $request->session()->get('user'))->first();
        return view('admin.Profile')->with('admin', $admin);  
       }
       public function editProfile(Request $request){
        $admin = Admin::where('username', $request->session()->get('user'))->first();
        // return $customer;
        return view('admin.EditProfile')->with('admin', $admin);
    
        }
    
        public function editProfileSubmitted(Request $request){
            $admin = Admin::where('username', $request->session()->get('user'))->first();
            // return  $student;
            $admin->id = $request->id;
            $admin->name = $request->name;
            $admin->username = $request->username;
            $admin->password = $request->password;
            $admin->save();
            return redirect()->route('Profile');
    
        }

        public function adddmin(){
            return view('admin.Registration');
    
        }
        public function addAdminSubmitted(Request $request){
            $rules = [
                "name"=>"required|min:4|max:20",
                'email'=>'required|email|max:255|unique:users',
                "username"=>'required|string|regex:/^[a-zA-Z0-9\s]+$/|min:4|max:20',
                'password' => 'required|string|min:5|regex:/^.*(?=.{3,})(?=.*[a-zA-Z])(?=.*[0-9])(?=.*[\d\x])(?=.*[!$#%]).*$/',
                'confirmpass' => 'required_with:password|same:password|min:5',
            ];
            ['name.required'=>"Required Field must be Filled-Up",
            'email.required'=>"Required Field must be Filled-Up",
            'username.required'=>"Required Field must be Filled-Up",
            'password.required'=>"Required Field must be Filled-Up",
            'confirmpass.required'=>"Required Field must be Filled-Up"];
             $validator = Validator::make($request->all(),$rules);
            if ($validator->fails()) {
                return redirect('/registration')
                ->withInput()
                ->withErrors($validator);
            }
            else{
                $data = $request->input();
    
                    $admin = new Admin;
                    $admin->name = $data['name'];
                    $admin->email = $data['email'];
                    $admin->username = $data['username'];
                    $admin->password = $data['password'];
                    $admin->confirmpass = $data['confirmpass'];
                    $admin->save();
                    return redirect('/login')->withSuccess('Registered successfully!');
            }
        }

}