<html>
  <head>
  <link rel="stylesheet" href="{{ URL::asset('css/sidebar.css') }}" />
  </head>
  <body><div class="area"></div><nav class="main-menu">
  @if(Session::get('user')) 
    <h5>logged in as <a>{{Session::get('user')}}</a> </h5>
    @endif 
            <ul>
                <li>
                    <a href="{{route('adminDash')}}">
                        <i class="fa fa-home fa-2x"></i>
                        <span class="nav-text">
                            Dashboard
                        </span>
                    </a>
                </li>

                <li class="has-subnav">
                    <a href="{{route('viewCustomerList')}}">
                        <i class="fa fa-laptop fa-2x"></i>
                        <span class="nav-text">
                           Customer List
                        </span>
                    </a>
                    
                </li>
                <li class="has-subnav">
                    <a href="">
                       <i class="fa fa-list fa-2x"></i>
                        <span class="nav-text">
                            Order Details
                        </span>
                    </a>
                    
                </li>
                <li class="has-subnav">
                    <a href="{{route('viewDeliverymanList')}}">
                       <i class="fa fa-folder-open fa-2x"></i>
                        <span class="nav-text">
                           Delivery Man List
                        </span>
                    </a>
                   
                </li>
                <li>
                    <a href="">
                        <i class="fa fa-bar-chart-o fa-2x"></i>
                        <span class="nav-text">
                            Feedbacks
                        </span>
                    </a>
                </li>
                <li>
                    <a href="{{route('addDeliveryman')}}">
                        <i class="fa fa-font fa-2x"></i>
                        <span class="nav-text">
                           Add Delivery man
                        </span>
                    </a>
                </li>
                <li>
                    <a href="{{route('aboutus')}}">
                       <i class="fa fa-info fa-2x"></i>
                        <span class="nav-text">
                            About Us
                        </span>
                    </a>
                </li>
            </ul>

            <ul class="logout">
                <li>
                   <a href="{{route('logout')}}">
                         <i class="fa fa-power-off fa-2x"></i>
                        <span class="nav-text">
                            Logout
                        </span>
                    </a>
                </li>
            </ul>
        </nav>
  </body>
</html>