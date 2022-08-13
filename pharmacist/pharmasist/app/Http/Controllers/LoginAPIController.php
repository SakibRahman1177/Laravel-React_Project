<?php

namespace App\Http\Controllers;

use App\Models\LoginAPI;
use App\Http\Requests\StoreLoginAPIRequest;
use App\Http\Requests\UpdateLoginAPIRequest;
use Illuminate\Http\Request;
use App\Models\pharmacy;
use App\Models\User;
use Illuminate\Support\Str;
use App\Models\Token;
use DateTime;

class LoginAPIController extends Controller
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

    public function  APIlogin(Request $request){

       
        $check= LoginAPI::where('username',$request->username)->first();
                            
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
        public function  APIlogout(Request $request){

            $token = Token::where('token',$request->token)->first();
    
            if($token){
                $token->expired_at = new DateTime();
                $token->save();
                return "Logout";
            }
    
        }
    public function APIReg(Request $req){

        $req->validate([
            "name"=>"required|min:3|max:20",
            "prmId"=>"required|integer|digits:5",
            'email'=>'required|email|max:255|unique:users',
            'dob'=>'required|after_or_equal:1990-01-01|before:today',
            "username"=>'required|string|regex:/^[a-zA-Z0-9\s]+$/|min:3|max:20',
            'password' => 'required|string|min:6|regex:/^.*(?=.{3,})(?=.*[a-zA-Z])(?=.*[0-9])(?=.*[\d\x])(?=.*[!$#%]).*$/',
            'confirmpass' => 'required_with:password|same:password|min:6',
            'phone'=>'required|regex:/^([0-9\s\-\+\(\)]*)$/|digits:11',
            'address' => 'required|max:255'
        ]);
        $pharmareg = new LoginAPI();
        $pharmareg->name = $req->name;
        $pharmareg->prmId = $req->prmId;
        $pharmareg->email = $req->email;
        $pharmareg->dob = $req->dob;
        $pharmareg->username = $req->username;
        $pharmareg->password = $req->password;
        $pharmareg->confirmpass = $req->confirmpass;
        $pharmareg->phone = $req->phone;
        $pharmareg->address = $req->address;
        $pharmareg->save();

        return $req;
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
     * @param  \App\Http\Requests\StoreLoginAPIRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreLoginAPIRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\LoginAPI  $loginAPI
     * @return \Illuminate\Http\Response
     */
    public function show(LoginAPI $loginAPI)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\LoginAPI  $loginAPI
     * @return \Illuminate\Http\Response
     */
    public function edit(LoginAPI $loginAPI)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateLoginAPIRequest  $request
     * @param  \App\Models\LoginAPI  $loginAPI
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateLoginAPIRequest $request, LoginAPI $loginAPI)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\LoginAPI  $loginAPI
     * @return \Illuminate\Http\Response
     */
    public function destroy(LoginAPI $loginAPI)
    {
        //
    }
}
