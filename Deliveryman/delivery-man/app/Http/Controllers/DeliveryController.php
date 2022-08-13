<?php

namespace App\Http\Controllers;
use DateTime;
use App\Models\Delivery;
use App\Models\Customer;
use App\Models\Notification;
use App\Models\History;
use App\Models\Authentication;
use App\Models\Token;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


use Illuminate\Http\Request;

class DeliveryController extends Controller
{
    //

    public function login()
    {
        return view('delivery.pages.delivery.login');
    }

    public function loginSubmit(Request $request)
    {
        // $this->validate(
        //     $request,
        //     [
                
        //         'i_email'=>'required|email',
        //         'i_password'=>'required|min:6'
               
                
                
        //     ],
        //     [
            
        //         'i_email.required'=>'Email is required',
        //         'i_password.required'=>'Password is required',
        //         'i_password.min'=>'Password have to be atleast 6 character',
              
        //     ]
        // );

        // $check= Authentication::where('a_email',$request->i_email)->first();
                            
        // if($check!=null)
        // {
        //     if(Hash::check($request->i_password, $check->a_password))
        //     {
        //         session()->put('delivery.email',$check->delivery->i_email);
        //         session()->put('delivery.name',$check->delivery->i_name);
        //         session()->put('delivery.image',$check->delivery->i_image);

              

        //         return redirect()->route('delivery.dashboard');

        //     }
        //     return redirect()->back()->withErrors(['errors_password' => 'Wrong password']);
            
        // }
        // return redirect()->back()->withErrors(['errors_email' => 'Email not found']);

        
        $check= Authentication::where('a_email',$request->i_email)->first();
                            
        if($check!=null)
        {
            if(Hash::check($request->i_password, $check->a_password))
            {
               $api_token= str::random(64);
               $token = new Token();
               $token->email= $check->a_email;
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
        $data= Delivery::where('i_email',$request->email)->first();

        return $data;

     //  return $request->email;
    }

    public function allhistory()
    {
        $data=History::all();


       // return view('delivery.layout.dashboard')->with('data',$data);
       return $data;
    }
    

    public function allnotification()
    {
        $data=Notification::all();


       // return view('delivery.layout.dashboard')->with('data',$data);
       return $data;
    }

    public function logout(Request $request)
    {
        Token::where('token',$request->access_token)
        ->update(['expired_at'=> new DateTime()]);

        return "ok";
    }

    public function changestatus(Request $request)
    {
        Notification::where('id',$request->id)
        ->update(['status'=> $request->status]);

        if($request->status=="Delivered")
        {
            $dt = new DateTime();
 

            $data=Notification::where('id',$request->id)->first();

            $history= new History();
       

        $history->name = $data->name;
        $history->amount = $data->amount;
        $history->address = $data->address;
        $history->time = $dt->format('Y-m-d H:i:s');


        $history->save();

        }

          return $request;
    }

    public function searcharea(Request $request)
    {
        $search_text= $request->search;
        
      

      $project=Notification::where('address','LIKE','%'.$search_text.'%')->get();

       return $project;
    }


    

    public function registration()
    {
        return view('delivery.pages.delivery.registration');
    }

    public function registrationSubmit(Request $request)
    {

        

        $this->validate(
            $request,
            [
                'i_name'=>'required',
                'i_email'=>'required|email|unique:App\Models\authentication,a_email',
                'i_phone'=>'required|numeric',
                'i_address'=>'required',
                'i_password'=>'required|min:6',
                'ic_password'=>'required|same:i_password'
                
                
            ],
            [
                'i_name.required'=>'Name is required',
                'i_email.required'=>'Email is required',
                'i_email.unique'=>'This email is already taken',
                'i_phone.required'=>'Phone number is required',
                'i_phone.numeric'=>'Phone have to be numeric value',
                'i_address.required'=>'Address is required',
                'i_password.required'=>'Password is required',
                'i_password.min'=>'Password have to be atleast 6 character',
                'ic_password.required'=>'Confirm password is required',
                'ic_password.same'=>'Password and Current password must be same'
              
            ]
        );

     
       
        $delivery= new Delivery();
        $authenticaion= new Authentication();

        $delivery->i_name = $request->i_name;
        $delivery->i_email = $request->i_email;
        $delivery->i_phone = $request->i_phone;
        $delivery->i_address = $request->i_address;

        $authenticaion->a_email=$request->i_email;
        $authenticaion->a_password=Hash::make($request->i_password);
        $authenticaion->a_type='delivery';

        $delivery->save();
        $authenticaion->save();


        return redirect()->route('delivery.login');
    }


    public function dashboard()
    {
        $data=History::all();


        return view('delivery.layout.dashboard')->with('data',$data);
       //return $data;
    }

    public function homepage()
    {
        $data=History::all();

        return view('delivery.pages.delivery.homepage')->with('data',$data);
    }

    public function signout()
    {
        session()->flush();

        return redirect()->route('delivery.login');
    }

    public function changepicture()
    {
        return view('delivery.pages.delivery.changepicture');
    }

    public function changepictureSubmit(Request $request)
    {
        $request->validate(
            [
                'image'=> 'required|mimes:JPG,png,jpeg|max:2048'
            ],
            [
                'image.required'=> 'Please upload a image first'
            ]
            );

        if($request->hasFile('image'))
        {
            $name= time().'_'.$request->file('image')->getClientOriginalName();
            $request->file('image')->storeAs('uploads',$name,'public');
            
            $entity= Delivery::where('i_email',session()->get('delivery.email'))
                                ->update(['i_image' => $name]);

            
            session()->forget('delivery.image');
            session()->put('delivery.image',$name);
            return redirect()->route('delivery.dashboard');
        }
        return view('delivery.pages.delivery.changepicture');
    }

    public function changepassword()
    {
        return view('delivery.pages.delivery.changepassword');
    }

    public function changepasswordSubmit(Request $request)
    {
        
        $this->validate(
            $request,
            [
                'ir_password'=>'required|min:6',
                'i_password'=>'required|min:6',
                'ic_password'=>'required|same:i_password'
                
                
            ],
            [
                'ir_password.required'=>'Password is required',
                'ir_password.min'=>'Password have to be atleast 6 character',
                'i_password.required'=>'Password is required',
                'i_password.min'=>'Password have to be atleast 6 character',
                'ic_password.required'=>'Confirm password is required',
                'ic_password.same'=>'Password and Current password must be same'
              
            ]
        );

        $check= Authentication::where('a_email',session()->get('delivery.email'))->first();

        
                            
        if($check!=null)
        {
            if(Hash::check($request->ir_password, $check->a_password))
            {
                
                Authentication::where('a_email',session()->get('delivery.email'))
                                ->update(['a_password'=> Hash::make($request->i_password)]);

              

                 session()->flush();

                return redirect()->route('delivery.login');

            }
            return redirect()->back()->withErrors(['errors_irpassword' => 'Wrong password']);
            
        }
        return redirect()->route('delivery.login');
    }

    public function changeinformation()
    {
        $entity= Delivery::where('i_email',session()->get('delivery.email'))->first();

        return view('delivery.pages.delivery.changeinformation')->with('entity',$entity);
    }

    public function changeinformationSubmit(Request $request)
    {
        Delivery::where('i_email',$request->i_email)
                    ->update(['i_name'=> $request->i_name,'i_phone'=> $request->i_phone,'i_address'=> $request->i_address]);

        // session()->forget('delivery.name');
        // session()->put('delivery.name',$request->i_name);

        //  return redirect()->route('delivery.dashboard');

        return "ok";
    }




    
    public function noti()
    {
       $data=Notification::all();

       
       
       
      return view('delivery.pages.delivery.noti')->with('data',$data);
    }

    public function notifilter(Request $request)
    {
        Notification::where('id',$request->id)
                    ->update(['status'=> $request->status]);

    
        if($request->status=='Delivered')
        {
            $dt = new DateTime();
 

            $data=Notification::where('id',$request->id)->first();

            $history= new History();
       

        $history->name = $data->name;
        $history->amount = $data->amount;
        $history->address = $data->address;
        $history->time = $dt->format('Y-m-d H:i:s');


        $history->save();



        }

        return redirect()->route('delivery.noti');

    }

    public function history()
    {
       $data=History::all();
        
       
      return view('delivery.pages.delivery.history')->with('data',$data);
    }

    public function customerdetails(Request $request)
    {
        $entity= Customer::where('i_id',$request->id)->first();

        return view('delivery.pages.delivery.customerinformation')->with('entity',$entity);

    }
}
