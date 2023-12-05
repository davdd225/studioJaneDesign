
@extends('layouts.layout')
@section('content')  
<div class="h-100 container-fluid bg-jane ">
      <div class="h-100 row d-flex align-items-stretch" data-aos="fade-right"> 
          <div class="col-12 col-md-7 col-lg-6 d-flex align-items-start flex-column px-vw-5" >
            <div class="top-jane-about">
            </div>
            <h1 class="about-text">Contact</h1>
                 @if (session('success'))                  
                   <div class="custom-alert alert-success">
                       <div class="alert-content">
                           <button class="close-button" onclick="closeAlert(this)">  {{ session('success') }} &ensp; &times;</button>
                       </div>
                   </div> 
                   @endif 
                   <main class="mb-auto col-12" >
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
                   </main>
               </div>
          <div class="col-12 col-md-5 col-lg-6 bg-cover-jane" data-aos="fade-left" style="background-image: url('img/ja/JoeleA.jpg');  background-size:contain;  background-repeat: no-repeat; margin-top:12vh;"></div>
          <!-- <div class="col-12 col-md-5 col-lg-6 bg-cover jane-back-img"></div> -->            
       </div>
     </div>
              
               
  














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
 