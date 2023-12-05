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
                        <div class="details-btn-jane">
                            <button type="button" class="btn btn-dark btn-xl shadow me-3 rounder-jane my-5" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                           Commander
                            </button>
                        </div>                  
                    <!-- Modal -->
                    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="staticBackdropLabel">Commande</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body ">
                                @if (session('success'))
                                <div class="custom-alert alert-success">
                                    <div class="alert-content">
                                        <button class="close-button" onclick="closeAlert(this)">  {{ session('success') }} &ensp; &times;</button>
                                    </div>
                                </div> 
                                @endif 
                                <form id="form" class="row form" onsubmit="return validateForm()" method="POST" action="{{ url('/contact') }}">
                                    @csrf
                                    <div class="contact-section">
                                        <div class="mb-3">
                                        <label for="name" class="form-label">Nom</label>
                                        <input type="text" class="form-control form-control-lg" id="name" name="name" required>
                                        </div>
                                        <div class="mb-3">
                                        <label for="firstName" class="form-label">Prénom</label>
                                        <input type="text" class="form-control form-control-lg" id="firstName" name="firstName" required>
                                        </div>
                                        <div class="mb-3">
                                        <label for="number" class="form-label">Numéro de Téléphone</label>
                                        <input type="tel" class="form-control form-control-lg" id="number" name="number" required>
                                        </div>
                                        <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Adresse Email</label>
                                        <input type="email" class="form-control form-control-lg" id="exampleInputEmail1" name="email" required>
                                        </div>
                                        <div class="mb-3">
                                        <label for="message" class="form-label">Message</label>
                                        <textarea class="form-control form-control-lg" id="message" name="message" required></textarea>
                                        </div>
                                        <p class="small text-muted">En créant un compte, vous acceptez nos conditions d'utilisation bien cachées. Elles sont quelque part ici... pour des raisons légales... mais vous ne les trouveriez pas!</p>
                                        <button type="submit" class="btn btn-dark btn-xl shadow me-3 rounder-jane my-5">Envoyer</button>                    
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Understood</button>
                            </div>
                            </div>
                        </div>
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