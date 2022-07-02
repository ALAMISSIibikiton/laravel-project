@extends('admin')
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
  <title>Document</title>
  <style>
  .uper {
    margin-top: 40px;
  }
  label{
    color:black;
  }
  #file{
    
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
<div class="uper">

@if(session()->get('success'))
  <div class="alert alert-success">
    {{ session()->get('success') }}  
  </div><br />
@endif
<div>
         <div class=" bg-primary d-flex align-items-center">
              <h3 class="card-title flex-grow-1"><i class="fas fa-users fa-1x"></i>Liste des biens</h3>
              <div class=" d-flex align-items-center">
              <div class="wrapper">
                <div class="container">
                   <div class="row">
                   <button type="button" class="btn btn-prmary pull-right" data-toggle="modal" data-target="#login" style="color:#000;top:-500px"><i class="fas fa-plus"></i>Ajouter un bien</button>
                   <div class="modal fade" role="dialog" id="login">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h2 style="color:black"><i class="fas fa-plus fa-2x"></i>Ajouter un bien</h2>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                          </div>
                          <div class="modal-body">
                            <form action="{{ route('store_bien')}}" method="POST" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="row">
                  <div class="col-sm-6">
                    
                    <!-- text input -->
                    <div class="form-group">
                    <label for="nom_pro">Nom propriétaire:</label>
                   <input type="text" class="form-control" name="nom_pro"/>  
                     @if($errors->has('nom_pro'))
                        <p class="text-danger">{{$errors->first('nom_pro')}}</p>
                    @endif
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                    <label for="tel">Numéro propriétaire:</label>
                    <input type="text" class="form-control" name="tel_pro"/>  
                    @if($errors->has('tel_pro'))
                        <p class="text-danger">{{$errors->first('tel_pro')}}</p> 
                    @endif
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group">
                    <label for="ville">Ville bien:</label>
                      <input type="text" class="form-control" name="ville_pro"/>    
                      @if($errors->has('ville_pro'))
                        <p class="text-danger">{{$errors->first('ville_pro')}}</p>
                    @endif 
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                       <label for="quartier">Quartier bien:</label>
                      <input type="text" class="form-control" name="quartier_pro"/>
                      @if($errors->has('quartier_pro'))
                        <p class="text-danger">{{$errors->first('quartier_pro')}}</p>
                      @endif
                      <!-- <label>Textarea Disabled</label>
                      <textarea class="form-control" rows="3" placeholder="Enter ..." disabled=""></textarea> -->
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group">
                    <label for="prix" style="width:300px">Nombre parcelle:</label>
                      <input type="text" class="form-control" name="nbr"/>    
                      @if($errors->has('nbr'))
                        <p class="text-danger">{{$errors->first('nbr')}}</p>
                    @endif      
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <!-- select -->
                    <div class="form-group">
                      <label>Négotiabilité</label>
                      <select class="form-control" name="nego">
                        <option>Négotiable</option>
                        <option>Non négotiable</option>
                      </select>
                      @if($errors->has('nego'))
                        <p class="text-danger">{{$errors->first('nego')}}</p>
                    @endif
                    </div>
                  </div>
                    <div class="row">
                      <div class="col-sm-6">
                       <div class="form-group">
                          <label for="doc"> Document bien:</label>
                          <input type="file" class="form-control" name="doc" onchange="file(this)"/>    
                          <img id="img" alt="profile_img" style="max-width:130px;margin-top:20px"> 
                          @if($errors->has('doc'))
                            <p class="text-danger">{{$errors->first('doc')}}</p>
                          @endif   
                    </div>
                  </div>
                  <script>
                    function file(input){
                      var file = $('input[type=file]').get(0).files[0];
                      if(file){
                        var reader = new FileReader();
                        reader.onload = function(){
                          $('#img').attr("src",reader.result);
                        }
                        reader.readAsDataURL(file); 
                      }
                    }
                  </script>
                  <div class="col-sm-6">
                    <!-- select -->
                    <div class="form-group">
                       <label for="coord">Coordonées:</label>
                       <input type="text" class="form-control" name="coord"/>
                       @if($errors->has('coord'))
                        <p class="text-danger">{{$errors->first('coord')}}</p>
                       @endif
                    </div>
                  </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group">
                    <label for="dist">Distance:</label>
                    <input type="text" class="form-control" name="dist"/> 
                    @if($errors->has('dist'))
                        <p class="text-danger">{{$errors->first('dist')}}</p>
                    @endif
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <!-- select -->
                    <div class="form-group">
                    <label for="pro">Promixé des infrastructures:</label>
                   <input type="text" class="form-control" name="prox"/>
                   @if($errors->has('prox'))
                        <p class="text-danger">{{$errors->first('prox')}}</p>
                    @endif
                    </div>
                  </div>
                  </div>
                  <div class="row">
                  
                  <div class="col-sm-6">
                    <!-- select -->
                    <div class="form-group">
                    <label>Etat</label>
                      <select class="form-control" name="estdisponible">
                        <option>Disponible</option>
                        <option>Non disponible</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <!-- select -->
                    <div class="form-group">
                    <label>Type bien</label>
                      <select class="form-control" name="type_bien">
                        <option>Immeuble</option>
                        <option>Maison</option>
                        <option>Parcelle</option>
                        <option>Boutique</option>
                        <option>Magazin</option>
                        <option>Appartement</option>

                      </select>
                    </div>
                  </div>
                  </div>
                  <div class="row">
                  
                  <div class="col-sm-6">
                    <!-- select -->
                    <div class="form-group">
                    <label>Image</label>
                          <input type="file" class="form-control" name="img" onchange="file(this)"/>    
                          <img id="img" alt="profile_img" style="max-width:130px;margin-top:20px"> 
                          @if($errors->has('img'))
                            <p class="text-danger">{{$errors->first('img')}}</p>
                          @endif   
                    </div>
                  </div>
                  <script>
                    function file(input){
                      var file = $('input[type=file]').get(0).files[0];
                      if(file){
                        var reader = new FileReader();
                        reader.onload = function(){
                          $('#img').attr("src",reader.result);
                        }
                        reader.readAsDataURL(file); 
                      }
                    }
                  </script>
                  </div>
                  <div class="form-group">
              <textarea class="form-control" rows="3" name="comm" placeholder="Entrer un commentaire ..." ></textarea> 
          </div>
          
          <button type="submit" class="btn btn-primary ">Ajouter</button> 
                     
                            </form>
                          </div>
                          <div class="modal-footer">
                          <button type="button" class="close" data-dismiss="modal">Close</button>
                          </div>
                        </div>
                      </div>
                   </div>
                   </div>
                </div>
              </div>

                <form action="/cherch" method="get">
                  <div class="input-group">
                     <input type="text" name="cherch" style="width:200px;margin-right:100px" class="form-control" placeholder="Rechercher une ville" >
                     <span class="input-group-prepend">
                       <button type="submit" class="btn btn-info" style="top:-100%;left:200px">Search</button>
                     </span>
                  </div>
                </form>
              </div>
            </div>
    </div>
  </div>
      <div class="d-flex justify-content-end ">
        <div class="form-group mr-3">
          <label for="filtre_type">Rechercher un nom</label>  
          <form action="/nom" method="get">
                  <div class="input-group">
                     <input type="text" name="nom" style="width:200px;" class="form-control" placeholder="Entrer un nom" >
                     <span class="input-group-prepend">
                      
                     </span>
                  </div>
                </form>
         
        </div>
        <div class="form-group">
        <div class="form-group mr-3">
        <label for="quartier">Rechercher un quartier</label>
          <form action="/quartier" method="get">
                  <div class="input-group">
                     <input type="text" name="quartier" style="width:200px;" class="form-control" placeholder="Entrer un quartier" >
                     <span class="input-group-prepend">
                      
                     </span>
                  </div>
                </form>
        </div>
        </div>
        <div class="form-group">
        <div class="form-group mr-3">
        <label for="nego">Rechercher type négociation</label>
          <form action="/nego" method="get">
                  <div class="input-group">
                     <input type="text" name="nego" style="width:200px;" class="form-control" placeholder="Entrer une négociation" >
                     <span class="input-group-prepend">
                      
                     </span>
                  </div>
                </form>
        </div>
        </div>
      </div>      
