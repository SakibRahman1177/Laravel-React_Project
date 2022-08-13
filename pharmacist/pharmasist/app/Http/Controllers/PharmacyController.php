<?php

namespace App\Http\Controllers;

use App\Models\pharmacy;
use App\Models\LoginAPI;
use App\Models\product;
use App\Models\prescription;
use Illuminate\Http\Request;
use App\Http\Requests\StorepharmacyRequest;
use App\Http\Requests\UpdatepharmacyRequest;
use Illuminate\Support\Facades\Validator;

class PharmacyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Home');//
    }

    /**
     * Displaying Login Interface.
     */
    public function Login(){
        return view('Login');
    }

    public function loginSubmitted(Request $request){
        $validate = $request->validate([
            "username"=>"required|string|regex:/^[a-zA-Z0-9\s]+$/|min:4|max:20",
            'password' => 'required|string|min:8|regex:/^.*(?=.{3,})(?=.*[a-zA-Z])(?=.*[0-9])(?=.*[\d\x])(?=.*[!$#%]).*$/'
        ],
    );
        $pharmacist = pharmacy::where('username',$request->username)
        ->where('password',$request->password)
        ->first();

    // return $customer;
        if($pharmacist){
        $request->session()->put('pharmacist',$pharmacist->username);
        return redirect()->route('Dashboard');
        }
        return back()->with('error','Invalid Username or Password!');
    }

    public function information(Request $request)
    {
        $data= LoginAPI::where('username',$request->username)->first();

        return $data;

     //  return $request->email;
    }

    public function changeinformationSubmit(Request $request)
    {
        LoginAPI::where('username',$request->username)
                    ->update(['name'=> $request->name,'phone'=> $request->phone,'address'=> $request->address,"dob"=>$request->dob]);

        // session()->forget('delivery.name');
        // session()->put('delivery.name',$request->i_name);

        //  return redirect()->route('delivery.dashboard');

        return "ok";
    }


    /**
     * Displaying Registration Interface.
     */
    public function PharmaReg(){
        return view('Registration');
    }
    public function PharmaRegSubmitted(Request $request){
        $rules = [
            "name"=>"required|min:4|max:20",
            "prmId"=>"required|integer|digits:5",
            'email'=>'required|email|max:255|unique:users',
            "dept"=>'required',
            'dob'=>'required|after_or_equal:1990-01-01|before:today',
            "gender"=>'required',
            "username"=>'required|string|regex:/^[a-zA-Z0-9\s]+$/|min:4|max:20',
            'password' => 'required|string|min:8|regex:/^.*(?=.{3,})(?=.*[a-zA-Z])(?=.*[0-9])(?=.*[\d\x])(?=.*[!$#%]).*$/',
            'confirmpass' => 'required_with:password|same:password|min:8',
            'phone'=>'required|regex:/^([0-9\s\-\+\(\)]*)$/|digits:11',
            'address' => 'required|max:255'
        ];
        ['name.required'=>"Required Field must be Filled-Up",
         'gender.required'=>"Please! Choose your gender"];
         $validator = Validator::make($request->all(),$rules);
        if ($validator->fails()) {
			return redirect('registration')
			->withInput()
			->withErrors($validator);
		}
		else{
            $data = $request->input();

				$customer = new pharmacy;
                $customer->name = $data['name'];
                $customer->prmId = $data['prmId'];
                $customer->email = $data['email'];
                $customer->dept = $data['dept'];
				$customer->dob = $data['dob'];
				$customer->gender = $data['gender'];
                $customer->username = $data['username'];
                $customer->password = $data['password'];
				$customer->confirmpass = $data['confirmpass'];
                $customer->phone = $data['phone'];
				$customer->address = $data['address'];
				$customer->save();
				return redirect('login')->withSuccess('Registered successfully!');
		}
   }
   public function Dashboard(Request $request)
   {
           $pharmacist = pharmacy::where('username', $request->session()->get('pharmacist'))->first();
           return view('pharmacy.Dashboard')->with('pharmacist', $pharmacist);
   
   }
   public function homepage()
    {
        $product=product::all();
        return view('pharmacy.Dashboard')->with('product',$product);
    }

   public function logout(){
       session()->forget('pharmacist');
       return redirect()->route('Login');
   }

   public function PharmacistProfile(Request $request){
    $pharmacist = pharmacy::where('username', $request->session()->get('pharmacist'))->first();
    return view('pharmacy.Profile')->with('pharmacist', $pharmacist);  
   }
   public function editProfile(Request $request){
    $pharmacist = pharmacy::where('username', $request->session()->get('pharmacist'))->first();
    // return $customer;
    return view('pharmacy.EditProfile')->with('pharmacist', $pharmacist);

    }

    public function editProfileSubmitted(Request $request){
        $pharmacist = pharmacy::where('username', $request->session()->get('pharmacist'))->first();
        // return  $student;
        $pharmacist->name = $request->name;
        $pharmacist->prmId = $request->prmId;
        $pharmacist->email = $request->email;
        $pharmacist->dob = $request->dob;
        $pharmacist->username = $request->username;
        $pharmacist->phone = $request->phone;
        $pharmacist->address = $request->address;
        $pharmacist->save();
        return redirect()->route('Profile');

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
     * @param  \App\Http\Requests\StorepharmacyRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorepharmacyRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\pharmacy  $pharmacy
     * @return \Illuminate\Http\Response
     */
    public function show(pharmacy $pharmacy)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\pharmacy  $pharmacy
     * @return \Illuminate\Http\Response
     */
    public function edit(pharmacy $pharmacy)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatepharmacyRequest  $request
     * @param  \App\Models\pharmacy  $pharmacy
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatepharmacyRequest $request, pharmacy $pharmacy)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\pharmacy  $pharmacy
     * @return \Illuminate\Http\Response
     */
    public function destroy(pharmacy $pharmacy)
    {
        //
    }
}
