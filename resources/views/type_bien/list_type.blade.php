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
  <div class="card ">
              <div class="card-header bg-primary d-flex align-items-center">
                <h3 class="card-title flex-grow-1"><i class="fas fa-users fa-2x"></i>Liste des types</h3>

                <div class="card-tools d-flex align-items-center">
                  <button onclick="toggle()" class="btn btn-primary">Ajouter</button>
                  <form action="/searc" method="get">
                    <div class="input-group">
                       <input type="text" name="searc" style="width: 200px;" class="form-control" placeholder="Search" >
                       <span class="input-group-prepend">
                         <button type="submit" class="btn btn-info">Search</button>
                       </span>
                    </div>
                  </form>
                </div>
              </div>
  <table class="table table-striped">

    <thead>
        <tr>
          <th>Nom du propriétaire</th>
          <th>Ajouté</th>
          <th  widht="230">Action</th>
        </tr>
    </thead>

    <tbody>
     <div>
       <tr class="form" style="display:none;">
          <td style="margin-left:800px">
          </td>
          <td>
          <form action="{{ route('store_type') }}" method="post">
          @csrf
            <input type="text" name="nom">
            <button class="btn btn-success" tstyle="visbility:none">Ajouter</button>
             <button class="btn btn-danger" type="submit">Annuler</button>
          </form> 
          
            </td>
       </tr>
          
     </div>
        @foreach($types as $type)
        <tr>
            <td >{{$type->nom}}</td>     
            <td>{{$type->created_at}}</td>
            <td style="margin-left:800px">
               <form action="{{route('destroy_type', $type->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <a href="{{ route('edite', $type->id)}}" class="btn btn-warning">Modifier</a>
                  <button class="btn btn-danger" type="submit">Supprimer</button>   
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
  {{$types->links()}}
<div>
  <script type="text/javascript">
    function toggle(){
      x= document.querySelector('.form');
    if (x.style.display == "none") {
      x.style.display ="block";
    }else{
      x.style.display = "none";
    }
  }
  </script>
@endsection