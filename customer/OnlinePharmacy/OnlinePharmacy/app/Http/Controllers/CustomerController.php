<?php

namespace App\Http\Controllers;

use App\Models\customer;
use App\Models\Authentication;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\StorecustomerRequest;
use App\Http\Requests\UpdatecustomerRequest;
use App\Models\Token;
use Illuminate\Support\Str;
use DateTime;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function login(Request $request)
    {
           
        $check= customer::where('username',$request->username)->first();
                            
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

    public function information(Request $request)
    {
        $data= Customer::where('username',$request->username)->first();

        return $data;

     //  return $request->email;
    }

    public function changeinformationSubmit(Request $request)
    {
        Customer::where('username',$request->username)
                    ->update(['name'=> $request->name,'phone'=> $request->phone,"dob"=>$request->dob]);

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
     * @param  \App\Http\Requests\StorecustomerRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorecustomerRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function show(customer $customer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function edit(customer $customer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatecustomerRequest  $request
     * @param  \App\Models\customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatecustomerRequest $request, customer $customer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function destroy(customer $customer)
    {
        //
    }

    public function signup(){
        return view('login.registration');
    }
    public function signupCreateSubmitted(Request $request){
        $rules= [
            'name'=>"required|min:5|max:20",
            'username'=>"required|min:2|max:20",
            "cusid"=>"required|integer",
            'dob'=>'required|after_or_equal:1900-01-01|before:today',
            'email'=>'required|email' ,
            'phone'=>'required|regex:/^([0-9\s\-\+\(\)]*)$/',
            'password' => 'required|string|min:8|regex:/^.*(?=.{3,})(?=.*[a-zA-Z])(?=.*[0-9])(?=.*[\d\x])(?=.*[!$#%]).*$/',
            'confirm password' => 'same:password|min:8',
        ];

        [
            'name.required'=>"Please insert you name here",
            'username.required'=>"Please insert you username here",
            'cusid.required' => 'Please insert your id here',
            'dob.required' => 'Please insert your date of birth here',
            'email.required' => 'Please insert your email here',
            'phone.required' => 'Please insert your phone number here',
            'password.required' => 'Please insert your password here',
            'confirm password.required' => 'Please insert your password here'
            ];

    $validator = Validator::make($request->all(),$rules);

        if ($validator->fails()) {
            return redirect('signup')
            ->withInput()
            ->withErrors($validator);
        }

        else{
            $data = $request->input();
                $customer = new Customer;
                $customer->name = $data['name'];
                $customer->username = $data['username'];
                $customer->cusid = $data['cusid'];
                $customer->dob = $data['dob'];
                $customer->email = $data['email'];
                $customer->phone = $data['phone'];
                $customer->password = $data['password'];

                $customer->save();
                return redirect('login')->withSuccess('Registered successfully!');

        }
    }

    public function insert(Request$request){
        $name = $request->input('name');
        $username = $request->input('username');
        $cusid = $request->input('cusid');
        $dob = $request->input('dob');
        $email = $request->input('email');
        $phone = $request->input('phone');
        $password = $request->input('password');
        $data=array('name'=>$name,"username"=>$username,"cusid"=>$cusid,"dob"=>$dob,"email"=>$email,"phone"=>$phone,"password"=>$password);
        DB::table('customers')->insert($data);
        echo "Record inserted successfully.<br/>";
        echo '<a href = "/insert">Click Here</a> to go back.';
        }

        

   


    public function loginCreateSubmitted(Request $request){
        $validate = $request->validate([
            "username"=>"required|min:2|max:20",
            'password'=>'required|min:8',
            
        ],
        [
            'username.required'=>"Please insert you username here",
            'password.required' => 'Please insert your password here'
            ]
        
    );
    $customer = Customer::where('username',$request->username)

        ->where('password',$request->password)

        ->first();
        if($customer){

        $request->session()->put('customer',$customer->username);

        return redirect()->route('dashboard')->withSuccess('Signed in');

        }

        return redirect("login")->withSuccess('Login details are not valid');

    }

    public function profile(Request $request){

        $customer = Customer::where('username', $request->session()->get('customer'))->first();

            return view('login.profile')->with('customer', $customer);
       
    }


    public function customerEdit(Request $request){
        $customer = Customer::where('username', $request->session()->get('customer'))->first();
        // return $student;
        return view('login.editprofile')->with('customer', $customer);
        // return view('student.studentCreate')->with('student', $student);

    }
    public function customerEditSubmitted(Request $request){
        

        $customer = Customer::where('username', $request->session()->get('customer'))->first();
        $customer->name = $request->name;
        $customer->cusid = $request->cusid;
        $customer->dob = $request->dob;
        $customer->email = $request->email;
        $customer->phone = $request->phone;


        $customer->save();
        return redirect()->route('profile');

    }

    public function editprofile(Request $request){

        $customer = Customer::where('username', $request->session()->get('customer'))->first();

            return view('login.editprofile')->with('customer', $customer);
       
    }

    public function dashboard(Request $request){

        $customer = Customer::where('username', $request->session()->get('customer'))->first();

            return view('login.dashboard')->with('customer', $customer);
       
    }

    public function logout(){
        session()->flush();
        return redirect()->route('login');
    }
}
