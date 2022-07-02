<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title')</title>


  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('dist/css/adminlte.min.css')}}"> 
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        

        <form id="logout-form" action="" method="POST" class="d-none">
            @csrf
        </form>
      </li>
      <li>
  <!-- Notifications Dropdown Menu -->
  <li class="nav-item dropdown" style="margin-left:930px">
    <a class="nav-link" data-toggle="dropdown" href="#">
      <i class="far fa-bell"></i>
      <span class="badge badge-warning navbar-badge">15</span>
    </a>
    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right" syle="margin-left:20px">
      <span class="dropdown-header">15 Notifications</span>
      <div class="dropdown-divider"></div>
      <a href="#" class="dropdown-item">
        <i class="fas fa-envelope mr-2"></i> 4 new messages
        <span class="float-right text-muted text-sm">3 mins</span>
      </a>
      <div class="dropdown-divider"></div>
      <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
    </div>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
      <i class="fas fa-expand-arrows-alt"></i>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
      <i class="fas fa-user"></i>
    </a>
  </li>
</ul>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{asset('dist/img/logo.jpg')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Vivi-immo</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar ">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
        </div>
      </div>
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               <li class="nav-item">
            <a href="{{ route('acceuil')}}" class="nav-link">
              <i class="nav-icon fas fa-home"></i>
              <p>
                Accueil
              </p>
            </a>
          </li>
          <!-- <li class="nav-header">TYPE DE BIEN</li>
        </li>
        <li class="nav-item">
            <a href="{{ route('index_type')}}" class="nav-link">
            <i class="nav-icon fas fa-users"></i>
            Gestion des types de bien
            </a>
          </li> -->
          
        <li class="nav-header">BIENS</li>
        <li class="nav-header">Enrégistrement de parcelle</li>
        </li>
        <li class="nav-item">
            <a href="http://localhost:8000/" class="nav-link">
            <i class="nav-icon fas fa-plus"></i>
            <p>
                Ajouter une parcelle
            </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('index_bien')}}" class="nav-link">
            <i class="nav-icon fas fa-users"></i>
            <p>
            Liste des ventes de parcelles
            </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('index_bien2')}}" class="nav-link">
            <i class="nav-icon fas fa-users"></i>
            <p>
            Liste des ventes de parcelles(suite et fin)
            </p>
            </a>
          </li>
          <li class="nav-header">Affectation de parcelle</li>
          <li class="nav-item">
            <a href="{{ route('affecter')}}" class="nav-link">
                <i class="nav-icon fas fa-exchange-alt"></i>
                <p>
                Affecter une parcelle
                </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('index_aff')}}" class="nav-link">
                <i class="nav-icon fas fa-exchange-alt"></i>
                <p>
                Liste des affectations
                </p>
            </a>
        </li>
          <li class="nav-header">Gestion locative</li>
        </li>
        <li class="nav-item">
            <a href="{{ route('create_loc')}}" class="nav-link">
            <i class="nav-icon fas fa-users"></i>
            <p>
                Ajouter une maison
            </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('create_ch')}}" class="nav-link">
            <i class="nav-icon fas fa-users"></i>
            <p>
               Création de chambre
            </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('index_loc')}}" class="nav-link">
            <i class="nav-icon fas fa-users"></i>
            <p>
            Liste des locations
            </p>
            </a>
          </li>
        <li class="nav-item">
            <a href="{{ route('affecter')}}" class="nav-link">
                <i class="nav-icon fas fa-exchange-alt"></i>
                <p>
                Affectation d'une chambre
                </p>
            </a>
        </li>
        <!-- <li class="nav-header">CLIENTS</li>
        </li>
         <li class="nav-item">
            <a href="" class="nav-link">
            <i class="nav-icon fas fa-users"></i>
            <p>
                 Enrégistrer propriétaire
            </p>
            </a>
            <a href="" class="nav-link">
            <i class="nav-icon fas fa-users"></i>
            <p>
                 Enrégistrer acheteur
            </p>
            </a>
          </li> -->
        <li class="nav-header">VISITES</li>
        <li class="nav-item">
            <a href="{{ route('create')}}" class="nav-link">
            <i class="nav-icon fas fa-users"></i>
            <p>
                Enregistrer visite
                </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('index_visite')}}" class="nav-link">
            <i class="nav-icon fas fa-users"></i>
            <p>
                Liste des visites
                </p>
            </a>
          </li>
        <li class="nav-header">SECURISATION DE BIEN</li>
        <li class="nav-item">
            <a href="" class="nav-link">
            <i class="nav-icon fas fa-users"></i>
             <p>
                Enregistrer visite
              </p>
            </a>
          </li>
        <li class="nav-item">
            <a href="#" class="nav-link">
                <i class="nav-icon fas fa-exchange-alt"></i>
                <p>
                Gestion des locations
                </p>
            </a>
        </li>

        <li class="nav-header">CAISSE</li>
        <li class="nav-item">
            <a href="#" class="nav-link">
                <i class="nav-icon fas fa-coins"></i>
                <p>
                Gestion des paiements
                </p>
            </a>
        </li>
         
               <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Profile
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-cog"></i>
              <p>
                Paramètre
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
   @yield('content')
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark" >
    <!-- Control sidebar content goes here -->
  
    <div class="text-center">
                  <img class="profile-user-img img-fluid img-circle" src="{{asset('img/user.png')}}" alt="User profile picture">
                </div>
                <p class="text-muted text-center">Software Engineer</p>

                <ul class="list-group bg-dark mb-3">
                    <li class="list-group-item">
                    <a href="#" class="d-flex align-items-center "><i class="fa fa-lock pr-2"></i><b >Mot de passe</b> </a>
                    </li>
                    <li class="list-group-item">
                    <a href="#" class="d-flex align-items-center"><i class="fa fa-user pr-2"></i><b >Mon profile</b> </a>
                    </li>
                </ul>
                <a class="btn btn-primary btn-block" href=""
            onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
            Déconnexion
        </a>
              
  </aside>
<body>

</body>
  <!-- /.control-sidebar -->
  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
   
    <!-- Default to the left -->
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('dist/js/adminlte.min.js')}}"></script>
</body>
</html>
