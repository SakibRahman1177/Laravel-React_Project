
@extends('layouts.app2')
@section('content')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
<div style="margin-top: 50px;margin-left: 1350px;">
    @if(Session::get('user')) 
    <h5>logged in as <a>{{Session::get('user')}}</a> </h5>

    @endif 
</div>
<div style="margin-top: 50px;margin-left: 800px;">
<h1 class="h3 mb-5 text-gray-900">DASHBOARD</h1> 
</div>

<h1 class="h3 mb-5 text-gray-800">DASHBOARD</h1>
<div class ="container-fluid">

<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-5 text-gray-800">DASHBOARD</h1>
    <div class = "row">
   <div class="card border-left-primary shadow h-20 py-2" >
        <div class="card-body">
            <div class="row no-gutters align-items-center">

                    <div class="text-xs font-weight-bold text-primary text-uppercase ">Total Registered Customers</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                        <?php
                        $connection = mysqli_connect("localhost","root","","sanofy_db");
                
                            $query = "SELECT id FROM customers ORDER BY id";  
                            $query_run = mysqli_query($connection, $query);
                            $row = mysqli_num_rows($query_run);
                            echo '<h4> Total Customers: '.$row.'</h4>';
                        ?>
                        <a class="btn btn-danger" href="{{route('viewCustomerList')}}">View</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card border-left-primary shadow h-20 py-2" >
        <div class="card-body">
            <div class="row no-gutters align-items-center">

                    <div class="text-xs font-weight-bold text-primary text-uppercase ">Total Registered Delivery Man</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                        <?php
                        $connection = mysqli_connect("localhost","root","","sanofy_db");
                
                            $query = "SELECT id FROM deliveries ORDER BY dob";  
                            $query_run = mysqli_query($connection, $query);
                            $row = mysqli_num_rows($query_run);
                            echo '<h4> Total Delivery Man: '.$row.'</h4>';
                        ?>
                        <a class="btn btn-danger" href="{{route('viewDeliverymanList')}}">View</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>


    @include('inc.sidebar')
@endsection 
</div>