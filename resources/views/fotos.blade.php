@extends('layouts.plantilla')



@section('contenido')
  
<div class="container py-2">
   <div class="row">
      <div role="main" class="main">
         <section class="section section-tertiary section-no-border pb-3 mt-0">
            <div class="container">
               <div class="row justify-content-end mt-4">
                  <div class="col-lg-10 pt-4 mt-4 text-right">
                     <h1 class="text-uppercase font-weight-light mt-4 pt-3 font-weight-bold">Contacto</h1>
                  </div>
               </div>
            </div>
         </section>

         <div class="container">

            <div class="row pt-4 mb-4">
               <div class="col-lg-7">

                  <h2 class="mb-0">Envíanos un mensaje</h2>

                  <p class="lead mb-4 mt-1">Contáctenos o llámenos para descubrir cómo podemos ayudarlo.</p>

                  <form id="contactForm" class="contact-form" action="php/contact-form.php" method="POST">
                     <div class="contact-form-success alert alert-success d-none mt-4" id="contactSuccess">
                        <strong>Envió exitoso!</strong> Su mensaje ha sido enviado.
                     </div>

                     <div class="contact-form-error alert alert-danger d-none mt-4" id="contactError">
                        <strong>Error!</strong> Ocurrió un error, mensaje no enviado.
                        <span class="mail-error-message text-1 d-block" id="mailErrorMessage"></span>
                     </div>
                     <div class="form-row">
                        <div class="form-group col">
                           <input type="text" placeholder="Nombre" value="" data-msg-required="Por favor, escriba su nombre." maxlength="100" class="form-control" name="name" id="name" required>
                        </div>
                     </div>
                     <div class="form-row">
                        <div class="form-group col">
                           <input type="email" placeholder="E-mail" value="" data-msg-required="Por favor, escriba su e-mail." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control" name="email" id="email" required>
                        </div>
                     </div>
                     <div class="form-row">
                        <div class="form-group col">
                           <input type="text" placeholder="Asunto" value="" data-msg-required="Por favor, escriba el asunto." maxlength="100" class="form-control" name="subject" id="subject" required>
                        </div>
                     </div>
                     <div class="form-row">
                        <div class="form-group col">
                           <textarea maxlength="5000" placeholder="Mensaje" data-msg-required="Por favor, escriba el mensaje." rows="5" class="form-control" name="message" id="message" required></textarea>
                        </div>
                     </div>
                     <div class="form-row">
                        <div class="form-group col">
                           <input type="submit" value="Enviar mensaje" class="btn btn-lg btn-primary mb-4" data-loading-text="Cargando...">
                        </div>
                     </div>
                  </form>

               </div>
               <div class="col-lg-4 col-lg-offset-1">

                  <h4 class="text-color-dark mb-1 pb-3">SEGUMAFRA</h4>

                  <!-- Google Maps - Go to the bottom of the page to change settings and map location. -->
                  <div id="googlemaps" class="google-map small"></div>

                  <ul class="list list-icons mt-4 mb-4">
                     <li><i class="icon-pin icons"></i> <strong>Dirección :</strong>31 de Julio de 1859 No 900 A, Leyes de Reforma 3ra Secc, Iztapalapa, 09310 Ciudad de México, CDMX</li>
                     <li><i class="icon-call-end icons"></i> <strong>Teléfono:</strong> 55-3874-0289 | 55-3874-0290</li>
                     <li><i class="icon-envelope icons"></i> <strong>E-mail:</strong> <a href="segumafra@segumafra.com">segumafra@segumafra.com</a></li>
                  </ul>

               </div>
            </div>

         </div>
      </div>

   </div>
</div>
@endsection
@section('titulo', 'Segumafra-Contacto') 