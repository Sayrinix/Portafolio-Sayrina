<?php
/*
Template Name: Contacto
*/
get_header();
?>
<main>
 <div class="bg-color-banner-contacto">
    <h1 class="h1-brown">Contacto</h1>
 </div>
 <div class="mt-5 pt-5 d-flex justify-content-center">
<form action="post" class="bg-color-contacto-form">
    <div class="row">
        <div class="mb-3 col">
            <label for="floatingInput" class="form-label">Nombre</label>
        <input type="text" class="form-control form-control-sm" id="floatingInput" placeholder="Nombre">
        
        </div>
        <div class="mb-3 col">
            <label class="form-label" for="floatingEmpresa">Empresa</label>
            <input type="text" class="form-control form-control-sm" id="floatingEmpresa" placeholder="Empresa">
            
        </div>
    </div>
    <div class="row">
       <div class="mb-3 col">
        <label class="form-label" for="floatingEmail">Correo Electrónico</label>
        <input type="email" class="form-control form-control-sm" id="floatingEmail" placeholder="nombre@ejemplo.com">
        
        </div>
        <div class="mb-3 col">
            <label class="form-label" for="floatingTel">Número de Teléfono</label>
        <input type="tel" class="form-control form-control-sm" id="floatingTel" placeholder="+56 X XX XXXX XX">
        
        </div>
    </div>
    <div>
        <div>
            <label class="form-label" for="floatingTextarea">Consulta</label>
        <textarea rows="3" class="form-control" placeholder="Escribe tu consulta..." id="floatingTextarea"></textarea>
        
        </div>
    </div> 
 </form>
        </div>
  
 
         
</main>
<?php get_footer(); ?>