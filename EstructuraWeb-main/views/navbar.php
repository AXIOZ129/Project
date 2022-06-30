 <?php
 
 $view= $_GET['view'];

 ?>
<ul id="dropdown1" class="dropdown-content">
  <li><a href="http://localhost:8080/EstructuraWeb-main/?view=Biblioteca">Biblioteca</a></li>
  <li><a href="http://localhost:8080/EstructuraWeb-main/?view=Directorio">Directorio</a></li>
  <li><a href="http://localhost:8080/EstructuraWeb-main/?view=Convocatorias">Convocatorias</a></li>
</ul>
<ul id="dropdown2" class="dropdown-content">
  <li><a href="http://localhost:8080/EstructuraWeb-main/?view=Orgullo">Orgullo cachanilla</a></li>
  <li><a href="http://localhost:8080/EstructuraWeb-main/?view=Maraton">Medio maraton</a></li>
  <li><a href="http://localhost:8080/EstructuraWeb-main/?view=Pavo">Carrera del pavo</a></li>
  <li><a href="http://localhost:8080/EstructuraWeb-main/?view=Entronizacion">Entronizacion</a></li>
</ul>
<ul id="dropdown3" class="dropdown-content">
  <li><a href="http://localhost:8080/EstructuraWeb-main/?view=Galerias">Galerias</a></li>
</ul>
<ul id="dropdown4" class="dropdown-content">
  <li><a href="http://localhost:8080/EstructuraWeb-main/?view=Comite">Actas sesiones del comite U.T.</a></li>
</ul>
<nav>

<div class="nav-wrapper">
    <a href="http://localhost:8080/EstructuraWeb-main/?view=home" class="brand-logo">Logo</a>
    <ul class="right hide-on-med-and-down">

     
      <li><a class="dropdown-trigger" href="http://localhost:8080/EstructuraWeb-main/?view=Acerca" data-target="dropdown1">Acerca de<i class="material-icons right">arrow_drop_down</i></a></li>
      <li><a class="dropdown-trigger2" href="http://localhost:8080/EstructuraWeb-main/?view=Eventos" data-target="dropdown2">Eventos<i class="material-icons right">arrow_drop_down</i></a></li>
      <li><a class="dropdown-trigger3" href="http://localhost:8080/EstructuraWeb-main/?view=Noticias" data-target="dropdown3">Noticias<i class="material-icons right">arrow_drop_down</i></a></li>
      <li><a href="http://localhost:8080/EstructuraWeb-main/?view=Instalaciones">Instalaciones deportivas</a></li>
      <li><a href="http://localhost:8080/EstructuraWeb-main/?view=Revistas">Revistas</a></li>
      <li><a href="http://localhost:8080/EstructuraWeb-main/?view=Normatividad">Normatividad</a></li>
      <li><a class="dropdown-trigger4" href="http://localhost:8080/EstructuraWeb-main/?view=Transparencia" data-target="dropdown4">Transparencia<i class="material-icons right">arrow_drop_down</i></a></li>
      <li><a href="http://localhost:8080/EstructuraWeb-main/?view=Contacto">Contacto</a></li>
    </ul>
</nav>


