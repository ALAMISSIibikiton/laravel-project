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
<div class="uper">

@if(session()->get('success'))
  <div class="alert alert-success">
    {{ session()->get('success') }}  
  </div><br />
@endif
<div>
  <div class=row>
    <div class="col w-100">
         <div class=" bg-primary d-flex align-items-center">
              <h3 class="card-title flex-grow-1" style="color:#fff"><i class="fas fa-users fa-1x" style="color:#fff"></i>Liste des affectations de parcelle</h3>

              <div class=" d-flex align-items-center">
                <a class="btn btn-link text-white mr-4 d-block" href="{{ route('affecter')}}"> <i class="fas fa-user-plus">
                </i> Affecter une parcelle</a>
               
                <form action="/cherch" method="get">
                  <div class="input-group">
                     <input type="text" name="cherch" style="width:200px;" class="form-control" placeholder="Rechercher une ville" >
                     <span class="input-group-prepend">
                       <button type="submit" class="btn btn-info">Search</button>
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
        <th>Nom acheteur: </th>
        <th>Prénom acheteur</th>
        <th>Nom du propriétaire</th>
        <th>Type du bien</th>
        <th>Date d'affectation</th>
        <th style="margin-left:100px">Action</th>
      </tr>
  </thead>

  <tbody>
      @foreach($affectes as $affect)
      <tr>
          <td >{{$affect->name}}</td>
          <td>{{$affect->prenom}}</td>
          <td>{{$affect->nompro}}</td>
          <td>{{$affect->typebien}}</td>
          <td>{{$affect->created_at->diffForHumans()}}</td>
          <td style="margin-left:800px">
             <form action="{{route('destroy_aff', $affect->id)}}" method="post">
                @csrf
                @method('DELETE')
                <a href="{{ route('edit_aff', $affect->id)}}" class="btn btn-warning"><i class="fas fa-edit"></i></a>
                <button class="btn btn-danger" type="submit" style="margin-left:50px;margin-top:-85%"><i class="fas fa-trash-alt" ></i></button>   
              </form>
          </td>
      </tr>
      @endforeach
  </tbody>
</table>
{!!$affectes->links()!!}
<div>
</body>
</html>
<style>
  .uper {
    margin-top: 40px;
  }
</style>
