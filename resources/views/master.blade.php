<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Schools</title>


    <!-- Bulma -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.2/css/bulma.min.css">

    <!-- FontAwesome (icons)  -->
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>

    <!-- jQuery  -->
    <script
      src="https://code.jquery.com/jquery-3.3.1.js"
      integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
      crossorigin="anonymous">
    </script>

             <nav class="navbar is-light" style="position:fixed; width:100%; ">
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






    <style>
      .card-footer {
  background-color:#e1edeb;        
  position:fixed;       
  left: 0;
  bottom: 0;
  width: 100%;
  text-align: center;
      }
    </style>
  </head>
  <body>
  <section class="section">
    <div class="container">
      @yield('content')
    </div>
  </section>
  <footer class="card-footer">
    <div class="card-footer-item">
      <p>
        <strong>Student Registration</strong> by <strong>Muhammad Rauf
        </strong>. The source code is licensed
        The website content is licensed <strong>CC BY NC SA 4.0</strong>.
        
      </p>
    </div>
  </footer>
  
  </body>
  
</html>

