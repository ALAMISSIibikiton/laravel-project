<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>
   <link rel="stylesheet" href="cs/style.css">
   <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
   <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
   <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </head>
    <title>vivi-immo</title>
</head>
<body onload="show()">
    <header>
      <div class="moi">
        <div >
          <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
              <div class="container-fluid">
                <img src="img/logo.png" alt="" width="200px">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav me-auto mb-2 mb-lg-0" style="text-align:center">
                    <li class="nav-item">
                      <a class="nav-link  active" aria-current="page" href="#" style="font-size:28px;margin-top:-15px" id="current">Acceuil</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link active" href="#"style="font-size:28px;margin-top:-15px">Vente</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link active"style="font-size:28px;margin-top:-15px">Location</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link active"style="font-size:28px;margin-top:-15px">Contact</a>
                    </li>
                  </ul>
                    <button class="btn btn-outline-success" id="button" style="color:white;font-size:20px" type="submit">Effectuer une recherche</button>
                  </form>
                </div>
              </div>
            </nav>
            <div class="bg-dark" style="height:600px;">
              <div class="row" >
                <div class="col ml-20" style="margin-left: 50px;">
                    <p class="para" style="font-size:25px"><i class="fa fa-check-circle fa-2x"></i>une mission , votre satisfation</p>
                <p class="par"><span> Faite confiance au spécialiste de </span><br><em>l'immobilier et de prestige</em></p>
                <a href="" class=" btn btn-warning" style="font-size:20px">Nos biens immobilier</a>
                </div>
          </div>
    </div>
    <!-- <img src="img/Rectangle 8.jpg" alt="image" style="float:right;margin-bottom: 50px;position: relative;height:
	 500px; top: -110px;width: 1200px;margin-right: 60px;">
	  -->
    <div class="container" style="padding-bottom:200px">
    <div class="row">
      <div class="col">          
        <div id="carouselControls" class="carousel slide" data-ride="carousel" style=" top: -300px; ">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="img/Rectangle 8.jpg" class="d-block w-100" alt="Satellite" >
            </div>
            <div class="carousel-item">
              <img src="img/Rectangle 8.jpg" class="d-block w-100" alt="Spacewalking astronaut">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>          
        </div>        
      </div>
    </div>
   
   <div class="form">
      <form action="/recherche" method="get" id="form" class="invisible" style=" width: 460px; padding: 50px; float: right;margin-top:-80%;
	   background-color:white; position:relative; margin-right:130px;">
    @csrf
    
	   <h6 style="font-weight:bold;top:10%;font-size:24px">Effectuer une recherche rapide</h6>
      <div class="form-group form">
	 
        <label>Je souhaite</label>
        <select class="form-select" name="ville" id="ville">
          <option value="">Sélectionnez une ville</option>
          <option value="cotonou">cotonou</option>
          <option value="parakou">parakou</option>
          <option value="abomey">Abomey</option>
        </select>
      </div>
      <div class="form-group">
        <label for="formGroupExampleInput2">Quartier</label>
        <input type="text" class="form-control" name="quartier" placeholder="Enter un quartier">
      </div>
      <div class="form-group">
        <label for="">Je souhaite</label>
        <select class="form-select" name="typebien" id="typebien">
          <option class="p-25" value="">-----------------</option>
          <option value="immeuble">Immeuble</option>
          <option value="parcelle">Parcelle</option>
          <option value="maison">Maison</option>
        </select>
      </div>
      <div class="form-group">
        <div>
          <button class="btn btn-dark"style="margin-top:10px;width: 360px;padding:25px;background-color:black">Lancer la recherche</button>
        </div>
      </div>
    </form>
   </div>
