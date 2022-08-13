<?php

namespace App\Http\Controllers;

use App\Models\Delivery;
use App\Http\Requests\StoreDeliveryRequest;
use App\Http\Requests\UpdateDeliveryRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class DeliveryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function ViewDeliveryList(){

        $deliveries = Delivery::all();
        return view('admin.viewDeliverymanList')->with('deliveries', $deliveries);
       }
    public function index()
    {
        return Delivery::select('name', 'id', 'email','dob', 'gender', 'username','password', 'confirmpass', 'phone','address')->get();
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
     * @param  \App\Http\Requests\StoreDeliveryRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDeliveryRequest $request)
    {

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Delivery  $delivery
     * @return \Illuminate\Http\Response
     */
    public function show(Delivery $delivery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Delivery  $delivery
     * @return \Illuminate\Http\Response
     */
    public function edit(Delivery $delivery)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDeliveryRequest  $request
     * @param  \App\Models\Delivery  $delivery
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDeliveryRequest $request, Delivery $delivery)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Delivery  $delivery
     * @return \Illuminate\Http\Response
     */
    public function destroy(Delivery $delivery)
    {
        //
    }
    public function addDeliveryman(){
        return view('admin.addDeliveryman');

    }
    public function addDeliverymanSubmitted(Request $request){
        $rules = [
            "name"=>"required|min:4|max:20",
            "id"=>"required|integer|digits:5",
            'email'=>'required|email|max:255|unique:users',
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
			return redirect('addDeliveryman')
			->withInput()
			->withErrors($validator);
		}
		else{
            $data = $request->input();

				$delivery = new Delivery;
                $delivery->name = $data['name'];
                $delivery->id = $data['id'];
                $delivery->email = $data['email'];
				$delivery->dob = $data['dob'];
				$delivery->gender = $data['gender'];
                $delivery->username = $data['username'];
                $delivery->password = $data['password'];
				$delivery->confirmpass = $data['confirmpass'];
                $delivery->phone = $data['phone'];
				$delivery->address = $data['address'];
				$delivery->save();
				return redirect('user/viewDeliverymanlist')->withSuccess('Registered successfully!');
		}
    }
    public function UserAPIInfo(){
        return Delivery::all()->toJson();
    }
    // post all user
    public function UserAPIPost(Request $request){
        $var = new Delivery();
        $var->name = $request->name;
        $var->id = $request->id;
        $var->email = $request->email;
        $var->dob = $request->dob;
        $var->gender = $request->gender;
        $var->username = $request->username;
        $var->password = $request->password;
        $var->confirmpass = $request->confirmpass;
        $var->phone = $request->phone;
        $var->address = $request->address;

       
        $var->save();
        return redirect('http://127.0.0.1:8000/api/deliverymaninfo/info');
       
      }

}
