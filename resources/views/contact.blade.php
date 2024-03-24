
@extends('layouts.layout')
@section('content')
<section class="container-respond containter-fluid bg-contact-3 justify-content-center"> 
<section class="container bg-contact"> 
        <div class="img-contact-position responsive-image" data-aos="fade-left">
            <img src="{{asset('img/jane-designe.png')}}" alt="" width="600" height="600" class="responsive-image">
        </div>
        <div class="mb-5 d-flex justify-content-center align-items-center">
            <h1 class="about-text-2 text-center">CONTACTEZ NOUS </h1>
        </div>
   <div class="row">
    <div class="col-12 form-center">
                 @if (session('success'))                  
                   <div class="custom-alert alert-success">
                       <div class="alert-content">
                           <button class="close-button" onclick="closeAlert(this)">  {{ session('success') }} &ensp; &times;</button>
                       </div>
                   </div> 
                   @endif 
                   <main class="mb-12 col-6 justify-content-center " >
                       <form id="form" class="row form" onsubmit="return validateForm()" method="POST" action="{{ url('/contact') }}">
                       @csrf
                           <div class="contact-section">
                             <div class="mb-6">
                               <label for="name" class="form-label">Nom</label>
                               <input type="text" class="form-control form-control-lg" id="name" name="name" required>
                             </div>
                             <div class="mb-6">
                               <label for="firstName" class="form-label">Prénom</label>
                               <input type="text" class="form-control form-control-lg" id="firstName" name="firstName" required>
                             </div>
                             <div class="mb-6">
                               <label for="number" class="form-label">Numéro de Téléphone</label>
                               <input type="tel" class="form-control form-control-lg" id="number" name="number" required>
                             </div>
                             <div class="mb-6">
                               <label for="exampleInputEmail1" class="form-label">Adresse Email</label>
                               <input type="email" class="form-control form-control-lg" id="exampleInputEmail1" name="email" required>
                             </div>
                             <div class="mb-6">
                               <label for="calendar" class="form-label">Calendrier</label>
                               <input name="calendar" class="form-control form-control-lg" id="calendar" type="date" value="2017-06-01" required></input>
                             </div>
                             <div class="mb-6">
                                <label for="services" class="form-label">Services</label>
                                 <select name ="services" class="form-control form-control-lg mb-3" aria-label=".form-control-lg example">
                                  <option selected>Ouvrez  notre liste déroulante pour découvrir  nos services</option>
                                  <option value="1">Deco intérieure</option>
                                  <option value="2">Conception 3D</option>
                                  <option value="3">Rénovation</option>
                                  <option value="3">Conseils</option>
                                  <option value="3">Autres</option>
                                </select>
                             </div>
                             <div class="mb-6">
                             <label for="message" class="form-label">Message:</label>
                             <textarea class="form-control" name="message" rows="4" required></textarea>
                             </div>
                             <p class="small text-muted mb-5">Dites-nous comment nous pouvons vous aider ! Partagez vos besoins dans le champ message ci-dessous.</p>
                             <div class=" col-12 details-btn-jane">
                                 <button type="submit" class="mb-5 btn btn-xl me-3 btn-jane-chaise">Envoyer</button> 
                             </div>                   
                           </div>
                       </form>
                   </main>           
            </div>
       </div>
    </section>
</section>

            
  <script>
      function closeAlert(button) {
          const alert = button.closest('.custom-alert');
          alert.remove();
      }
  </script> 
          
       <script>
          function validateForm() {
            var name = document.getElementById("name").value;
            var firstName = document.getElementById("firstName").value;
            var number = document.getElementById("number").value;
            var email = document.getElementById("exampleInputEmail1").value;
            var message = document.getElementById("message").value;

            if (name === "" || firstName === "" || number === "" || email === "" || message === "") {
              alert("Veuillez remplir tous les champs obligatoires.");
              return false; // Empêche la soumission du formulaire s'il manque des champs.
            }
              // Vous pouvez également ajouter d'autres validations ici si nécessaire.
            return true; // Permet la soumission du formulaire si tout est valide.
          }
      </script>
  </body>
</html>

@endsection
 