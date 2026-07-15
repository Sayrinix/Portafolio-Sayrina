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
 <div class="container">
    <div class="row">
        <div class="col-8">
            <form action="post" class="bg-color-contacto-form">
    <div>
        <div class="form-floating mb-3 col">
        <input type="text" class="form-control" id="floatingInput" placeholder="Nombre">
        <label for="floatingInput">Nombre</label>
        </div>
        <div class="form-floating col">
            <input type="text" class="form-control" id="floatingEmpresa" placeholder="Empresa">
            <label for="floatingEmpresa">Empresa</label>
        </div>
    </div>
    <div>
       <div class="form-floating mb-3 col">
        <input type="email" class="form-control" id="floatingEmail" placeholder="nombre@ejemplo.com">
        <label for="floatingEmail">Correo Electrónico</label>
        </div>
        <div class="form-floating mb-3 col">
        <input type="tel" class="form-control" id="floatingTel" placeholder="+56 X XX XXXX XX">
        <label for="floatingTel">Número de Teléfono</label>
        </div>
    </div>
    <div>
        <div class="form-floating">
        <textarea class="form-control" placeholder="Escribe tu consulta..." id="floatingTextarea"></textarea>
        <label for="floatingTextarea">Consulta</label>
        </div>
    </div> 
 </form>
        </div>
    </div>
 </div>
 
         
</main>
<?php get_footer(); ?>