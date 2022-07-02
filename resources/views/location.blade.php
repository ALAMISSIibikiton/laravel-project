@extends('admin')
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

  <title>Document</title>
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
<div class="row">
  <div class="col-md-6 offset-md-3">
    @if($msg = Session ::get('danger'))
      <div class="alert alet-danger">
        <strong>{{$msg}}</strong>
      </div>
    @endif  
  </div>
  
<div class="row p-4 pt-5"  style="margin-left:150px;width:900%">
               <div class="col-md-6">
                  <div class="card card-primary">
              
              <!-- /.card-header -->
              <!-- form start -->
               
              <form action="{{ route('store_loc')}}" method="POST" >
              @csrf
                <div class=row>
                  <div class="col w-100">
                    <div class=" bg-primary d-flex align-items-center">
                      <h3 class="card-title "><i class="fas fa-plus fa-1x"></i>Ajouter une maison</h3>

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
                        <input type="text" class="form-control" name="ville_lo"/>    
                        @if($errors->has('ville_lo'))
                          <p class="text-danger">{{$errors->first('ville_lo')}}</p>
                      @endif 
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                         <label for="quartier">Quartier bien:</label>
                        <input type="text" class="form-control" name="quartier_lo"/>
                        @if($errors->has('quartier_lo'))
                          <p class="text-danger">{{$errors->first('quartier_lo')}}</p>
                        @endif
                        <!-- <label>Textarea Disabled</label>
                        <textarea class="form-control" rows="3" placeholder="Enter ..." disabled=""></textarea> -->
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                      <label for="prix" style="width:300px">Nombre jardin:</label>
                        <input type="text" class="form-control" name="nbr_jardin"/>    
                        @if($errors->has('nbr_jardin'))
                          <p class="text-danger">{{$errors->first('nbr_jardin')}}</p>
                      @endif      
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <!-- select -->
                      <div class="form-group">
                        <label>Nombre de parking</label>
                        <input type="text" class="form-control" name="nbr_parking">
                        @if($errors->has('nbr_parking'))
                          <p class="text-danger">{{$errors->first('nbr_parking')}}</p>
                      @endif
                      </div>
                    </div>
                      <div class="row">
                        <div class="col-sm-6">
                         <div class="form-group">
                            <label for="doc"> Nombre d'appart:</label>
                            <input type="number" class="form-control" name="nbr_appart"/>     
                            @if($errors->has('nbr_appart'))
                              <p class="text-danger">{{$errors->first('nbr_appart')}}</p>
                            @endif   
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <!-- select -->
                      <div class="form-group">
                         <label for="coord">Nombre de chambre:</label>
                         <input type="text" class="form-control" name="nbr_chambre"/>
                         @if($errors->has('nbr_chambre'))
                          <p class="text-danger">{{$errors->first('nbr_chambre')}}</p>
                         @endif
                      </div>
                    </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                      <label for="dist">Nombre de cuisine:</label>
                      <input type="text" class="form-control" name="nrb_cuisine"/> 
                      @if($errors->has('nrb_cuisine'))
                          <p class="text-danger">{{$errors->first('nrb_cuisine')}}</p>
                      @endif
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <!-- select -->
                      <div class="form-group">
                      <label for="pro">Superficie</label>
                     <input type="number" class="form-control" name="super"/>
                     @if($errors->has('super'))
                          <p class="text-danger">{{$errors->first('super')}}</p>
                      @endif
                      </div>
                    </div>
                    </div>
                    
                    <div class="row">
                    <div class="col-sm-6">
                      <!-- select -->
                      <div class="form-group">
                      <label>Type de meuble</label>
                        <select class="form-control" name="estmeuble">
                          <option>Meublé</option>
                          <option>Non meublé</option>
                        </select>
                        @if($errors->has('estmeuble'))
                          <p class="text-danger">{{$errors->first('estmeuble')}}</p>
                        @endif
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <!-- select -->
                      <div class="form-group">
                      <label>Nombre de balcon</label>
                        <input type="text" name="nrb_bal" class="form-control">
                        @if($errors->has('nrb_bal'))
                          <p class="text-danger">{{$errors->first('nrb_bal')}}</p>
                        @endif
                      </div>
                    </div>
                    </div>
                    <div class="row">
                    
                    <div class="col-sm-6">
                      <!-- select -->
                      <div class="form-group">
                      <label>Nombre de guérite</label>
                        <input type="number" name="nrb_guer"  class="form-control">
                        @if($errors->has('nrb_guer'))
                          <p class="text-danger">{{$errors->first('nrb_guer')}}</p>
                      @endif
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <!-- select -->
                      <div class="form-group">
                      <label>Image</label>
                        <input type="file" name="img"  class="form-control">
                        @if($errors->has('img'))
                          <p class="text-danger">{{$errors->first('img')}}</p>
                      @endif
                      </div>
                    </div>
                    </div>
                    <div class="form-group">
                <textarea class="form-control" rows="3" name="comm" placeholder="Entrer un commentaire ..." ></textarea> 
            </div>
            
            <button type="submit" class="btn btn-primary d-grid gap-2 col-6 mx-auto">Ajouter</button> 
        </form>

                  
</body>
</html>

            