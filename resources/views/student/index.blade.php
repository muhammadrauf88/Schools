@extends('master')

@section('content')
<nav class="navbar is-light">
  <div class="navbar-brand">
    <a class="navbar-item" >
      <img src="{{ asset('images/download.png') }}" width="112" height="28">
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
      <h1 class="title is-size-6" style="margin-top:15px;">Student Data 
      </h1>
      </a>

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
          <p class="control">
            <a class="button is-primary" href="">
              <span class="icon">
                <i class="fas fa-download"></i>
              </span>
              <span>Download</span>
            </a>
          </p>
        </div>
      </div>
    </div>
  </div>
</nav>
<div class="container">
  <div class="notification is-primary">
    <h1 class="title is-size-3" style="margin-top:15px;">STUDENT DATA</h1>
    
      <table class="table table-bordered">
    <tr>
    	<th>First Name</th>
    	<th>Last Name </th>  
      <th>Created Time</th>
    	<th>Edit</th>
    	<th>Delete</th>
    </tr>
    @foreach($students as $row)
      <tr>
      	<td>{{$row['first_name']}}</td>
      	<td>{{$row['last_name']}}</td>
        <td>{{$row['created_at']}}</td>
      	<td><a href="{{action('studentcontroller@edit' , $row['id'])}}"
<a class="button is-warning">Edit </a></a></td>
      	<td></td>

      </tr>
    @endforeach	
   </table>  
  </div>
</div>




@endsection