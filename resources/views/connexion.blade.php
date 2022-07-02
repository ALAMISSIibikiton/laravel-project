<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cs/connect.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Connexion</title>
</head>
<body>
<div class="bg-img">
    
    <div class="content">
    <div class="logo">
        <img src="img/Logo.png" alt="">
     </div>
        <header>Connexion</header>
        <form action="/connexion" method="post" class="form">
        @csrf
            <div class="field">
                <span class="fa fa-user"></span>
                <input type="email" placeholder="Email" id="email" name="email"/>
            </div>
            <div class="field space">
                <span class="fa fa-lock"></span>
                <input type="password" placeholder="Mot de passe" class="password" id="password" name="password"/><br>
                <span class="show">VOIR</span>
            </div>
            <div class="pass">
                <a href="">Mot de passe oublié?</a>
            </div><br>
            <div class="field ">
              <input type="submit" value="Se connecter" id="submit">
            </div><br>
            
            <div class="sign">Vous n'avez pas de compte?
               <a href="{{asset('inscription')}}"> S'incrire</a>
            </div>
        </form>
    </div>
</div>
<script>
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