@extends('admin')
@section('content')
<div class="row">
  <div class="col-md-6 offset-md-3">
    @if($msg = Session ::get('danger'))
      <div class="alert alet-danger">
        <strong>{{$msg}}</strong>
      </div>
    @endif  
  </div>
<div class="row p-4 pt-5">
               <div class="col-md-6">
                  <div class="card card-primary">
              
              <!-- /.card-header -->
              <!-- form start -->
              <div>
              <form action="" method="POST">
              @csrf
              
              <div class="card-body">
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                      <label for="tel">Type de bien :</label>
                      <input type="text" class="form-control" name="nom"/>  
                      </div>
                    </div>   
            
            <button type="submit" class="btn btn-primary d-grid gap-2 col-6 mx-auto">Ajouter</button> 
        </form>
                  
@endsection