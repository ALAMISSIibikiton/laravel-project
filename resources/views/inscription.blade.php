<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cs/inscrit.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Inscription</title>
</head>
<body>
<div class="bg-img">
    
    <div class="content">
    <div class="logo">
        <img src="img/Logo.png" alt="">
     </div>
        <header>Inscription</header>
        <form action="{{asset('/inscription')}}" method="post">
        @csrf
            <div class="field">
                <span class="fa fa-user"></span>
                <input type="text" placeholder="Nom" id="nom" name="nom" />
            </div>
            @if($errors->has('nom'))
                <p class="text-danger">{{$errors->first('nom')}}</p> 
            @endif
            <div class="field space">
                <span class="fa fa-user"></span>
                <input type="text" placeholder="Prénom(s)" id="prenom" name="prenom"/>
            </div>
            @if($errors->has('prenom'))
                <p class="text-danger">{{$errors->first('prenom')}}</p> 
            @endif
            <div class="field space">
                <span class="fa fa-phone"></span>
                <input type="text" placeholder="Téléphone" id="tel" name="tel"/>
            </div>
            @if($errors->has('tel'))
                <p class="text-danger">{{$errors->first('tel')}}</p> 
            @endif
            <div class="field space">
                <span class="fa fa-user"></span>
                <input type="email" placeholder="Email" id="email" name="email"/>
            </div>
            @if($errors->has('email'))
                <p class="text-danger">{{$errors->first('email')}}</p> 
            @endif
            <div class="field space">
                <span class="fa fa-lock"></span>
                <input type="password" placeholder="Mot de passe" class="password" id="password" name="password"/>
                <span class="show">VOIR</span>
            </div>
            @if($errors->has('password'))
                <p class="text-danger">{{$errors->first('password')}}</p> 
             @endif
            <div class="field space">
                <span class="fa fa-lock"></span>
                <input type="password" class="password" placeholder="Confirmer le mot de passe" id="password2" name="password"/><br>
                <span class="show">VOIR</span> 
            </div>
            @if($errors->has('password'))
                <p>{{$errors->first('password')}}</p> 
            @endif <br>
            <div class="field ">
              <input type="submit" value="S'inscrire" id="submit">
            </div><br>
            
            <div class="sign">Vous avez déjà un compte?
               <a href="{{asset('/connexion')}}"> Se connecter</a>
            </div>
        </form>
    </div>
</div>
<script type="text/javascript">
    const pass_field = document.querySelector('.password');
    const show_btn = document.querySelector('.show');
    show_btn.addEventListener('click',function(){
        if(pass_field.type === "password"){
            pass_field.type ="text";
            show_btn.style.color ="#3498db";
            show_btn.textContent = "CACHER";

        }else{
            pass_field.type ="password";
            show_btn.style.color ="#222";
            show_btn.textContent = "VOIR";

            

        }
    });
</script>
    
</body>
</html>