@extends('admin')

@section('content')

<style>
  .uper {
    margin-top: 40px;
  }
</style>

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
                <h3 class="card-title flex-grow-1"><i class="fas fa-users fa-2x"></i>Liste des chambre</h3>

                <div class=" d-flex align-items-center">
                  <a class="btn btn-link text-white mr-4 d-block" href="{{ route('ven')}}"> <i class="fas fa-user-plus">
                  </i> Nouveau bien</a>
                 
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
          <th>Maison ID(Maison): </th>
          <th>Nom maison</th>
          <th>Numéro de chambre</th>
          <th>Description</th>
          <th style="margin-left:100px">Action</th>
        </tr>
    </thead>

    <tbody>
        @foreach($chambres as $chambre)
        <tr>
            <td >{{$chambre->location->nom_pro}}</td>
            <td>{{$chambre->location->nom_pro}}</td>
            <td>{{$chambre->num_ch}}</td>
            <td>{{$chambre->desc}}</td>
            <td style="margin-left:800px">
               <form action="{{route('destroy_ch', $chambre->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <a href="{{ route('edit_ch', $chambre->id)}}" class="btn btn-warning">Modifier</a>
                  <button class="btn btn-danger" type="submit">Supprimer</button>   
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
  {!!$chambres->links()!!}
<div>
@endsection