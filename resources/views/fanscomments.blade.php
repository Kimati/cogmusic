<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div class="comment-form">
		@if($message = Session::get('success'))
		<div class="success">
            {{$message}}
	   </div>
	   @endif
				
    {!! Form::open(['url'=>'/comment_store','enctype'=>'multipart/form-data']) !!}
    <div class="form-group">
	{{Form::label('Fname','First Name')}}
	{{Form::text('Fname', '', ['class' => 'form-control','placeholder'=>'First Name'])}}
	<!-- {{Form::text('product', '', ['class' => 'form-control','placeholder'=>'E.g Phone...'])}} --> 
	<p style="color:red">@error('Fname'){{$message}}@enderror</p> 
    </div>

   <div class="form-group">
	{{Form::label('Sname','Second Name')}}
	{{Form::text('Sname', '', ['class' => 'form-control','placeholder'=>'Second Name'])}}
	<!-- {{Form::text('product', '', ['class' => 'form-control','placeholder'=>'E.g Phone...'])}} --> 
	<p style="color:red">@error('Sname'){{$message}}@enderror</p> 
   </div>

      <div class="form-group">
	{{Form::label('phone','Phone Number')}}
	{{Form::text('phone', '', ['class' => 'form-control','placeholder'=>'Your valid phone number'])}}
	<p style="color:red">@error('phone'){{$message}}@enderror</p>
   </div>

   <div class="form-group">
	{{Form::label('email','Enter Email')}}
	{{Form::email('email', '', ['class' => 'form-control','placeholder'=>'Your Email address...'])}}
	<p style="color:red">@error('email'){{$message}}@enderror</p> 
   </div>

   <div class="form-group">
	{{Form::label('comment','Your Comment')}}
	{{Form::textArea('comment', '', ['class' => 'form-control','placeholder'=>'i.e Write Your Comments ...'])}}
	<p style="color:red">@error('comment'){{$message}}@enderror</p>
   </div>

	<div class="form-group">
 {{Form::submit('submit',['class'=>'btn btn-primary'])}}
     </div>
    {!! Form::close() !!}
	</div>
	<a href="{{url('Home')}}"><button type="submit">Home</button></a>


</body>
</html>