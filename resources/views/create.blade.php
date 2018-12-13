@extends('master')

@section('content')

  
  <div class="notification is-black">
  <h1 class="title is-size-4" style="margin-top:5px;">STUDENT REGISTRATION</h1>
  
 </div>
   <div class="container">
  <div class="notification is-primary">
   <div class="column is-4 content">
   
   @if(count($errors) > 0)
    <div class="notification is-danger">
     <ul>
     	@foreach($errors->all() as $error)
     	<li>{{$error}}</li>
        @endforeach
     </ul>
 @endif
    @if(\Session::has('success'))
    <div class="notification is-success">
        <p>{{\session::get('success')}}</p>
    
 </div>

@endif
    </div>

   <form method="post" action="{{url('student')}}">
   	{{csrf_field()}}
   	<div class="form-group">
   		<label class="label">User Name</label>
   		<input type="text" name="first_name" class="form-control" placeholder="Enter First Name"/>
   	      	<input type="text" name="last_name" class="form-control" placeholder="Enter Last Name" />
      </div>

      
      <div class="control has-text-right">
              <a href="/student/create" class="button is-light">Cancel</a>
              <button class="button is-dark">Save</button>
            </div>



   </form>
  </div> 
</div>








@endsection