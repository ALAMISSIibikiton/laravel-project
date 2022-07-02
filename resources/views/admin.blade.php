<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
        <title>crud dashboard</title>
	    <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{asset('moi/css/bootstrap.min.css')}}">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
	    <!----css3---->
        <link rel="stylesheet" href="{{asset('moi/css/custom.css')}}">
		
		
		<!--google fonts -->
	    <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
	   <!--google material icon-->
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons"rel="stylesheet">
  </head>
  <body>
<div class="wrapper">
     
	  <div class="body-overlay"></div>
	 
	 <!-------sidebar--design------------>
	 
	 <div id="sidebar">
	    <div class="sidebar-header">
		   <h3><img src="img/logo.png" style="background-color:#000;border-radius:30%" class="img-fluid"/><span>VIVI-IMMO</span></h3>
		</div>
		<ul class="list-unstyled component m-0">
		  <li >
		  <a href="{{ route('index_user')}}" class="dashboard"><i class="material-icons">dashboard</i>dashboard </a>
		  </li>
		  
		  <li class="dropdown">
		  <a href="#homeSubmenu1" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle" class="active">
		  <i class="material-icons">aspect_ratio</i>Parcelles
		  </a>
		  <ul class="collapse list-unstyled menu" id="homeSubmenu1">
		     <li><a href="{{route('ven')}}">Ajout parcelle</a></li>
			 <li><a href="{{ route('index_bien')}}">Liste parcelles</a></li>
			 <li><a href="{{ route('index_bien2')}}">Liste parcelles(suite et fin)</a></li>
			 <li><a href="{{ route('index_aff')}}">Affecter parcelle</a></li>
		  </ul>
		  </li>
 
		   <li class="dropdown">
		  <a href="#homeSubmenu2" data-toggle="collapse" aria-expanded="false"class="dropdown-toggle">
		  <i class="fa fa-house" style="top:50%"></i>Gestion lacative
		  </a>
		  <ul class="collapse list-unstyled menu" id="homeSubmenu2">
		     <li><a href="{{ route('create_loc')}}">Ajouter une maison</a></li>
			 <li><a href="{{ route('create_ch')}}">Création de chambre</a></li>
			 <li><a href="{{ route('index_loc')}}"> Liste des locations</a></li>
			 <li><a href="{{ route('affecter')}}"> Affectation d'une chambres</a></li>
		  </ul>
		  </li>
		  
		   <li class="dropdown">
		  <a href="#homeSubmenu3" data-toggle="collapse" aria-expanded="false" 
		  class="dropdown-toggle">
		  <i class="fa-solid fa-id-card" style="top:50%"></i>Les visites
		  </a>
		  <ul class="collapse list-unstyled menu" id="homeSubmenu3">
		     <li><a href="{{ route('create')}}">Enregistrer visite</a></li>
			 <li><a href="{{ route('index_visite')}}"> Liste des visites</a></li>
		  </ul>
		  </li>
		  
		  
		   <li class="dropdown">
		  <a href="#homeSubmenu4" data-toggle="collapse" aria-expanded="false" 
		  class="dropdown-toggle">
		  <i class="material-icons">extension</i>Sécurisation des biens
		  </a>
		  <ul class="collapse list-unstyled menu" id="homeSubmenu4">
		     <li><a href="#">Pages 1</a></li>
			 <li><a href="#">Pages 2</a></li>
		  </ul>
		  </li>
		  
		  <li class="">
		  <a href="#" class=""><i class="material-icons">library_books</i>calendrier </a>
		  </li>
		  <li class="dropdown">
		  <a href="#homeSubmenu5" data-toggle="collapse" aria-expanded="false" 
		  class="dropdown-toggle">
		  <i class="fa-solid fa-gears" style="top:50%"></i>Paramètre
		  </a>
		  <ul class="collapse list-unstyled menu" id="homeSubmenu5">
		     <li><a href="#">Profile</a></li>
			 <li><a href="#">Déconnexion</a></li>
		  </ul>
		  </li>
		</ul>
	 </div>
	 
	 
<!-------complete html----------->
     <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   <script src="{{asset('moi/js/jquery-3.3.1.slim.min.js')}}"></script>
   <script src="{{asset('moi/js/popper.min.js')}}"></script>
   <script src="{{asset('moi/js/bootstrap.min.js')}}"></script>
   <script src="{{asset('moi/js/jquery-3.3.1.min.js')}}"></script>
  
  
  <script type="text/javascript">
       $(document).ready(function(){
	      $(".xp-menubar").on('click',function(){
		    $("#sidebar").toggleClass('active');
			$("#content").toggleClass('active');
		  });
		  
		  $('.xp-menubar,.body-overlay').on('click',function(){
		     $("#sidebar,.body-overlay").toggleClass('show-nav');
		  });
		  
	   });
  </script>
  </body>
  
  </html>


