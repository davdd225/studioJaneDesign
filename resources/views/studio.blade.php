@extends('layouts.layout')
@section('content')  
<div class="py-vh-5 w-100 overflow-hidden ">
    <div class="row  justify-content-center ">   
     <div class="col-12 ">
        <div class="hero-image" data-aos="fade-right">
            <div class="hero-text">
                <h1 style="font-size:80px">Travaux et réalisation</h1>
            </div>
            </div>
        </div>
    </div>
</div>

<div class="py-vh-2 w-100 container-fluid">
    <div class="row">
    <div class="gallery-image" data-aos="fade-left">
        @foreach ($services as $index => $service)
            @php
                $class = $classe[$index % count($classe)];
                // Utilisation de glob pour rechercher des fichiers dans le répertoire images_service_jane
                 $files = glob($service->images_service_jane.'/*.*')[0];            
            @endphp
            <div class="img-box {{ $class }}">
                <a href="{{ url('studio/galerie/'.$service->id_service_jane) }}">
                    <img src="{{asset($files)}}" alt="" />
                
                <div class="transparent-box">
                    <div class="caption">
                        <p>{{ $service->nom_service_jane }}</p>
                        <p class="opacity-low">Architect Design</p>
                    </div>
                </div>
                </a>
            </div>
        @endforeach
    </div>
</div>
</div>


@endsection