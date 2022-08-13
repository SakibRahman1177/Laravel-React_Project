<?php

namespace App\Http\Controllers;

use App\Models\Login;
use App\Models\Token;
use App\Http\Requests\StoreLoginRequest;
use App\Http\Requests\UpdateLoginRequest;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

use DateTime;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StoreLoginRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreLoginRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Login  $login
     * @return \Illuminate\Http\Response
     */
    public function show(Login $login)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Login  $login
     * @return \Illuminate\Http\Response
     */
    public function edit(Login $login)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateLoginRequest  $request
     * @param  \App\Models\Login  $login
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateLoginRequest $request, Login $login)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Login  $login
     * @return \Illuminate\Http\Response
     */
    public function destroy(Login $login)
    {
        //
    }
    // public function Login(){
    //     return view('admin.Login');
    // }
    public function loginSubmitted(Request $request){

        $admin = Admin::where('username',$request->username)
                            ->where('password',$request->password)
                            ->first();

        // return $teacher;
        if($admin){
            $request->session()->put('user',$admin->name);
            return redirect()->route('adminDash');
        }
        return back();
    }
    public function logout(){
        session()->forget('user');
        return redirect()->route('Login');
    }
    

    public function  login(Request $request){

       
        $check= Admin::where('username',$request->username)->first();
                            
        if($check!=null)
        {
            if($request->password== $check->password)
            {
               $api_token= str::random(64);
               $token = new Token();
               $token->email= $request->username;
               $token->token= $api_token;
               $token->created_at= new DateTime();
               $token->save();

               return $token;

            }
            return "Wrong Password";
           
        }

       
        
       return "No user found";
    
    
     }
}