</header><br><br>

 <p style="margin-top:300px;position: absolute;left: 50%; font-size:1.6em; font-weight: bold; color: black;">Nos services immobiliers</p>
 <div class="navbar">
  <nav class="navbar navbar-expand-lg"style="margin-top:820px; position: absolute;left: 650px; font-size: 1em; padding:15px ;font-weight: 500; color: ">
    <div >
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" style="list-style-type: none;color: red;" href="#">Achat <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" style="list-style-type: none;color: red;" href="#">Vente</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" style="list-style-type: none;color: red;" href="#">Location</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" style="list-style-type: none;color: red;" href="#">Sécurisation</a>
        </li>
      </ul>
    </div>
  </nav>
  </div> 
 <div class="serv">
  <div class="presentation">
    <div class="presentation-img">
      <img src="img/Rectangle 3.jpg" alt="">
      <img src="img/Rectangle 4.jpg" alt="">
      <img src="img/Rectangle 5.jpg" alt="">
    </div>
    <div class="text">
      <strong>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit rem eum fuga impedit modi magni aperiam ab laboriosam quos corporis. Dicta reiciendis quas nulla voluptatem eius et accusantium vitae omnis</strong>
      <strong>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla sint ipsam, autem cumque repudiandae nesciunt, eveniet magnam, eaque necessitatibus porro omnis earum? Ipsa debitis illo aspernatur ratione suscipit nihil facilis.</strong>
    </div>
  </div>
   <section>
			  <div class="offre">
					<h3>Nos offres immobiliers disponibles</h3>
					<div class="nav">
					<nav>
						<ul>
							<li><a href="">Ouèdo</a></li>
							<li><a href="">Hèvié Houimin</a></li>
							<li><a href="">Kpanhou</a></li>
							<li><a href="">Aitchédji élouissès</a></li>
							<li><a href="">Fignonhou</a></li>
							<li><a href="">Pavé kérékou</a></li>
						</ul>
					</nav>
					</div>
          <div class="col-sm-12" style="display:flex;margin-left:-20%">
            @if($succes == true)
            @for($i = 0; $i < $bien->count();$i++)
                
                  <div class="col-sm-3" >
                    <div class="card" style="width: 18rem; ">
                    <div class="mm">
                    <img class="card-img-top" src="/images/documentsimage/{{$bien[$i]->doc}}" alt="Card image cap" height="240px">
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
       </div><br><br><br>
      <div class="biens"><a href="{{asset('tousbien')}}">Tous les biens</a></div>
          <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
          <br><br>
      
          <section >
            <div id="presentation">
              <div class="newsletter">
                <div class="image1">
                  <img src="img/Rectangle 40.png" alt="">
                </div>
               <div class="image2">
                <img src="img/Rectangle 38.jpg" alt="">
               </div>
               <div class="text_nexs">
                 <h6 >Newsletter</h6>
                 <p class="para">Retrouver toute l'actualité immobilière</p>
                 <p class="inscrit">Inscrivez-vous à notre newsletter pour recevoir <br> des conseils, astuces et 
                   activité <br> sur l'immobilier et directement rediger par <br> les professionels du secteur.
                 </p><br> 
                 <div class="form">
                   <form action="">
                     <div class="textbox">
                      <input type="email" name="email" placeholder="Entrer votre email">
                     </div><br>
                    <button style="margin-left:230px">S'inscrire</button>
                   </form>
                 </div>
               </div>
              </div>
              <div class="reseaux">
                <div class="image3">
                  <img src="img/Rectangle 41.png" alt="">
                </div>
               <div class="image4">
                <img src="img/Rectangle 39.jpg" alt="">
               </div>
               <div class="social">
                  <p class="suivre">Suivez-nous</p>
                  <p class="retrouve">Retrouvez-nous sur les réseaux sociaux</p>
                  <div class="photo">
                    <a href=""><img src="img/Vector (1).png" alt=""></a>
                    <a href=""><img src="img/Vector (2).png" alt=""></a>
                    <a href=""><img src="img/Vector (3).png" alt=""></a>
                   <a href=""><img src="img/Vector.png" alt=""></a> 
                  </div>
               </div>
              </div>
              <h6 style="margin-left: -500px; font-weight: 500;font-size: 24px; padding-top: 200px;"> contactez-nous</h6>
              <div class="contact">
               <div class="ecoute"><br><br>
                  <img src="img/Rectangle 43.jpg" width="300px" alt="">
                  <p class="ee">Nous restons à votre écoute</p>
                  <p>Besoin de renseignement?d'horientation?de suivi?de recommandation?de conseil?</p>
                  <p>Notre service de messagerie reste ouverte 24h/7</p>
                  <h4>Numéro de téléphone</h4>
                  <p>+229 <strong>51 99 11 77</strong></p>
                  <p>C/270 scoa gbetto,2ième étage du premier immeuble à droite
                    après le premier carrefour en quittant la BOA ZONGO pour scoa gbetto
                  </p>
               </div>
               <div class="formulaire">
                 <form action="">
                    <div class="form">
                      <label for="nom"style="margin-left:-280px">Votre nom</label><br>
                      <input type="text" >
                    </div>
                    <div class="form">
                      <label for="nom"style="margin-left:-210px">Votre adresse mail</label><br>
                      <input type="email">
                    </div>
                    <div class="form">
                      <label for="nom" style="margin-left:-300px">Sujet</label><br>
                      <input type="text" >
                    </div>
                    <div class="form">
                      <label for="nom" >Votre message</label><br>
                     <textarea style="margin-left:-55px" name="" id="" cols="36" rows="3"></textarea>
                    </div><br>
                    <button class="button">Envoyer</button>
                 </form>
               </div>
              </div>
              
            </div>

 </section>	  
 </div>
 
