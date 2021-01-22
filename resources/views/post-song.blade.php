<!DOCTYPE html>
<html>
<head>
	<title>Add-Song-To-Album</title>
	<link rel="stylesheet" type="text/css" href="luck.css">
</head>
<body>
	@if($message = Session::get('success'))
	<div class="success">
        {{$message}}
        	</div>
	@endif
{!! Form::open(['action'=>'AlbumsController@store', 'method'=>'POST','enctype'=>'multipart/form-data']) !!}

<div id="myform">
<div class="ad1">
		{{Form::label('title','Song Name')}}
		{{Form::text('title','',['name'=>'title'])}}
		<p style="color:red">@error('title'){{$message}}@enderror</p>
	</div>

	<div class="ad1">
		{{Form::label('youtube','Youtube Link')}}
		{{Form::text('youtube','',['placeholder'=>'Place youtube link here....'])}}
		<p style="color:red">@error('youtube'){{$message}}@enderror</p>
	</div>

<div class="ad1">
		{{Form::label('release','Release Date')}}
		{{Form::text('release','',['placeholder'=>'E.g 12/01/2021....'])}}
		<p style="color:red">@error('release'){{$message}}@enderror</p>
	</div>
<div class="ad1">
	    {{Form::submit('submit',['class'=>'admsubmit','placeholder'=>'POST'])}}
	   </div>
	</div>

       {!! Form::close() !!}
</body>
</html>
