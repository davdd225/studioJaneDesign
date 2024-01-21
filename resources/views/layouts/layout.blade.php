<!doctype html>
<html class="h-100" lang="en">

  <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
      <title>Studio Jane design</title>
      <link href="{{url('https://db.onlinewebfonts.com/c/8922aedb2c18008da7daf4f93fd60bdc?family=Calibri+Light')}}" rel="stylesheet">
      <link href="{{url('https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css')}}" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
      <link rel="icon" href="{{asset('/img/ja.ico')}}" type="image/xl-icon">
      <link rel="stylesheet" href="{{asset('css/theme.min.css')}}">
      <link rel="stylesheet" href="{{asset('css/JansStyle.css')}}">
      <link rel="stylesheet" href="{{asset('css/carousel.css')}}">
      


      <style>
        /* inter-300 - latin */
        @font-face {
          font-family: 'Inter';
          font-style: normal;
          font-weight: 300;
          font-display: swap;
          src: local(''),
              url('./fonts/inter-v12-latin-300.woff2') format('woff2'), /* Chrome 26+, Opera 23+, Firefox 39+ */
              url('./fonts/inter-v12-latin-300.woff') format('woff'); /* Chrome 6+, Firefox 3.6+, IE 9+, Safari 5.1+ */
        }

        @font-face {
          font-family: 'Inter';
          font-style: normal;
          font-weight: 500;
          font-display: swap;
          src: local(''),
              url('./fonts/inter-v12-latin-500.woff2') format('woff2'), /* Chrome 26+, Opera 23+, Firefox 39+ */
              url('./fonts/inter-v12-latin-500.woff') format('woff'); /* Chrome 6+, Firefox 3.6+, IE 9+, Safari 5.1+ */
        }
        @font-face {
          font-family: 'Inter';
          font-style: normal;
          font-weight: 700;
          font-display: swap;
          src: local(''),
              url('./fonts/inter-v12-latin-700.woff2') format('woff2'), /* Chrome 26+, Opera 23+, Firefox 39+ */
              url('./fonts/inter-v12-latin-700.woff') format('woff'); /* Chrome 6+, Firefox 3.6+, IE 9+, Safari 5.1+ */
       }
    </style>
  </head>
     <body data-bs-spy="scroll" data-bs-target="#navScroll">   
       @include('layouts.partial.header')
       <main>
        @yield('content')
       </main>
       @include('layouts.partial.footer')
       <script src="{{url('https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js')}}" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
       <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
       <script src="{{asset('js/aos.js')}}"></script>
       <script>
            AOS.init({
            duration: 800, // values from 0 to 3000, with step 50ms
            });
        </script>
        <script>
            let scrollpos = window.scrollY
            const header = document.querySelector(".navbar")
            const header_height = header.offsetHeight
            const add_class_on_scroll = () => header.classList.add("scrolled", "shadow-sm")
            const remove_class_on_scroll = () => header.classList.remove("scrolled", "shadow-sm")
            window.addEventListener('scroll', function() {
                scrollpos = window.scrollY;
                if (scrollpos >= header_height) { add_class_on_scroll() }
                else { remove_class_on_scroll() }
                console.log(scrollpos)
            })
       </script>
  </body>
</html>
