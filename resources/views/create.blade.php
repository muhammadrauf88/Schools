@extends('master')

@section('content')
<nav class="navbar is-light">
  <div class="navbar-brand">
    <a class="navbar-item" >
      <img src="{{ asset('images/download.png') }}" alt="Apple"  width="150" height="30">
    </a>
    
    <div class="navbar-burger burger" data-target="navbarExampleTransparentExample">
      <span></span>
      <span></span>
      <span></span>
    </div>
  </div>

  <div id="navbarExampleTransparentExample" class="navbar-menu">
    <div class="navbar-start">
      <a class="navbar-item" href="/student/create">
        <h1 class="title is-size-6" style="margin-top:15px;">Home</h1>
      </a>
      <div id="navbarExampleTransparentExample" class="navbar-menu">
    <div class="navbar-start">
      <a class="navbar-item" href="/student">
      <h1 class="title is-size-6" style="margin-top:15px;">Student Data</h1>
      </a>

    
  </div>

<div class="navbar-end">
      <div class="navbar-item">
        <div class="field is-grouped">
          <p class="control">
            <a class="bd-tw-button button" data-social-network="Twitter" data-social-action="tweet" data-social-target="http://localhost:4000" target="_blank" href="https://twitter.com/intent/tweet?text=Bulma: a modern CSS framework based on Flexbox&amp;hashtags=bulmaio&amp;url=http://localhost:4000&amp;via=jgthms">
              <span class="icon">
                <i class="fab fa-twitter"></i>
              </span>
              <span>
                Tweet
              </span>
            </a>
          </p>
          
        </div>
      </div>
    </div>



</nav>


<div class="container">
  <div class="notification is-primary">
   <div class="column is-3 content">
          <h1 class="title is-size-4" style="margin-top:20px;">STUDENT REGISTRATION</h1>

   
   
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