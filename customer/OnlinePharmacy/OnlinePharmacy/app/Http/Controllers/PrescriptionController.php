<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\prescription;
use App\Http\Requests\StoreprescriptionRequest;
use App\Http\Requests\UpdateprescriptionRequest;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;


class PrescriptionController extends Controller
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
     * @param  \App\Http\Requests\StoreprescriptionRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreprescriptionRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\prescription  $prescription
     * @return \Illuminate\Http\Response
     */
    public function show(prescription $prescription)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\prescription  $prescription
     * @return \Illuminate\Http\Response
     */
    public function edit(prescription $prescription)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateprescriptionRequest  $request
     * @param  \App\Models\prescription  $prescription
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateprescriptionRequest $request, prescription $prescription)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\prescription  $prescription
     * @return \Illuminate\Http\Response
     */
    public function destroy(prescription $prescription)
    {
        //
    }



    public function AddMedicine(){
        return view('product.addprescription');
      }

      public function ViewDetails(Request $request){
        $rules =[
                "name"=>"required|min:4|max:20",
                'dob'=>'required|after_or_equal:1900-01-01|before:today',
                "weight"=>"required|min:2",
                'type' => 'required',
                'ins' => 'required',
                'sub' => 'required',
                "address"=>"required|min:5"
        ];
        ['name.required'=>"Required Field must be Filled-Up",
             'type.required'=>"Please! Choose a categoery",
             'weight.required'=>"Your weight should be atleast 15kg"
            
            ];
             $validator = Validator::make($request->all(),$rules);
            if ($validator->fails()) {
                return redirect('user/addprescription')
                ->withInput()
                ->withErrors($validator);
            }
            else{
                $data = $request->input();
    
                    $prescription = new prescription;
                    $prescription->name = $data['name'];
                    $prescription->dob = $data['dob'];
                    $prescription->weight = $data['weight'];
                    $prescription->type = $data['type'];
                    $prescription->ins = $data['ins'];
                    $prescription->sub = $data['sub'];
                    $prescription->address = $data['address'];
                    
                    $prescription->save();
                    return redirect('user/addprescription')->withSuccess('Prescription Added successfully!');
            }
    
        }

        public function addprescription(Request $request)
        {
           
    
            $prescription = new prescription;
            $prescription->name = $request->name;
            $prescription->dob = $request->dob;
            $prescription->weight = $request->weight;
            $prescription->type = $request->type;
            $prescription->ins = $request->ins;
            $prescription->sub = $request->sub;
            $prescription->address = $request->address;
            
            $prescription->save();

            return "done";
        }

        public function ViewPrescription(Request $request){
            $prescription = prescription::where('name', $request->session()->get('customer'))->first();
            return view('product.viewprescription')->with('prescription', $prescription);  
           }



           public function prescriptionEdit(Request $request){
            $prescription = prescription::where('name', $request->session()->get('customer'))->first();
            // return $student;
            return view('product.editprescription')->with('prescription', $prescription);
            // return view('student.studentCreate')->with('student', $student);
    
        }

        public function prescriptionEditSubmitted(Request $request){
        

            $prescription = prescription::where('name', $request->session()->get('customer'))->first();
            $prescription->name = $request->name;

            $prescription->dob = $request->dob;
            $prescription->weight = $request->weight;
            $prescription->type = $request->type;
            $prescription->ins = $request->ins;
            $prescription->sub = $request->sub;
            $prescription->address = $request->address;
    
    
            $prescription->save();
            return redirect()->route('viewprescription');
    
        }
    
        public function editprescription(Request $request){
    
            $prescription = prescription::where('name', $request->session()->get('customer'))->first();
    
                return view('product.editprescription')->with('customer', $customer);
           
        }




}
