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
  <div class="card ">
              <div class="card-header bg-primary d-flex align-items-center">
                <h3 class="card-title flex-grow-1"><i class="fas fa-users fa-1x" ></i>Liste des vistes</h3>

                <div class="card-tools d-flex align-items-center">
                  <a class="btn btn-link text-white mr-4 d-block" href="{{ route('create')}}"> <i class="fas fa-user-plus">
                  </i>Enrégistrer une nouvelle visite</a>
                  <div class="input-group input-group-md" style="width: 300px;">
                  <form action="/search" method="get">
                    <div class="input-group">
                       <input type="text" name="search" style="width: 200px;" class="form-control" placeholder="Search" >
                       <span class="input-group-prepend">
                         <button type="submit" class="btn btn-info">Search</button>
                       </span>
                    </div>
                  </form>

                  </div>
                </div>
              </div>
  <table class="table table-striped">

    <thead>
        <tr>
          <th style="font-weight:bold">Nom acheteur</th>
          <th  style="font-weight:bold">Prénom acheteur</th>
          <th  style="font-weight:bold">Téléphone acheteur</th>
          <th  style="font-weight:bold">Date de visite</th>  
          <th  style="font-weight:bold">Date de création</th>
          <th widht="230"  style="font-weight:bold">Action</th>
        </tr>
    </thead>

    <tbody>
        @foreach($visites as $visite)
        <tr>
            <td >{{$visite->nom_ach}}</td>
            <td>{{$visite->prenom_ach}}</td>
            <td>{{$visite->tel_ach}}</td>
            <td>{{$visite->date_ach}}</td>
            <td class="text-center"><span class="tag tag-success"> {{$visite->created_at->diffForHumans()}}</span></td>           
            <td style="margin-left:800px">
               <form action="{{route('destroy_visite', $visite->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <a href="{{ route('edit', $visite->id)}}" class="btn btn-warning"><i class="fas fa-edit"></i></a>
                  <button class="btn btn-danger" type="submit" style="margin-left:50px;margin-top:-85%"><i class="fas fa-trash-alt" ></i></button>   
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
  <div class="d-flex justify-content-center">
            {{$visites->links()}}
        </div>
<div>
</body>
</html>