<table class="table table-striped mh-100">

  <thead>
      <tr>
        <th  style="font-weight:bold">Nom du propriétaire</th>
        <th style="font-weight:bold">Numéro du propriétaire</th>
        <th style="font-weight:bold">Ville bien</th>
        <th style="font-weight:bold">Quartier bien</th>
        <th style="font-weight:bold">Nombre de parcelle</th>
        <th style="font-weight:bold">Négociation</th>
        <th style="font-weight:bold">Documents bien</th>
        <th style="margin-left:100px;font-weight:bold">Action</th>
      </tr>
  </thead>

  <tbody>
      @foreach($biens as $bien)
      <tr>
          <td >{{$bien->nom_pro}}</td>
          <td>{{$bien->tel_pro}}</td>
          <td>{{$bien->ville_pro}}</td>
          <td>{{$bien->quartier_pro}}</td>
          <td>{{$bien->nbr}}</td>
          <td>{{$bien->nego}}</td>

          <td> 
            <img src="{{asset('images/documentsimage/'.$bien->doc)}}" width="70px" height="70px"></td> 
          <td style="margin-left:800px">
             <form action="{{route('destroy_bien', $bien->id)}}" method="post">
                @csrf
                @method('DELETE')
                <a href="{{ route('edit_bien', $bien->id)}}" class="btn btn-warning"><i class="fas fa-edit"></i></a>
                <button class="btn btn-danger" style="margin-left:50px;margin-top:-85%" type="submit"><i class="fas fa-trash-alt" ></i></button>   
              </form>
          </td>
      </tr>
      @endforeach
  </tbody>
</table>
{!!$biens->links()!!}
<div>
<!-- debut -->
<div id="login-modal">
                  <div class="modal">
                    <div class="top-form">
                      <div class="close-modal">
                        &#10006;
                      </div>
                    </div>
                    <div class="login-form">
                      <h2>Login</h2>
                      <form action="">
                        <input type="text" class="control" placeholder="Email">
                        <input type="password" class="control" placeholder="Mot de passe">
                        <button type="submit" class="submit">Envoyer</button>
                      </form>
                    </div>
                  </div>
</div>
              <!-- fin -->
              <script
  src="https://code.jquery.com/jquery-3.6.0.slim.min.js"
  integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI="
  crossorigin="anonymous"></script>
</body>
</html>