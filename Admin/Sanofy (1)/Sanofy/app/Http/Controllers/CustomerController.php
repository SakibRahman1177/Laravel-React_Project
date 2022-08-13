<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Http\Requests\StoreCustomerRequest;
use App\Http\Requests\UpdateCustomerRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function searchcustomer(Request $request)
    {
        $search_text= $request->search;
        
      

      $data=Customer::where('name','LIKE','%'.$search_text.'%')->get();

       return $data;
    }

    public function allcustomer(){

        $customers = Customer::all();
        return $customers;
       }

       public function customerinformation(Request $request)
       {
           $data= Customer::where("id",$request->id)->first();
   
           return $data;
       }

       public function customerchangeinformation(Request $request)
       {
           Customer::where('id',$request->id)
                       ->update(['name'=> $request->name,'phone'=> $request->phone,'email'=> $request->email]);
   
           // session()->forget('delivery.name');
           // session()->put('delivery.name',$request->i_name);
   
           //  return redirect()->route('delivery.dashboard');
   
           return "ok";
       }
       public function changestatuscustomer(Request $request)
       {
           Customer::where('id',$request->id)
           ->update(['status'=> $request->status]);
   
        
   
             return $request;
       }


       public function customerEdit(Request $request){
        $customer = Customer::where('id', $request->id)->first();
        // return $student;
        return view('admin.customerEdit')->with('customer', $customer);
        // return view('student.studentCreate')->with('student', $student);

    }
    public function customerEditSubmitted(Request $request){
        $customer = Customer::where('id', $request->id)->first();
        // return  $student;
        $customer->name = $request->name;
        $customer->phone = $request->phone;
        $customer->email = $request->email;
        $customer->save();
        return redirect()->route('viewCustomerList');

    }
    public function customerDelete(Request $request){
        $customer = Customer::where('id', $request->id)->first();
        $customer->delete();

        return redirect()->route('viewCustomerList');
    }
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
     * @param  \App\Http\Requests\StoreCustomerRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCustomerRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function show(Customer $customer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $customer= Customer::find($id);
        if($customer)
        {
            return response()->json([
                'status'=>200,
                'message'=>$customer,

            ]);


        }
        else{
            return response()->json([
                'status'=>404,
                'message'=>'No customer found',

            ]);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCustomerRequest  $request
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCustomerRequest $request, Customer $customer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Customer $customer)
    {
        //
    }
    // public function UserAPIInfo(){
    //     return Customer::all()->toJson();
    // }
    // // post all user
    // public function UserAPIPost(Request $request){
    //     $var = new Customer();
    //     $var->name = $request->name;
    //     $var->phone = $request->phone;
    //     $var->email = $request->email;
    //     $var->password = $request->password;

       
    //     $var->save();
    //     return redirect('http://127.0.0.1:8000/api/customerinfo/info');
       
    //   }
    public function APICustomerList(){

        $customer = Customer::all();
    
        return $customer;
      }
    
    //   public function APIcustomerAdd(Request $request)
    //   {
    
    //     $member = new Member();
    //     $member->username = $request->username;
    //     $member->password = Hash::make($request->password);
    //     $member->type = "employee";
    //     $member->save();
    
    //     $employee = new  Employee();
    //     $employee->username = $request->username;
    //     $employee->name = $request->name;
    //     $employee->email = $request->email;
    //     $employee->picture = '../assets/images/faces/default.png';
    //     $employee->save();
    
    //     return $request;
    //   }
    
    
      public function APIcustomerDetails(Request $request)
      {
        $customer = Customer::where('name', $request->name)->first();
    
        return $customer;
      }
}
