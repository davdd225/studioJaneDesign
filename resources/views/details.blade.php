@extends('layouts.layout')
@section('content')
    <div class="w-100 overflow-hidden bg-gray-100" id="top">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6  position-relative" data-aos="fade-right">
                <!-- CAROUSEL -->             
                    <div class="images p-4 details-jane-carousel margin-details-jane">
                            <div class="image-jane-center">
                                 @php
                                    $imgFirst = glob($furniture->furniture_images.'/*.*')[0];
                                @endphp
                                <img id="main-image"  src="{{asset($imgFirst)}}" width="500" /> 
                            </div>
                            <div class="thumbnail text-center">
                                @foreach (glob($furniture->furniture_images.'/*.*') as $funritures)
                                <img onclick="change_image(this)" src="{{asset($funritures)}}" width="70">
                                @endforeach
                            </div>
                    </div>               
              <!--  -->
                </div>              
                <div class="col-lg-6 py-vh-6  " data-aos="fade-left">
                <!-- CAROUSEL -->
                  <span class="details-positon-jane ">TW0 SEAT ZIKA LOUNGER</span>
                    <div class="details-jane ">
                        <div class="col-lg-8" widht="180"  >
                        <P class="margin-jane-text">Bien sûr ! Je peux vous donner des informations sur ChatGPT. ChatGPT est un modèle de traitement automatique du langage naturel (NLP) développé par OpenAI, 
                         basé sur l'architecture GPT-3.5. Il est conçu pour comprendre et générer du texte <br> en langage 
                         naturel, ce qui lui permet d'interagir avec les utilisateurs de manière conversationnelle.</P> 
                         </div>
                     <hr style="margin-top:7%;">
                    </div>                    
                    <!--  -->
                  </div>
               </div>
         </div>
    </div>
    
    <script>
        function change_image(image){
        var container = document.getElementById("main-image");
        container.src = image.src;
        }
        document.addEventListener("DOMContentLoaded", function(event) {
        });
    </script>
@endsection