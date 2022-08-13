<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
<div style="margin-top: 50px;margin-left: 1300px;">
    @if(Session::get('pharmacist'))  
        <h3>lOGGED IN AS <a class="btn btn-danger" href="{{route('Profile')}}">{{Session::get('pharmacist')}}</a></h3>
    @endif 
</div>
