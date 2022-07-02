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
    #lfile{
      background:#108ede;
      width:212px;
      text-align:center;
      color:#fff;
      border-radius:7px;
    }
    .lien_img{
      position: absolute;
      width:45%;
      top:0px;
      right: 2%;
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
  <div class="col-md-6 offset-md-3">
    @if($msg = Session ::get('danger'))
      <div class="alert alet-danger">
        <strong>{{$msg}}</strong>
      </div>
    @endif  
  </div>
  
<div class="row p-5 pt-5" style="margin-left:20%">
               <div class="col-md-8">
                  <div class="card card-primary">
              
              <!-- /.card-header -->
              <!-- form start -->
               
              <form action="{{ route('store_bien')}}" method="POST" enctype="multipart/form-data" >
              {{ csrf_field() }}
                <div class=row>
                  <div class="col w-100">
                    <div class=" bg-primary d-flex align-items-center">
                      <h3 class="card-title " style="color:#fff"><i class="fas fa-plus fa-1x" style="color:#fff"></i>Ajouter un nouveau bien</h3>

                     </div>
                  </div>
               </div>
              <div class="card-body">
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
                      <div class="form-group"  style="position:relative;width:460px;margin-top:15px">
                      <label for="file" id="lfile"><i class="far fa-image" >&nbsp;</i>choisir une image</label>
                      <input type="file" class="form-control" id="file" name="img" style="display:none" />    
                      <img id="img" style="max-width:130px;margin-top:20px"> 
                      <div class="lien_img"></div>
                        @if($errors->has('img'))
                            <p class="text-danger">{{$errors->first('img')}}</p>
                        @endif   
                      </div>
                    </div>
                    <script>
                      const recup = document.getElementById("file");
                      recup.addEventListener("input",(e)=>{
                        var val = e.target.value;
                        var name = val.slice(12);
                        const div = document.querySelector('.lien_img');
                        div.innerHTML = name;

                      });
                    </script>
                    </div>
                    </div>
                    <div class="form-group">
                <textarea class="form-control" rows="3" name="comm" placeholder="Entrer un commentaire ..." ></textarea> 
            </div>
            
            <button type="submit" class="btn btn-primary d-grid gap-2 col-6 mx-auto">Ajouter</button> 
        </form>

</body>

</html>