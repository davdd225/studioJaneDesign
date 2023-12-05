@extends('layouts.layout')
@section('content')
        <div class="py-vh-5 w-100 overflow-hidden ">
            <div class="row  justify-content-center ">   
                <div class="col-12 ">
                <div class="hero-image"  data-aos="fade-right">
                    <div class="hero-text">
                        <h1 style="font-size:80px">Nos meubles sur commande</h1>
                    </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row d-flex justify-content-center">
            <div class="col-12  text-center">
                <h2 class="display-6">Loved by people all around the globe</h2>
            </div>
        </div>
        <div class="py-vh-5 w-100 container-fluid">
           <div class="gallery-image">
           @foreach($furnitureCommande as $commande)     
              @php
                 $imgPressDirectory = glob($commande->furniture_images.'/*.*')[0]; 
              @endphp
                <div class="img-box">
                    <a href="{{url('press/details/'.$commande->id_funiture)}}">
                    <img src="{{asset($imgPressDirectory)}}" alt="" />
                    <div class="transparent-box">
                        <div class="caption">
                            <p>Library</p>
                            <p class="opacity-low">Architect Design</p>
                        </div>  
                    </div> 
                    </a>
                </div>
            @endforeach
      </div>
</div>  


@endsection

