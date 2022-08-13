@extends('layouts.app2')
@section('content')
<body>
<div style="margin-top: 100px;margin-left: 320px;margin-right: 50px;">
<div class='container-fluid ' style="text-align: center">
    <div class="header my-5">
       <h1>About Us </h1>
     </div>
    <div class="row" style="justify-content: center">
        <div class="card col-md-8 px-5 col-12">
            <div class="card-content">
                <div class="card-body"> 
                    <div class="shadow"></div>
                    <div class="card-subtitle">
                        <p> <small class="text-dark">Sanofy Online Pharmacy launched June 2022. From the beginning, it became popular. All kinds of products like medicines, beauty, baby products, Medical accessories etc are available here.If you are a small business owner, you can open a shop on this platform to sell your product online. The payment option is as follows: Visa Card, Master Card, bKash, Cash-on-delivery, Etc.</small> </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
<div class="header my-5">
       <h1>Our Values  </h1>
     </div>
     <div class="row" style="justify-content: center">
        <div class="card col-md-8 px-5 col-12 ml-2">
            <div class="card-content">
                <div class="card-body"> 
                    <div class="card-subtitle">
                        <p> <small class="dark">Sanofy aims to provide a trouble-free shopping experience for the people of Bangladesh but is also providing a simple opportunity for international online shopping from Bangladesh. Sanofy aims to make online pharmacy accessible to all parts of the country. Everyone is encouraged to shop with confidence at sanofy.com.bd as our strict buyer’s protection policies ensure no risks while shopping online.</small> </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    @include('inc.sidebar')
</body>
    @endsection