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
  <div class="row p-4 pt-5"  style="margin-left:20%">
               <div class="col-md-8">
                  <div class="card card-primary">

              <div class="card-header">
                <h3 class="card-title"><i class="fas fa-plus"></i>Affecter un bien</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <div>
            <form action="{{route('store_aff')}}" method="post">
              @csrf
                <div class="form-group">
                  <label for="tel"  style="margin-left:20px">Nom acheteur:</label>
                    <select name="name" id="" class="form-control" style="width:500px;margin-left:20px">
                        @foreach($data as $visite)
                            <option value="{{ $visite->nom_ach}}">{{ $visite->nom_ach}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                  <label for="tel" style="margin-left:20px" >Prénom acheteur:</label>
                    <select name="prenom" id="" class="form-control" style="width:500px;margin-left:20px">
                        @foreach($data as $visite)
                            <option value="{{ $visite->nom_ach}}" style="color:black">{{$visite->nom_ach}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                  <label for="tel" style="margin-left:20px" >Nom du propriétaire:</label>
                    <select name="nompro" id="" class="form-control" style="width:500px;margin-left:20px">
                        @foreach($moi as $bien)
                            <option value="{{ $bien->nom_pro}}">{{ $bien->nom_pro}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                  <label for="tel" style="margin-left:20px" >Type du bien:</label>
                    <select name="typebien" id="" class="form-control" style="width:500px;margin-left:20px">
                        @foreach($moi as $bien)
                            <option value="{{ $bien->type_bien}}">{{ $bien->type_bien}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary flex-grow-1">Enrégistrer</button>
                  <a href=""><button type="button" class="btn btn-danger">Retourner la liste des utilisateurs</button></a>

                </div>
              </form>
            
                  </div>
               </div>
             </div>  
              

  </body>
  </html>
    
