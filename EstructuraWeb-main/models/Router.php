<?php

class Router {

  private $viewsManager;

  function __construct(){
    $this->viewsManager = new ViewsManager();
  }

  function loadView($viewType){
    switch ($viewType) {

      # 1. Registrar el nombre de la URL desde donde se va a acceder
      # 2. Ver ViewsManager.php para el paso 2
      # 3. Llamar método previamente creado en el viewsManager y salir del switch

      case "login":
      $this->viewsManager->loadLogin();
      break;

      case "home":
      $this->viewsManager->loadHome();
      break;

      case "Acerca":
        $this->viewsManager->loadAcerca();
        break;
      
      case "Biblioteca":
        $this->viewsManager->loadBiblioteca();
        break;
      
      case "Comite":
        $this->viewsManager->loadComite();
        break;
        
      case "Contacto":
        $this->viewsManager->loadContacto();
        break;

      case "Convocatorias":
        $this->viewsManager->loadConvocatorias();
        break;

      case "Directorio":
        $this->viewsManager->loadDirectorio();
        break;

      case "Entronizacion":
        $this->viewsManager->loadEntronizacion();
        break;

      case "Eventos":
        $this->viewsManager->loadEventos();
        break;

      case "Galerias":
        $this->viewsManager->loadGalerias();
        break;

      case "Instalaciones":
        $this->viewsManager->loadInstalaciones();
        break;

      case "Maraton":
        $this->viewsManager->loadMaraton();
        break;

      case "Normatividad":
        $this->viewsManager->loadNormatividad();
        break;

      case "Noticias":
        $this->viewsManager->loadNoticias();
        break;

      case "Orgullo":
        $this->viewsManager->loadOrgullo();
        break;

      case "Pavo":
        $this->viewsManager->loadPavo();
        break;

      case "Revistas":
        $this->viewsManager->loadRevistas();
        break;

      case "Transparencia":
        $this->viewsManager->loadTransparencia();
        break;

      case "23":
        $this->viewsManager->load23();
        break;

      case "Facebook":
        $this->viewsManager->loadFacebook();
        break;
        
      case "22":
        $this->viewsManager->load22();
        break;
        
      case "historial":
        $this->viewsManager->loadHistorial();
        break;
      

      
      default:
      $this->viewsManager->loadLogin();
      break;
    }
  }
}
?>
