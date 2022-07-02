@extends('admin')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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

      <form method="post" action="{{ route('update_user', $inscription->id ) }}">
          <div class="form-group">
              @csrf
              @method("PUT")
              <label for="nom">Nom utilisateur :</label>
              <input type="text" class="form-control" name="nom" value="{{ $inscription->nom }}"/>
          </div>

          <div class="form-group">
              <label for="cases">Prénom utilisateur :</label>
              <input type="text" class="form-control" name="prenom" value="{{ $inscription->prenom }}"/>
          </div>
          <div class="form-group">
              <label for="cases">Numéro de téléphone :</label>
              <input type="text" class="form-control" name="tel" value="{{ $inscription->tel }}"/>
          </div>
           <div class="form-group">
              <label for="cases">Email utilisateur :</label>
              <input type="text" class="form-control" name="email" value="{{ $inscription->email }}"/>
          </div>
          <div class="form-group">
              <label for="cases">Mot de passe :</label>
              <input type="text" class="form-control" name="password" value="{{ $inscription->password }}"/>
          </div>
          <div class="form-group">
            <button type="submit" class="btn btn-primary">Modifier</button>
          </div>
              
      </form>
  </div>
</div>
</body>
</html>