<?php

namespace App\Http\Controllers;
use DateTime;
use App\Models\product;
use Illuminate\Http\Request;
use App\Http\Requests\StoreproductRequest;
use App\Http\Requests\UpdateproductRequest;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
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

    public function changestatus(Request $request)
    {
        Product::where('id',$request->id)
        ->update(['status'=> $request->status]);

     

          return $request;
    }

    public function allproduct()
    {
        $data= Product::all();

        return $data;
    }

    public function requestproduct()
    {
        $data= Product::where('status','request')->get();

        return $data;
    }

    public function addmedicine(Request $request){

        $product= new Product();
       

        $product->pname = $request->pname;
        $product->cname = $request->cname;
        $product->ctg = $request->ctg;
        $product->type = $request->type;

        $product->price=$request->price;
        $product->status=$request->status;
       

        $product->save();
       
        
      }


      public function ViewDetails(Request $request){
        $rules =[
                "pname"=>"required|min:3|max:20",
                "pId"=>"required|integer|digits:5",
                "cname"=>"required|min:6|max:30",
                'ctg' => 'required',
                'type' => 'required',
                'price' => 'required|integer|min:2'
        ];
        ['pname.required'=>"Required Field must be Filled-Up",
             'ctg.required'=>"Please! Choose a categoery"];
             $validator = Validator::make($request->all(),$rules);
            if ($validator->fails()) {
                return redirect('user/addmedicine')
                ->withInput()
                ->withErrors($validator);
            }
            else{
                $data = $request->input();
    
                    $product = new product;
                    $product->pname = $data['pname'];
                    $product->pId = $data['pId'];
                    $product->cname = $data['cname'];
                    $product->ctg = $data['ctg'];
                    $product->type = $data['type'];
                    $product->price = $data['price'];
                    $product->status = $data['status'];
                    $product->save();
                    return redirect('user/addmedicine')->withSuccess('Product Added successfully!');
            }
    
        }

           public function ProductDetails(){
            $products = DB::select('select * from products');
            return view('pharmacy.ProductDetails',['products'=>$products]);
        }

        public function notifilter(Request $request)
        {
            product::where('id',$request->id)
                        ->update(['status'=> $request->status]);
                        

                        if(false)
                        {
                                $dt = new DateTime();
                                $product=product::where('id',$request->id)->first();
                                
                            $history= new product();
                            $history->pname = $product->pname;
                            $history->pId = $product->amount;
                            $history->ctg = $product->address;
                            $history->type = $product->name;
                            $history->cname = $product->amount;
                            $history->price = $product->address;
                            $history->time = $dt->format('Y-m-d H:i:s');
        
        
                            $history->save();
    
                }
        
                return redirect('user/details');
        }


        public function history()
        {
        $product=product::where('status', 'REQUESTED')->get();      
        return view('pharmacy.RequestMedics')->with('product',$product);
        }
        

            public function productEdit(Request $request){
                $product = product::where('pId', $request->pId)->first();
                // return $product;
                return view('pharmacy.EditProducts');
                // return view('student.studentCreate')->with('student', $student);
        
            }
            public function productEditSubmitted(Request $request){
                $product = product::where('id', $request->session()->get('product'))->first();
                // return  $student;
                $product->name = $request->name;
                $product->student_id = $request->student_id;
                $product->save();
                return redirect()->route('studentList');
        
            }

            public function productDelete(Request $request){
                $product = product::where('id', $request->id)->first();
                $product->delete();
        
                return redirect()->route('ProductDetails');

                
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
     * @param  \App\Http\Requests\StoreproductRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreproductRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateproductRequest  $request
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateproductRequest $request, product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(product $product)
    {
        //
    }
}
