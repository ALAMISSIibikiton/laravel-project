@extends('admin')
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title> 
<style>
  .uper {
    margin-top: 40px;
  }
</style>
</head>
<body>
    
<div id="content">
	     
       <!------top-navbar-start-----------> 
          
       <div class="top-navbar">
          <div class="xd-topbar">
            <div class="row">
              <div class="col-2 col-md-1 col-lg-1 order-2 order-md-1 align-self-center">
               <div class="xp-menubar">
                 <span class="material-icons text-white">signal_cellular_alt</span>
             </div>
            </div>
            
            <div class="col-md-5 col-lg-3 order-3 order-md-2">
                <div class="xp-searchbar">
                  <form>
                   <div class="input-group">
                   <input type="search" class="form-control"
                   placeholder="Search">
                   <div class="input-group-append">
                      <button class="btn" type="submit" id="button-addon2">Go
                    </button>
                   </div>
                 </div>
                </form>
              </div>
            </div>
            <div class="col-10 col-md-6 col-lg-8 order-1 order-md-3">
                <div class="xp-profilebar text-right">
                 <nav class="navbar p-0">
                  <ul class="nav navbar-nav flex-row ml-auto">
                  <li class="dropdown nav-item active">
                    <a class="nav-link" href="#" data-toggle="dropdown">
                   <span class="material-icons">notifications</span>
                   <span class="notification">4</span>
                  </a>
                   <ul class="dropdown-menu">
                      <li><a href="#">You Have 4 New Messages</a></li>
                    <li><a href="#">You Have 4 New Messages</a></li>
                    <li><a href="#">You Have 4 New Messages</a></li>
                    <li><a href="#">You Have 4 New Messages</a></li>
                   </ul>
                  </li>
                  
                  <li class="nav-item">
                    <a class="nav-link" href="#">
                    <span class="material-icons">question_answer</span>
                  </a>
                  </li>
                  
                  <li class="dropdown nav-item">
                    <a class="nav-link" href="#" data-toggle="dropdown">
                   <img src="img/user.jpg" style="width:40px; border-radius:50%;"/>
                   <span class="xp-user-live"></span>
                  </a>
                   <ul class="dropdown-menu small-menu">
                      <li><a href="#">
                    <span class="material-icons">person_outline</span>
                    Profile
                    </a></li>
                    <li><a href="#">
                    <span class="material-icons">settings</span>
                    Settings
                    </a></li>
                    <li><a href="#">
                    <span class="material-icons">logout</span>
                    Logout
                    </a></li>
                    
                   </ul>
                  </li>
               </ul>
               </nav>
              </div>
            </div> 
          </div>
          
          <div class="xp-breadcrumbbar text-center">
             <h4 class="page-title">Dashboard</h4>
           <ol class="breadcrumb">
             <li class="breadcrumb-item"><a href="#">Vishweb</a></li>
             <li class="breadcrumb-item active" aria-curent="page">Dashboard</li>
           </ol>
          </div>  
        </div>
       </div>
       <!------top-navbar-end-----------> 
<div class="card uper">
  <div class="card-header">
    Modifier un bien
  </div>

  <div class="card-body">

    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br/>
    @endif

      <form method="post" action="{{ route('update_bien', $bien->id ) }}">
          <div class="form-group">
              @csrf
              @method("PUT")
              <label for="nom_pro">Nom du propriétaire :</label>
              <input type="text" class="form-control" name="nom_pro" value="{{ $bien->nom_pro }}"/>
          </div>

          <div class="form-group">
              <label for="cases">Numéro de téléphone :</label>
              <input type="text" class="form-control" name="tel_pro" value="{{ $bien->tel_pro }}"/>
          </div>
          <div class="form-group">
              <label for="cases">Ville du propriétaire :</label>
              <input type="text" class="form-control" name="ville_pro" value="{{ $bien->ville_pro }}"/>
          </div>
           <div class="form-group">
              <label for="cases">Quartier du propriétaire :</label>
              <input type="text" class="form-control" name="quartier_pro" value="{{ $bien->quartier_pro }}"/>
          </div>
          <div class="form-group">
              <label for="cases">Nombre de parcelle :</label>
              <input type="text" class="form-control" name="nbr" value="{{ $bien->nbr }}"/>
          </div>
          <div class="form-group">
              <label for="cases">Négociabilité :</label>
              <input type="text" class="form-control" name="nego" value="{{ $bien->nego }}"/>
          </div>
          <div class="form-group">
              <label for="cases">Documents disponibles :</label>
              <input type="file" name="doc" value="{{ $bien->doc }}">
              <!-- <img src="/doc/{{ $bien->doc }}" alt=""> -->
          </div>
         
          <div class="form-group">
              <label for="cases">Coordonnées :</label>
              <input type="text" class="form-control" name="coord" value="{{ $bien->coord }}"/>
          </div>
          <div class="form-group">
              <label for="cases">Distance :</label>
              <input type="text" class="form-control" name="dist" value="{{ $bien->dist }}"/>
          </div>
          <div class="form-group">
              <label for="cases">Proximité infrastructure:</label>
              <input type="text" class="form-control" name="prox" value="{{ $bien->prox }}"/>
          </div>
          <div class="form-group">
              <label for="cases">Etat:</label>
              <input type="text" class="form-control" name="estdisponible" value="{{ $bien->estdisponible }}"/>
          </div>
          <div class="form-group">
              <label for="cases">Type bien:</label>
              <input type="text" class="form-control" name="type_bien" value="{{ $bien->type_bien }}"/>
          </div>
          <div class="form-group">
              <label for="cases">Image:</label>
              <input type="file" class="form-control-file" name="img" value="{{ $bien->img }}"/>
          </div>
          <div class="form-group">
              <label for="cases">Autre information :</label>
              <img src="/img/{{ $bien->comm }}" name="comm"  alt="">
              <!-- <input type="text" class="form-control" name="comm" value=""/> -->
          </div>
          <div class="form-group">
            <button type="submit" class="btn btn-primary">Modifier</button>
          </div>
          
          
      </form>
  </div>
</div>

</body>
</html>