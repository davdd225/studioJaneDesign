@extends('layouts.layout')
@section('content')

      <section class="carousel-container py-vh-5 jane-img-bg-1">
          <div class="carousel">
            <div class="carousel-slide">
              <img src="{{asset('img\img-carousel\img_1.jpg')}}" alt="Image 1" class="carousel-img" >
              <!-- <div class="carousel-text shadow ">Salle à manger</div> -->
            </div>
            <div class="carousel-slide">
              <img src="{{asset('img\img-carousel\img_2.jpg')}}" alt="Image 2" class="carousel-img">
              <!-- <div class="carousel-text ">Salon </div> -->
            </div>
            <div class="carousel-slide">
              <img src="{{asset('img\img-carousel\img_4.jpg')}}" alt="Image 3" class="carousel-img">
              <!-- <div class="carousel-text"> Sale de bain </div> -->
            </div>
          </div>
        </section>
        <section class="jane-img-bg-1">
            <div class="container d-flex justify-content-center align-items-center">
                <div class="row align-items-center mb-5">
                    
                    <!-- Colonne pour le texte -->
                    <div class="col-md-6 d-flex justify-content-center align-items-center" data-aos="fade-down">
                        <div class="text-center">
                            <h3 class="display-2 mb-4 text-jane-catealogue">Transformez votre espace avec Studio JANE design</h3>
                            <p class="text-p-jane text-justify mb-5" data-aos="fade-up">
                                Nous ne proposons pas seulement des meubles et des décorations intérieures, mais des pièces qui racontent des histoires, qui capturent des moments et qui créent des souvenirs. Explorez notre collection pour découvrir comment chaque article peut transformer votre espace en un sanctuaire de confort et de style.
                            </p>
                            <a href="#studio-section" class= " mb-5 btn btn-xl shadow me-3 btn-jane-chaise mb-4">Voir plus</a> <!-- Espacement avec mb-4 -->
                        </div>
                    </div>

                    <!-- Colonne pour l'image -->
                    <div class="col-md-6 d-flex justify-content-center align-items-center" data-aos="fade-right">
                        <div class="text-center jane-img-bg custum-cocotier">
                            <img class="jane-img img-fluid mb-5  shadow" src="{{asset('img/ja/acceuil_img_3.jpg')}}" alt="">
                        </div>
                    </div>
                    
                </div>
            </div>
        </section>


        <div class=" w-100 overflow-hidden jane-img-bg-1" id="numbers">
          <div class="w-100 overflow-hidden bg-carousel" id="studio-section">
          <div class="w-100 overflow-hidden bg-jane-100 " id="top">
              <br>
              <br>
              <br> 
              <div class="container position-relative ">     
                </div>
                <div class="py-vh-5 bg-jane-100 w-100 overflow-hidden" id="aboutus">
                  <div class="container">
                      <div class="row d-flex justify-content-between align-items-center">
                        <div class="col-lg-6">
                        <div class="row gx-5 d-flex">
                          <div class="col-md-11">
                            <div class=" ratio ratio-16x9 rounded bg-cover bp-center align-self-end" data-aos="fade-right" style="background-image: url('img/ja/photo_2023-06-21_17-41-37 (2).jpg'); --bs-aspect-ratio: 50%;">
                            </div>
                          </div>
                          <div class="col-md-5 offset-md-1">
                            <div class="shadow ratio ratio-1x1 rounded bg-cover mt-5 bp-center float-end" data-aos="fade-up" style="background-image: url('img/ja/photo_2023.jpg');">
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="col-12 shadow ratio rounded bg-cover mt-5 bp-center" data-aos="fade-left" style="background-image: url('img/ja/photo_2023-06-21_17-41-38.jpg');--bs-aspect-ratio: 150%;">
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-4">
                      <h2 class="display-2 mt-5" data-aos="fade-left">Notre Collection</h2>
                        <h3 class="display-7 py-5 border-top border-dark" data-aos="fade-left">Meubles en Bois de Cocotier</h3>
                        <p class="text-jane" data-aos="fade-left" data-aos-delay="200">Chaque pièce de notre collection est soigneusement conçue et fabriquée à partir de bois de cocotier de haute qualité. Nous croyons en l'alliance entre l'esthétique contemporaine et la chaleur naturelle du bois, créant ainsi des meubles uniques qui s'intègrent parfaitement à tout style d'intérieur.
                        </p>
                      </div>
                    </div>
                  </div>
              </div>
             
              <div class="py-vh-2 bg-jane-100 w-100 overflow-hidden" id="aboutus">
                  <div class="container">
                      <div class="row d-flex justify-content-between align-items-center">
                           <div class="col-lg-4">
                            <br>
                            <br>
                            <h3 class="display-3  py-vh-2 border-bottom  " data-aos="fade-left">Le bois de cocotier : Une élégance naturelle</h3>
                            <h4 class="display-7  py-vh-2 border-top border-dark text-materiaux-jane" data-aos="fade-left"> Caractéristiques Principales</h4>

                            <div  class="text-jane" data-aos="fade-left" data-aos-delay="200">
                            <ul>
                                <li>
                                    Grain Naturel : Chaque morceau de bois de cocotier présente un grain distinctif, ajoutant une touche visuelle et texturée à chaque meuble.
                                </li>
                                <li>
                                    Couleur Chaleureuse : Les nuances chaudes allant du brun clair au brun foncé confèrent une ambiance chaleureuse et naturelle à tout espace.
                                </li>
                                <li>
                                    Durabilité Exceptionnelle : Réputé pour sa robustesse, le bois de cocotier est un choix durable, résistant aux fissures et à la déformation.
                                </li>
                            </ul>
                            </div>
                          </div>
                          <div class="col-lg-6">
                              <div class="row gx-5 d-flex">
                                <div class="col-md-11">
                                  <div class=" ratio ratio-16x9 rounded bg-cover bp-center align-self-end " data-aos="fade-right" style="background-image: url('img/ja/photo_2023-06-21_17-41-37.jpg'); --bs-aspect-ratio: 50%;">
                                  </div>
                                </div>
                                <div class="col-md-5 offset-md-1">
                                  <div class="shadow ratio ratio-1x1 rounded bg-cover mt-5 bp-center float-end img_cocotier" data-aos="fade-up" style="background-image: url('img/ja/photo_2023-06-21_17-41-38.jpg');">
                                  </div>
                                </div>
                                <div class="col-md-6  img_cocotier">
                                  <div class="col-12 shadow ratio rounded bg-cover mt-5 bp-center img_cocotier" data-aos="fade-left" style="background-image: url('img/ja/photo_2023-07-05_12-21-55.jpg');--bs-aspect-ratio: 150%; border: radius 10px;">
                                  </div>
                                </div>
                              </div>
                          </div>  
                     </div>
                 </div>
              </div>
              <div class="position-relative overflow-hidden w-100 bg-jane-expo id="gallery">
                  <div class="container-fluid">
                    <div class="row overflow-scroll">
                      <div class="col-12">
                        <div class="row vw-100 px-0 py-vh-5 d-flex align-items-center scrollx">
                          <div class="col-md-2" data-aos="fade-up">
                              <img src="{{asset('img/ja/photo_2023-06-21_17-41-37 (2).jpg')}}" class="rounded shadow img-fluid" alt="nice gallery image" width="512" height="341">
                          </div>
                          <div class="col-md-2" data-aos="fade-up" data-aos-delay="200">
                              <img src="{{asset('img/ja/photo_2023-06-21_17-41-37.jpg')}}" class="img-fluid rounded shadow" alt="nice gallery image" width="1164" height="776">
                          </div>
                          <div class="col-md-3" data-aos="fade-up" data-aos-delay="400">
                              <img src="{{asset('img/ja/acceuil_img_3.jpg')}}" class="img-fluid rounded shadow" alt="nice gallery image" width="844" height="1054">
                          </div>
                          <div class="col-md-3" data-aos="fade-up" data-aos-delay="600">
                              <img src="{{asset('img/ja/acceuil_img_2.jpg')}}" class="img-fluid rounded shadow" alt="nice gallery image" width="844" height="562">
                          </div>
                          <div class="col-md-2" data-aos="fade-up" data-aos-delay="800">
                              <img src="{{asset('img/ja/photo_2023.jpg')}}" class="rounded shadow img-fluid" alt="nice gallery image" width="512" height="341">
                          </div>
                        </div>
                      </div>
                    </div>
                </div>
              </div>
              
              <div class="container py-vh-4 w-100 overflow-hidden">
                  <div class="row d-flex justify-content-center align-items-center">
                    <div class="col-lg-5">
                  <h3 class="py-5 border-top border-dark" data-aos="fade-right"> Créer un espace qui vous ressemble</h3>
                </div>
                  <div class="col-md-7" data-aos="fade-left">
                    <blockquote>
                      <div class="fs-4 my-3 fw-light pt-4 border-bottom pb-1">La décoration intérieure va au-delà des meubles. Avec notre collection, vous pouvez personnaliser chaque détail, des textiles aux accessoires, pour créer un espace qui reflète véritablement votre style unique.</div>
                    </blockquote>
                  </div>
                  <div class="row d-flex justify-content-start align-items-start">
                    <div class="col-lg-12  d-flex justify-content-start align-items-start " data-aos="fade-up">
                         <div class="col-12 details-btn-jane ">
                            <a  href="{{url('/studio')}}" class="btn  btn-xl shadow me-3 btn-jane-chaise my-5">
                             Projet
                            </a>
                        </div> 
                  </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
  

  <script>
const slides = document.querySelectorAll('.carousel-slide');
let currentSlideIndex = 0;

function showSlide(index) {
  slides[currentSlideIndex].classList.remove('active');
  slides[index].classList.add('active');
  currentSlideIndex = index;
}
function nextSlide() {
  const nextIndex = (currentSlideIndex + 1) % slides.length;
  showSlide(nextIndex);
}
setInterval(nextSlide, 3000); // Change slide every 3 seconds
  </script>
@endsection