</body>
<script>
      const form = document.getElementById('form');
      const button = document.getElementById('button');
      button.addEventListener("click",()=>{
        form.classList.toggle("invisible");
        form.classList.toggle("visible");
      });
    </script>
<div><br><br><br><br><br><br><br><br><br><br><br>
  <footer>
    <div class="footer">
      <div class="content-footer">
        <div class="bloc footer-services">
          <h3>Services</h3>
          <ul class="services-list">
            <li><a >Hosting</a></li>
            <li><a >Domain Name</a></li>
            <li><a >E-commerce</a></li>
            <li><a >Machine Learning</a></li>
            <li><a >Finances</a></li>
            <li><a >Start-up</a></li>
          </ul>
        </div>

        <div class="bloc footer-contact">
          <h3>Stay in touch</h3>
          <p>55-55-55-55-55</p>
          <p>supportclient@contact.com</p>
          <p>21 Dock Street, 45124, NY</p>
        </div>

        <div class="bloc footer-schedule">
          <h3>TimeSheet</h3>
          <ul class="schedule-list">
            <li>✔️ Mon 10-19</li>
            <li>✔️ Tue 10-19</li>
            <li>✔️ Wen 10-19</li>
            <li>✔️ Thu 10-19</li>
            <li>✔️ Fri 10-19</li>
            <li>❌ Sat closed</li>
            <li>❌ Sun closed</li>
          </ul>
        </div>

        <div class="bloc footer-medias">
          <h3>Our Networks</h3>
          <ul class="media-list">
            <li>
              <a >
                <svg
                  aria-hidden="true"
                  focusable="false"
                  data-prefix="fab"
                  data-icon="facebook"
                  class="svg-inline--fa fa-facebook fa-w-16"
                  role="img"
                  xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 512 512"
                >
                  <path
                    fill="currentColor"
                    d="M504 256C504 119 393 8 256 8S8 119 8 256c0 123.78 90.69 226.38 209.25 245V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.28c-30.8 0-40.41 19.12-40.41 38.73V256h68.78l-11 71.69h-57.78V501C413.31 482.38 504 379.78 504 256z"
                  ></path>
                </svg>
                Facebook/xxx</a
              >
            </li>
            <li>
              <a >
                <svg
                  aria-hidden="true"
                  focusable="false"
                  data-prefix="fab"
                  data-icon="instagram"
                  class="svg-inline--fa fa-instagram fa-w-14"
                  role="img"
                  xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 448 512"
                >
                  <path
                    fill="currentColor"
                    d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"
                  ></path>
                </svg>
                Instagram/xxx</a
              >
            </li>
            <li>
              <a >
                <svg
                  aria-hidden="true"
                  focusable="false"
                  data-prefix="fab"
                  data-icon="twitter"
                  class="svg-inline--fa fa-twitter fa-w-16"
                  role="img"
                  xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 512 512"
                >
                  <path
                    fill="currentColor"
                    d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z"
                  ></path>
                </svg>
                Twitter/xxx</a
              >
            </li>
            <li>
              <a >
                <svg
                  aria-hidden="true"
                  focusable="false"
                  data-prefix="fab"
                  data-icon="github"
                  class="svg-inline--fa fa-github fa-w-16"
                  role="img"
                  xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 496 512"
                >
                  <path
                    fill="currentColor"
                    d="M165.9 397.4c0 2-2.3 3.6-5.2 3.6-3.3.3-5.6-1.3-5.6-3.6 0-2 2.3-3.6 5.2-3.6 3-.3 5.6 1.3 5.6 3.6zm-31.1-4.5c-.7 2 1.3 4.3 4.3 4.9 2.6 1 5.6 0 6.2-2s-1.3-4.3-4.3-5.2c-2.6-.7-5.5.3-6.2 2.3zm44.2-1.7c-2.9.7-4.9 2.6-4.6 4.9.3 2 2.9 3.3 5.9 2.6 2.9-.7 4.9-2.6 4.6-4.6-.3-1.9-3-3.2-5.9-2.9zM244.8 8C106.1 8 0 113.3 0 252c0 110.9 69.8 205.8 169.5 239.2 12.8 2.3 17.3-5.6 17.3-12.1 0-6.2-.3-40.4-.3-61.4 0 0-70 15-84.7-29.8 0 0-11.4-29.1-27.8-36.6 0 0-22.9-15.7 1.6-15.4 0 0 24.9 2 38.6 25.8 21.9 38.6 58.6 27.5 72.9 20.9 2.3-16 8.8-27.1 16-33.7-55.9-6.2-112.3-14.3-112.3-110.5 0-27.5 7.6-41.3 23.6-58.9-2.6-6.5-11.1-33.3 2.6-67.9 20.9-6.5 69 27 69 27 20-5.6 41.5-8.5 62.8-8.5s42.8 2.9 62.8 8.5c0 0 48.1-33.6 69-27 13.7 34.7 5.2 61.4 2.6 67.9 16 17.7 25.8 31.5 25.8 58.9 0 96.5-58.9 104.2-114.8 110.5 9.2 7.9 17 22.9 17 46.4 0 33.7-.3 75.4-.3 83.6 0 6.5 4.6 14.4 17.3 12.1C428.2 457.8 496 362.9 496 252 496 113.3 383.5 8 244.8 8zM97.2 352.9c-1.3 1-1 3.3.7 5.2 1.6 1.6 3.9 2.3 5.2 1 1.3-1 1-3.3-.7-5.2-1.6-1.6-3.9-2.3-5.2-1zm-10.8-8.1c-.7 1.3.3 2.9 2.3 3.9 1.6 1 3.6.7 4.3-.7.7-1.3-.3-2.9-2.3-3.9-2-.6-3.6-.3-4.3.7zm32.4 35.6c-1.6 1.3-1 4.3 1.3 6.2 2.3 2.3 5.2 2.6 6.5 1 1.3-1.3.7-4.3-1.3-6.2-2.2-2.3-5.2-2.6-6.5-1zm-11.4-14.7c-1.6 1-1.6 3.6 0 5.9 1.6 2.3 4.3 3.3 5.6 2.3 1.6-1.3 1.6-3.9 0-6.2-1.4-2.3-4-3.3-5.6-2z"
                  ></path>
                </svg>
                Github/xxx</a
              >
            </li>
            <li>
              <a >
                <svg
                  aria-hidden="true"
                  focusable="false"
                  data-prefix="fab"
                  data-icon="youtube"
                  class="svg-inline--fa fa-youtube fa-w-18"
                  role="img"
                  xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 576 512"
                >
                  <path
                    fill="currentColor"
                    d="M549.655 124.083c-6.281-23.65-24.787-42.276-48.284-48.597C458.781 64 288 64 288 64S117.22 64 74.629 75.486c-23.497 6.322-42.003 24.947-48.284 48.597-11.412 42.867-11.412 132.305-11.412 132.305s0 89.438 11.412 132.305c6.281 23.65 24.787 41.5 48.284 47.821C117.22 448 288 448 288 448s170.78 0 213.371-11.486c23.497-6.321 42.003-24.171 48.284-47.821 11.412-42.867 11.412-132.305 11.412-132.305s0-89.438-11.412-132.305zm-317.51 213.508V175.185l142.739 81.205-142.739 81.201z"
                  ></path>
                </svg>
                Youtube/xxx</a
              >
            </li>
          </ul>
        </div>
      </div>
    </div>
     
  </footer> 
  </div>
</html>