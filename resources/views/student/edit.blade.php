@extends('master ')
@section('content')
<div class="container">
	<div class="notification is primary">
 <h1 class="title is-size-3" style="margin-top:15px;">EDIT DATA</h1>
   @if(count($errors) > 0)
   <div Class="notification is-danger">
      <ul>
         @foreach($errors->all() as $error)
         <li>{{$error}}</li>
         @endforeach
      </ul>


   </div>

   @endif


   <form method="post" action="{{ action('studentcontroller@update', $student->id) }}">
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
   	<div class="form-group">
   		<input type="submit" class="button is-dark" value="Edit"/>
   		
</div>   	
</form>
</div>
</div>

@endsection