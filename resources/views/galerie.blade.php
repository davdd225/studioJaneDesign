@extends('layouts.layout')
@section('content')  
<div class="py-vh-5 w-100 container-fluid">
           <div class="gallery-image"  data-aos="fade-right">
           @foreach(glob($meubleUnique->images_service_jane.'/*.*') as $meubleUniques)     
                <div class="img-box">               
                    <img src="{{asset($meubleUniques)}}" alt="" />
                    <div class="transparent-box">
                        <div class="caption">
                            <p>Library</p>
                            <p class="opacity-low">Architect Design</p>
                        </div>  
                    </div>             
                </div>
            @endforeach
      </div>

@endsection