<nav>
  <!-- BreadCrumb Home -->
  <div class="nav-wrapper">
    <div class="col s12" id="breadcrumbHome" style="display: none;">
    <a href="?view=home" class="breadcrumb">Home</a>
    </div>

  <!--BreadCrumb Biblioteca -->

    <div class="col s12" id="breadcrumbBiblioteca" style="display: none;">
    <a href="?view=home" class="breadcrumb">Home</a>
    <a href="?view=Biblioteca" class="breadcrumb">Biblioteca</a>
    </div>

  <!-- BreadCrumb Directorio -->

    <div class="col s12" id="breadcrumbDirectorio" style="display: none;">
    <a href="?view=home" class="breadcrumb">Home</a>
    <a href="?view=Directorio" class="breadcrumb">Directorio</a>
    </div>

  <!-- BreadCrumb Convocatorias -->

    <div class="col s12" id="breadcrumbConvocatorias" style="display: none;">
    <a href="?view=home" class="breadcrumb">Home</a>
    <a href="?view=Convocatorias" class="breadcrumb">Convocatorias</a>
    </div>

  <!-- BreadCrumb Orgullo -->

    <div class="col s12" id="breadcrumbOrgullo" style="display: none;">
    <a href="?view=home" class="breadcrumb">Home</a>
    <a href="?view=Orgullo" class="breadcrumb">Orgullo cachanilla</a>
    </div>

  <!-- BreadCrumb Maraton-->

    <div class="col s12" id="breadcrumbMaraton" style="display: none;">
    <a href="?view=home" class="breadcrumb">Home</a>
    <a href="?view=Maraton" class="breadcrumb">Medio Maraton</a>
    </div>

  <!-- BreadCrumb Pavo -->

    <div class="col s12" id="breadcrumbPavo" style="display: none;">
    <a href="?view=home" class="breadcrumb">Home</a>
    <a href="?view=Pavo" class="breadcrumb">Carrera del Pavo</a>
    </div>

  <!-- BreadCrumb Entronizacion -->

    <div class="col s12" id="breadcrumbEntronizacion" style="display: none;">
    <a href="?view=home" class="breadcrumb">Home</a>
    <a href="?view=Entronizacion" class="breadcrumb">Entronizacion</a>
    </div>

  <!-- BreadCrumb Galerias -->

    <div class="col s12" id="breadcrumbGalerias" style="display: none;">
    <a href="?view=home" class="breadcrumb">Home</a>
    <a href="?view=Galerias" class="breadcrumb">Galerias</a>
    </div>

  <!-- BreadCrumb Instalaciones -->

    <div class="col s12" id="breadcrumbInstalaciones" style="display: none;">
    <a href="?view=home" class="breadcrumb">Home</a>
    <a href="?view=Instalaciones" class="breadcrumb">Instalaciones</a>
    </div>

  <!-- BreadCrumb Revistas -->

    <div class="col s12" id="breadcrumbRevistas" style="display: none;">
    <a href="?view=home" class="breadcrumb">Home</a>
    <a href="?view=Revistas" class="breadcrumb">Revistas</a>
    </div>

  <!-- BreadCrumb Normatividad -->

    <div class="col s12" id="breadcrumbNormatividad" style="display: none;">
    <a href="?view=home" class="breadcrumb">Home</a>
    <a href="?view=Normatividad" class="breadcrumb">Normatividad</a>
    </div>

  <!-- BreadCrumb Comite -->

    <div class="col s12" id="breadcrumbComite" style="display: none;">
    <a href="?view=home" class="breadcrumb">Home</a>
    <a href="?view=Comite" class="breadcrumb">Comite</a>
    </div>

  <!-- BreadCrumb Contacto -->

    <div class="col s12" id="breadcrumbContacto" style="display: none;">
    <a href="?view=home" class="breadcrumb">Home</a>
    <a href="?view=Contacto" class="breadcrumb">Contacto</a>
    </div>

  <!-- BreadCrumb 22 -->

    <div class="col s12" id="breadcrumb22" style="display: none;">
    <a href="?view=home" class="breadcrumb">Home</a>
    <a href="?view=Biblioteca" class="breadcrumb">Biblioteca</a>
    <a href="?view=22" class="breadcrumb">22 Ayuntamiento de Mexicali</a>
    </div>

  <!-- BreadCrumb 23 -->

    <div class="col s12" id="breadcrumb23" style="display: none;">
    <a href="?view=home" class="breadcrumb">Home</a>
    <a href="?view=Biblioteca" class="breadcrumb">Biblioteca</a>
    <a href="?view=23" class="breadcrumb">23 Ayuntamiento de Mexicali</a>
    </div>

  <!-- BreadCrumb Facebook -->

    <div class="col s12" id="breadcrumbFacebook" style="display: none;">
    <a href="?view=home" class="breadcrumb">Home</a>
    <a href="?view=Biblioteca" class="breadcrumb">Biblioteca</a>
    <a href="?view=23" class="breadcrumb">23 Ayuntamiento de Mexicali</a>
    <a href="?view=Facebook" class="breadcrumb">Transmisiones via Facebook</a>
    </div>

  A

  </div>
</nav>

<h5 class= "hiddenView" id= "<?php if($view) echo $view ?>"> </h5>
        

<script src="./scripts/navbar.js?v1.0.0"></script>
