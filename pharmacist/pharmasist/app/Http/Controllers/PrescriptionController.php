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
    
    public function allprescription()
    {
        //
        $data= prescription::all();

        return $data;
    }

    public function addPrescription(){
        return view('pharmacy.AddPrescription');
      }

      public function PrescriptionSubmitted(Request $request){
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
                    $prescription->prescribed_uname = $request->session()->get('pharmacist');
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
        public function ViewAllPrescription(Request $request){
            $prescription = DB::select('select prescriptions.*, pharmacies.name as pname from prescriptions, pharmacies where prescriptions.prescribed_uname = pharmacies.username');
            return view('pharmacy.ViewPrescDetails',['prescriptions'=>$prescription]);
           }

        public function ViewPrescription(Request $request){
            $prescription = prescription::where('id', $request->id)->first();
            return view('pharmacy.ViewPrescription')->with('prescription', $prescription);  
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
}
