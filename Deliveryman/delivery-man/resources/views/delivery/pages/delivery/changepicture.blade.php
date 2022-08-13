<link rel="stylesheet" href="/css/delivery/changepicture.css">

@extends('delivery.layout.dashboard')
@section('dashboard_content')
<form enctype="multipart/form-data" action="{{route('delivery.changepicture')}}" method="post">
{{csrf_field()}}
<div class="frame">
	<div class="center">
		<div class="title">
			<h1>Drop file to upload</h1>
		</div>

		<div class="dropzone">
			<img src="http://100dayscss.com/codepen/upload.svg" class="upload-icon" />
			<input type="file" name="image" class="upload-input" />
		</div>

		<button type="submit" class="btn" name="uploadbutton">Upload file</button>
        <div class="error">
         @error('image')
                <span class="text-danger">{{$message}}</span>
        @enderror
     </div>

	</div>
   
</div>
</form>

@endsection