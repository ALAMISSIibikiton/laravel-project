  @extends('admin');
 <!DOCTYPE html>
 <html lang="en">
 <head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
  <link rel="stylesheet" href="css/st.css">
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
       <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <h4>Dashboard</h4>
          </div>
        </div><br>
        <div class="row">
          <div class="col-md-3 mb-3">
            <div class="card bg-primary text-white h-100">
              <div class="card-body py-5"><i style="color:#DDDCD5" class="fa fa-users fa-3x"></i><i  style="margin-left:20px;font-weight:800;font-size:60px">{{ DB::table('inscriptions')->count();}}</i></div>
              <div class="card-footer d-flex">
                Administrateurs
                <span class="ms-auto">&nbsp;
                  <!-- <i class="fa fa-chevron-right" style="margin-bottom:10px"></i> -->
                </span>
              </div>
            </div>
          </div>
          <div class="col-md-3 mb-3">
            <div class="card bg-warning text-dark h-100">
              <div class="card-body py-5"><i class="fa fa-users fa-3x"></i><i  style="margin-left:20px;font-weight:800;font-size:60px">{{ DB::table('acheteur')->count();}}</i></div>
              <div class="card-footer d-flex">
                Acheteurs
                <span class="ms-auto">&nbsp;
                </span>
              </div>
            </div>
          </div>
          <div class="col-md-3 mb-3">
            <div class="card bg-success text-white h-100">
              <div class="card-body py-5"><i class="fa fa-users fa-3x"></i><i style="margin-left:20px;font-weight:800;font-size:60px">{{ DB::table('affect')->count();}}</i></div>
              <div class="card-footer d-flex">
              Affectations
                <span class="ms-auto">&nbsp;
                 
                </span>
              </div>
            </div>
          </div>
          <div class="col-md-3 mb-3">
            <div class="card bg-danger text-white h-100">
              <div class="card-body py-5">Danger Card</div>
              <div class="card-footer d-flex">
                Securisation
                <span class="ms-auto">&nbsp;
                </span>
              </div>
            </div>
          </div>
        </div>
        <h3>Liste des utilisateurs</h3>
        <table class="table table-striped mh-100">
          
  <thead>
      <tr>
        <th style="font-weight:bold;">Nom utilisateur </th>
        <th style="font-weight:bold;">Prénom utilisateur</th>
        <th style="font-weight:bold;">Numéro de téléphone</th>
        <th style="font-weight:bold;">Email</th>
        <th style="font-weight:bold;">Mot de passe</th>
        <th style="font-weight:bold;">Creation</th>
        <th style="margin-left:100px;font-weight:bold">Action</th>
      </tr>
  </thead>

  <tbody>
      @foreach($inscriptions as $inscription)
      <tr>
          <td >{{$inscription->nom}}</td>
          <td>{{$inscription->prenom}}</td>
          <td>{{$inscription->tel}}</td>
          <td>{{$inscription->email}}</td>
          <td>{{$inscription->password}}</td>
          <td>{{$inscription->created_at->diffForHumans()}}</td>
          <td style="margin-left:800px">
             <form action="{{route('destroy_user', $inscription->id)}}" method="post">
                @csrf
                @method('DELETE')
                <a href="{{ route('edit_user', $inscription->id)}}" class="btn btn-warning"><i class="fas fa-edit"></i></a>
                <button class="btn btn-danger" type="submit" style="margin-left:50px;margin-top:-35%"><i class="fas fa-trash-alt" ></i></button>   
              </form>
          </td>
      </tr>
      @endforeach
  </tbody>
        </table>
 </body>
 </html>
