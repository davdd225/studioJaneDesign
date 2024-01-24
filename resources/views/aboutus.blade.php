
@extends('layouts.layout')
@section('content')

    <div class="row py-vh-5  justify-content-center back-apropos ">   
        <div class="col-12 ">
            <div class="hero-image-3" data-aos="fade">
                <div class="hero-text-about-2">
                    <h1 style="font-size:100px">A PROPOS... </h1>
                </div>
                </div>
            </div>
        </div>
    </div>
    <div class="py-vh-5 w-100">
           <div class="d-flex justify-content-center"  data-aos="fade-up">
              <h1 class="size-apropos fw-light ">COMMENT CA MARCHE</h1> 
           </div>
    </div>
  
<!-- debut ça -->
   
    <div class="  w-100 overflow-hidden">     
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-lg-4 border-end" data-aos="fade-up">
            <div class="d-flex">
              <div class="col-md-3 flex-fill pt-3 pe-3 pe-md-0">
              <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 15 15"><path fill="black" fill-rule="evenodd" d="M0 0h4.651l3.126 2.084l-.554.832L4.349 1H1v13h5V8H4V7h5v1H7v6h7V8h-2V7h2V1h-4V0h5v15H0V0Z" clip-rule="evenodd"/></svg>              </div>
              <div class="col-md-9 flex-fill">
                <h3 class="h2 my-2 mb-5">Planification</h3>
                <div class="text-apropos-2">
                  <ul>
                    <li class="mb-3">Collaboration avec le client pour comprendre les besoins et aspirations.</li>
                    <li>Élaboration détaillée du plan de construction, jetant les bases solides du projet..</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 border-end" data-aos="fade-up" data-aos-delay="200">
            <div class="d-flex">
              <div class="col-md-3 flex-fill pt-3 pt-3 pe-3 pe-md-0">
              <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 48 48"><path fill="black" stroke="black" stroke-linecap="round" stroke-linejoin="round" stroke-width="4" d="M8 7.282L19.556 4v12.718L8 20V7.282Zm0 18.393l11.556-3.282v12.718L8 38.393V25.675Zm16.889-4.599l11.555-2.854v22.924L24.89 44V21.076Z"/></svg>
              </div>
              <div class="col-md-9 flex-fill">
                <h3 class="h2 my-2 mb-5">Design</h3>
                <div class="text-apropos-2">
                  <ul>
                    <li class="mb-3">Traduction de la vision planifiée en réalité virtuelle.</li>
                    <li>Modélisation 3D pour offrir un aperçu détaillé et permettre des ajustements précis.</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="400">
            <div class="d-flex">
              <div class="col-md-3 flex-fill pt-3 pt-3 pe-3 pe-md-0">
               <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 32 32"><path fill="black" d="m29.92 16.61l-3-7A1 1 0 0 0 26 9h-3V7a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v17a1 1 0 0 0 1 1h2.14a4 4 0 0 0 7.72 0h6.28a4 4 0 0 0 7.72 0H29a1 1 0 0 0 1-1v-7a1 1 0 0 0-.08-.39ZM23 11h2.34l2.14 5H23ZM9 26a2 2 0 1 1 2-2a2 2 0 0 1-2 2Zm10.14-3h-6.28a4 4 0 0 0-7.72 0H4V8h17v12.56A4 4 0 0 0 19.14 23ZM23 26a2 2 0 1 1 2-2a2 2 0 0 1-2 2Zm5-3h-1.14A4 4 0 0 0 23 20v-2h5Z"/></svg>
              </div>
              <div class="col-md-9 flex-fill">
                <h3 class="h2 my-2 mb-5">Construction et Livraison</h3>
                <div class="text-apropos-2">
                  <ul>
                    <li class="mb-3">Passage à la phase de construction avec des plans détaillés et des modèles 3D.</li>
                    <li class="mb-3">Façonnage précis de chaque élément en utilisant des matériaux de qualité et un savoir-faire exceptionnel.</li>
                    <li>Livraison du projet conformément aux délais fixés, avec une attention particulière à la qualité finale pour dépasser les attentes du client</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        
    </div>
    <div class="py-vh-5 w-100">
           <div class="d-flex justify-content-center"  data-aos="fade-up">
              <h1 class="size-apropos fw-light ">NOS VALEURS</h1> 
           </div>
    </div>
    <div class=" container opy-vh-5 w-100" ">
      <div class="row"> 
          <div class="col-md-6 col-md-5 col-lg-6  ">
            <img src="{{asset('img/ja/JoeleA.jpg')}}" class="img-fluid  p-3 pt-0 ps-0" alt="article image" data-aos="fade" >
          </div>
          <div class="col-sm-6 col-md-5 offset-md-2 col-lg-6 offset-lg-0">
                 <p class="text-propos  p-3 pt-0 ps-0">
                   Studio Jane Design incarne l'excellence dans le design et l'architecture, fondée sur des conceptions robustes et une minutie exceptionnelle, avec une approche profondément enracinée dans les principes modernistes. Chaque projet, méticuleusement élaboré, témoigne de l'engagement de Studio Jane à créer des espaces à la fois stylistiquement intemporels et fonctionnellement pérennes.
                </p>
          </div>
        </div>
      </div>        
   </div>
       <!--FIN ca  -->
       <div class="py-vh-2 mb-5 mt-5 w-100">
           <div class="d-flex justify-content-center">
           <h2 class="size-apropos fw-light ">EQUIPE</h2> 
           </div>
       </div>
     <div class="body-team-jane hero-image-2">
        <div class="container">
            <div class="row  d-flex justify-content-center">
            <!-- 1st member -->
            <div class="col-md-3 col-sm-6 ">
                <div class="jane-team  " data-aos="fade-up">
                <div class="pic-jane ">
                    <img src="{{asset('img/joele_agouassi.jpg')}}" alt="" class="shadow">
                </div>
                <h3 class="title-team">Joele Agouassi</h3>
                <span class="post-team">Interieur design </span>
                <!-- sociel icon -->
                <ul class="social">
                  
                    <li><a href="{{url('https://www.facebook.com/joeleMobilier?mibextid=LQQJ4d')}}" ><svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="currentColor" class="bi bi-meta" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M8.217 5.243C9.145 3.988 10.171 3 11.483 3 13.96 3 16 6.153 16.001 9.907c0 2.29-.986 3.725-2.757 3.725-1.543 0-2.395-.866-3.924-3.424l-.667-1.123-.118-.197a55 55 0 0 0-.53-.877l-1.178 2.08c-1.673 2.925-2.615 3.541-3.923 3.541C1.086 13.632 0 12.217 0 9.973 0 6.388 1.995 3 4.598 3q.477-.001.924.122c.31.086.611.22.913.407.577.359 1.154.915 1.782 1.714m1.516 2.224q-.378-.614-.727-1.133L9 6.326c.845-1.305 1.543-1.954 2.372-1.954 1.723 0 3.102 2.537 3.102 5.653 0 1.188-.39 1.877-1.195 1.877-.773 0-1.142-.51-2.61-2.87zM4.846 4.756c.725.1 1.385.634 2.34 2.001A212 212 0 0 0 5.551 9.3c-1.357 2.126-1.826 2.603-2.581 2.603-.777 0-1.24-.682-1.24-1.9 0-2.602 1.298-5.264 2.846-5.264q.136 0 .27.018Z"/>
                    </svg></li></a>

                    </ul>
                </div>
            </div>
            </div>
        </div>
     </div>
     <section class="bg-3d">
      <div class="py-vh-3 w-100">
            <div class="d-flex justify-content-center">
            <h3 class="size-apropos  fw-light text-3d">EXPLORATION VIRTUELLE</h3> 
            </div>
        </div>
        
        <div class="container py-vh-4 w-100 overflow-hidden ">
                    <div class="row d-flex justify-content-center align-items-center">
                      <div class="col-lg-5">
                      <h3 class="py-5 border-top border-light text-3d" data-aos="fade-right"> Visité Studio jane design en 3D</h3>
                  </div>
                    <div class="col-md-7" data-aos="fade-left">
                      <blockquote>
                        <div class="fs-4 my-3 fw-light pt-4  pb-1 text-3d ">Cliquez sur le bouton ci-dessous et plongez dans notre studio en trois dimensions. La décoration intérieure va bien au-delà des meubles. Grâce à notre collection, personnalisez chaque détail, des textiles aux accessoires, pour créer un espace qui reflète véritablement votre style unique</div>
                      </blockquote>
                      
                    </div>
                    <div class="row d-flex justify-content-start align-items-start">
                      <div class="col-12  d-flex justify-content-start align-items-start  " data-aos="fade-up">
                          <div class=" col-12 details-btn-jane">
                              <a  href="{{url('https://webobook.com/public/631a84d48f912f52eb4d7ac2,en')}}" class="btn  btn-xl shadow me-3 btn-jane-chaise-2 my-5">
                              Studio jane design
                              </a>
                          </div> 
                      </div>
                    </div>
                  </div>
          </div>
      </section>

@endsection