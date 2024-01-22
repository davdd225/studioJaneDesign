@extends('layouts.layout')
@section('content') 


<section class=" objet-figure">
<div class="py-vh-5  overflow-hidden">
    <div class="container text-contente ">
        <div class="row d-flex ">
            <div class="col-md-6  ">
                <div class="py-vh-5 ">
                    <h1 class="display-2 text-figure  mb-5" data-aos="fade-down">Travaux et réalisation</h1>
                    <p class="text-p-jane text-justify mb-5" data-aos="fade-up">
                    Nos réalisations, témoigne notre passion pour l'artisanat et l'excellence. 
                    Chaque projet reflète notre dévouement à créer des espaces intérieurs à la fois élégants et fonctionnels.
                    </p>
                    <div class="buton-center-jane">
                    <a href="#studio-section" class= " mb-5 btn btn-xl shadow me-3 btn-jane-chaise mb-4"  data-aos="fade-up">Voir plus</a> <!-- Espacement avec mb-4 -->
                    </div>
                </div>

            </div>

            <div class="col-6  " >
                <figure class="containre-figure " data-aos="fade-left">
                        <div class="img-comp-container ">
                            <div class="img-comp-img shadow">
                                <img src="{{asset('img/ja/renive_2.jpg')}}" alt="" width="550" height="720">
                            </div>
                            <div class="img-comp-img img-comp-overlay ">
                                <img src="{{asset('img/ja/renove_1.jpg')}}" alt=""width="550" height="720">
                            </div>
                        </div>
                </figure 
            </div>
        </div>
    </div>
</div>
</section>
    <div class="py-vh-5 w-100 container-fluid" id="studio-section">
        <div class="row">
        <div class="gallery-image" data-aos="fade-left">
    @foreach ($services as $index => $service)
        @php
            $class = $classe[$index % count($classe)];
            $files = glob($service->images_service_jane.'/*.*');
            // Vérification de l'existence d'une image dans le dossier
            if (count($files) > 0 && file_exists($files[0])) {
                $imagePath = asset($files[0]);
            } else {
                $imgchemain = 'img\\img-press\\';
                $imagePath = glob($imgchemain.'/*.*')[0];
                
            }
        @endphp
        <div class="img-box {{ $class }}">
            <a href="{{ url('studio/galerie/'.$service->id_service_jane) }}">
                <img src="{{ $imagePath }}" alt="" />
            
                <div class="transparent-box">
                    <div class="caption">
                        <p class="text-for-img">{{ $service->nom_service_jane }}</p>
                        <p class="color-opacity">Interieur design</p>
                    </div>
                </div>
            </a>
        </div>
    @endforeach
</div>

    </div>
    </div>

<script>
function initComparisons() {
  var x, i;
  /*find all elements with an "overlay" class:*/
  x = document.getElementsByClassName("img-comp-overlay");
  for (i = 0; i < x.length; i++) {
    /*once for each "overlay" element:
    pass the "overlay" element as a parameter when executing the compareImages function:*/
    compareImages(x[i]);
  }
  function compareImages(img) {
    var slider, img, clicked = 0, w, h;
    /*get the width and height of the img element*/
    w = img.offsetWidth;
    h = img.offsetHeight;
    /*set the width of the img element to 50%:*/
    img.style.width = (w / 2) + "px";
    /*create slider:*/
    slider = document.createElement("DIV");
    slider.setAttribute("class", "img-comp-slider");
    /*insert slider*/
    img.parentElement.insertBefore(slider, img);
    /*position the slider in the middle:*/
    slider.style.top = (h / 2) - (slider.offsetHeight / 2) + "px";
    slider.style.left = (w / 2) - (slider.offsetWidth / 2) + "px";
    /*execute a function when the mouse button is pressed:*/
    slider.addEventListener("mousedown", slideReady);
    /*and another function when the mouse button is released:*/
    window.addEventListener("mouseup", slideFinish);
    /*or touched (for touch screens:*/
    slider.addEventListener("touchstart", slideReady);
    /*and released (for touch screens:*/
    window.addEventListener("touchend", slideFinish);
    function slideReady(e) {
      /*prevent any other actions that may occur when moving over the image:*/
      e.preventDefault();
      /*the slider is now clicked and ready to move:*/
      clicked = 1;
      /*execute a function when the slider is moved:*/
      window.addEventListener("mousemove", slideMove);
      window.addEventListener("touchmove", slideMove);
    }
    function slideFinish() {
      /*the slider is no longer clicked:*/
      clicked = 0;
    }
    function slideMove(e) {
      var pos;
      /*if the slider is no longer clicked, exit this function:*/
      if (clicked == 0) return false;
      /*get the cursor's x position:*/
      pos = getCursorPos(e)
      /*prevent the slider from being positioned outside the image:*/
      if (pos < 0) pos = 0;
      if (pos > w) pos = w;
      /*execute a function that will resize the overlay image according to the cursor:*/
      slide(pos);
    }
    function getCursorPos(e) {
      var a, x = 0;
      e = (e.changedTouches) ? e.changedTouches[0] : e;
      /*get the x positions of the image:*/
      a = img.getBoundingClientRect();
      /*calculate the cursor's x coordinate, relative to the image:*/
      x = e.pageX - a.left;
      /*consider any page scrolling:*/
      x = x - window.pageXOffset;
      return x;
    }
    function slide(x) {
      /*resize the image:*/
      img.style.width = x + "px";
      /*position the slider:*/
      slider.style.left = img.offsetWidth - (slider.offsetWidth / 2) + "px";
    }
  }
}
</script>


<script>
/*Execute a function that will execute an image compare function for each element with the img-comp-overlay class:*/
initComparisons();
</script>




@endsection