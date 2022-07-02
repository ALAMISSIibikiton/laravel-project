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
  
<div class="row p-4 pt-5" style="margin-left:100px;width:1050px">
               <div class="col-md-6">
                  <div class="card card-primary">
              
              <!-- /.card-header -->
              <!-- form start -->
               
              <form action="{{ route('store_ch')}}" method="POST">
              @csrf
                <div class=row>
                  <div class="col w-100">
                    <div class=" bg-primary d-flex align-items-center">
                      <h3 class="card-title "><i class="fas fa-plus fa-1x"></i>Ajouter une chambre</h3>

                     </div>
                  </div>
               </div>
              <div class="card-body">
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="form-group">
                      <label for="prix" style="width:300px">Maison ID(Maison):</label>
                      <select name="location_id" class="form-control">
                          <option value="">Select</option>
                          @foreach($location as $items)
                              <option value="{{$items->id}}">{{$items->id}}</option>
                          @endforeach  
                      </select>  
                        @if($errors->has('location_id'))
                          <p class="text-danger">{{$errors->first('location_id')}}</p>
                      @endif      
                      </div>
                    </div>
                    </div>
                    <div class="row">
                    <div class="col-sm-12">
                      <div class="form-group">
                      <label for="prix" style="width:300px">Nom maison:</label>
                      <select name="nom" class="form-control">
                          <option value="">Select</option>
                          @foreach($location as $items)
                              <option value="{{$items->nom_pro}}">{{$items->nom_pro}}</option>
                          @endforeach  
                      </select>  
                        @if($errors->has('location_id'))
                          <p class="text-danger">{{$errors->first('location_id')}}</p>
                      @endif      
                      </div>
                    </div>
                    </div>
                    <div class="row">
                    <div class="col-sm-12">
                      <div class="form-group">
                      <label for="prix" style="width:300px">Numéro de chambre:</label>
                        <input type="number" class="form-control" name="num_ch"/>    
                        @if($errors->has('num_ch'))
                          <p class="text-danger">{{$errors->first('num_ch')}}</p>
                      @endif      
                      </div>
                    </div>
                <div class="col-sm-12">
                <div class="form-group">
                <label for="prix" style="width:300px">Description:</label>
                 <textarea class="form-control"  name="desc" rows="3" placeholder="Entrer un description ..." ></textarea> 
                </div>
                </div>
            
            <button type="submit" class="btn btn-primary d-grid gap-2 col-6 mx-auto">Ajouter</button> 
        </form>

                  
</body>
</html>
       