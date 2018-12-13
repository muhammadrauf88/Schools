@extends('master ')
@section('content')
<div class="notification is-black">         
<h1 class="title is-size-4" style="margin-top:5px;">EDIT DATA</h1> 

</div>
<div class="container">
	<div class="notification is-primary">
 
   @if(count($errors) > 0)
   <div Class="notification is-danger">
      <ul>
         @foreach($errors->all() as $error)
         <li>{{$error}}</li>
         @endforeach
      </ul>


   </div>

   @endif


   <!-- <form method="post" action="{{ action('studentcontroller@update', $id) }}"> -->
      <form method="post" action="{{ route('student.update', $id) }}">
   	 {{csrf_field()}}



   	<input type="hidden" name="_method" value="PATCH"/>
   	<div class="form-group">
   		<input type="text" name="first_name" class="form-control" value="{{$student->first_name}}" placeholder="Enter First Name"/>
   	</div>
   	<div class="form-group">
   		<input type="text" name="last_name" class="form-control"
         value="{{$student->last_name}}" placeholder="Enter Last Name"
   		 />
   	</div>

    <br>
    <br>  
   	<div class="form-group">
         <a href="/student" class="button is-primary">Cancel</a>
   		<input type="submit" class="button is-dark" value="Edit"/>
   		
</div>   	
</form>
</div>
</div>

@endsection