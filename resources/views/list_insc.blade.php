<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
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
                <button class="btn btn-danger" type="submit" style="margin-left:50px;margin-top:-85%"><i class="fas fa-trash-alt" ></i></button>   
              </form>
          </td>
      </tr>
      @endforeach
  </tbody>
        </table>
</body>
</html>