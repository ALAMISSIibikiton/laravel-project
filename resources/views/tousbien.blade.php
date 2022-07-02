<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="margin:3%;padding:10px">
<div class="col-sm-12" style="display:flex">
            @if($succes == true)
            @for($i = 0; $i < $bien->count();$i++)
                
                  <div class="col-sm-3">
                    <div class="card" style="width: 18rem;border:1px solid black;margin-left:15px;">
                    <div class="mm">
                    <img class="card-img-top" src="/images/documentsimage/{{$bien[$i]->doc}}" alt="Card image cap" height="240px" width="288px">
                    <div class="metre"><em>95m</em></div>
                    </div>
                    <div class="card-body"> 
                    <div class="rigth">
                      <strong style="color: rgba(0, 0, 0, 0.25);">6699{{$bien[$i]->type_bien}}</strong>
                    </div>
                    <div class="paragraph">
                      <p><strong style="color:#F5C608;">{{$bien[$i]->estdisponible}}</strong> <br> <strong>{{$bien[$i]->prox}}</strong><br> <strong>Au rez de chaussé, deux chambres</strong></p>
                    </div>
                    </div>
                  </div>
                  </div>
          @endfor
          @endif
    
</body>
</html>