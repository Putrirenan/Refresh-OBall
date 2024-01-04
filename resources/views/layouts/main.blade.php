<!doctype html>
<html class="scroll-smooth">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link rel="icon" href="{{ asset('assets/logo.png') }}">
  @vite('resources/css/app.css')
  <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
  <script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
</head>
<body id="body">


  <main>
    @yield('container')
  </main>
  

  <script>
    
    let menu = document.getElementById("profile-menu")
    
    
    

    function openProfile() {
      if(menu.classList.contains("hidden")) {
        menu.classList.remove("hidden")
      }else {
        menu.classList.add("hidden")
      }
    }
    
      window.onclick = function(event) {
        let btnMenu = document.getElementById("btn-profile")
        if(!btnMenu.contains(event.target) && !btnMenu.classList.contains("hidden")){
          menu.classList.add("hidden")
        }
      }
  
  </script>

<script>

  window.onload = function(){
 document.getElementById('btnModalRegister').click();
}

</script>
  
  
  </body>
  </html>