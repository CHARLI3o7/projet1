<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bootstrap Site</title>
  <link rel="stylesheet" href="style/css/style.css">
  <link rel="stylesheet" href="style/bootstrap/css/bootstrap.css">
</head>
<body> 
<!-- Header -->

  <!-- Data time -->
  <div class="container-fluid sticky-top">
    <div class="row justify-content-between" id="tme">
      <div class="col-4">
        <span id="date_time"></span>
        <br>
        <span id="span"></span>
      </div>
      <div class="col-2 mt-2 mb-1">
        <a href="https://www.facebook.com/"><img src="image/logo/logo-facebook.svg" style="max-width: 35px;"></a>
        <a href="https://www.github.com/"><img src="image/logo/logo-github.svg" style="max-width: 35px;"></a>
        <button type="button" class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
          Connexion
        </button>
      </div>
    </div>
    <!-- Nav Bar -->
    <div class="container bg-light border border-top-0">
      <nav class="navbar navbar-expand-lg bg-light">
          <div class="container">
            <a class="navbar-brand" href="#"><img src="image/logo/logo.jpg" style="max-width: 40px;"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                  <a class="nav-link text-dark" href="index.php">Acceuil</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-dark" href="page/index2.php">Service</a>
                </li>
                <li class="nav-item">
                  <a class="btn" data-bs-toggle="offcanvas" data-bs-target="#formCont" aria-controls="offcanvasRight" >
                    Contactez-nous
                  </a>
                </li>
              </ul>
            </div>
          </div>
      </nav>
    </div>
  </div>

  <!--- popUp --->
     <!-- Formulaire de connexion -->
     <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="seconnecter">Se Connecter</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form class="row g-3">
             <div class="form-floating mb-3">
                  <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" required>
                  <label for="floatingInput">Email address</label>
              </div>
              <div class="form-floating">
                <input type="password" class="form-control" id="floatingPassword" placeholder="Password" required>
                <label for="floatingPassword">Password</label>
              </div>
              <div class="row justify-content-center mt-2 ">
                  <div class="col-6" style="margin-left: 100px;">
                    <button type="submit" class="btn btn-outline-primary">Se Connecter</button>
                  </div>
              </div>
            </form>
          </div>
          <div class="modal-footer justify-content-center">
              Vous n’avez pas de compte ? <a data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo" href="">
              Inscrirez-vous</a>
          </div>
        </div>
      </div>
    </div>

  <!-- Formulaire d'inscription -->
    <div class="modal fade" id="exampleModal" data-bs-backdrop="static" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">S'Inscrire</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
              <form class="row g-3">
                  <div class="form-floating col-md-6">
                      <input type="text" class="form-control" id="floatingInput" placeholder="First name" required>
                      <label for="floatingInput">First name</label>
                  </div>
                  <div class="form-floating col-md-6">
                      <input type="text" class="form-control" id="floatingInput" placeholder="Last name" required>
                      <label for="floatingInput">Last name</label>
                  </div>
                  <div class="form-floating col-12">
                    <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" required>
                    <label for="floatingInput">Email address</label>
                  </div>
                  <div class="form-floating col-12">
                      <input type="password" class="form-control" id="floatingPassword" placeholder="Password" required>
                      <label for="floatingPassword">NewPassword</label>
                  </div>
                  <h5>Genre:</h5>
                  <div class="form-check form-check-inline col-2">
                      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                      <label class="form-check-label" for="inlineRadio1">Homme</label>
                  </div>
                  <div class="form-check form-check-inline col-2">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                    <label class="form-check-label" for="inlineRadio2">Femme</label>
                  </div>
                  <div class="form-check form-check-inline col-2">
                      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3">
                      <label class="form-check-label" for="inlineRadio3">Personnalisé</label>
                  </div>
                  <div class="row justify-content-center mt-2 ">
                      <div class="col-6"style="margin-left: 130px;">
                        <button type="submit" class="btn btn-outline-primary">S'inscrire</button>
                      </div>
                  </div>
              </form>
              
          </div>
          <div class="modal-footer justify-content-center">
            Vous avez un compte ? <a class="link-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop" href="#">
            Connectez-vous</a>
          </div>
        </div>
      </div>
    </div>
  <!--------------------------------------------------------------------------------------------->
    <!-- Formilaie de contact -->
    <div class="offcanvas offcanvas-end" data-bs-backdrop="static" tabindex="-1" id="formCont" aria-labelledby="offcanvasRightLabel">
        <div class="offcanvas-header">
          <h3 class="offcanvas-title" id="offcanvasRightLabel">Contactez-Nous</h3>
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <div class="container text-center">
                <!-- paragraphe -->
                <div class="row">
                    <p>Contactez-nous pour toutes questions relatives à notre société ou nos services.
                        Nous ferons notre possible pour revenir vers vous au plus vite</p>
                </div>
                <!-- Formulaire de question-->
                <div class="row">
                    <div class="col">
                        <form class="row g-3">
                            <div class="col-md-6">
                              <input type="text" class="form-control" placeholder="First name" aria-label="First name" required>
                            </div>
                            <div class="col-md-6">
                              <input type="text" class="form-control" placeholder="Last name" aria-label="Last name" required>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" required>
                                <label for="floatingInput">Email address</label>
                              </div>
                            <div class="col-md-8 form-floating">
                                <input type="password" class="form-control" id="floatingPassword" placeholder="Password" required>
                                <label for="floatingPassword">Password</label>
                              </div>
                            <div class="form-floating">
                               <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px" required></textarea>
                               <label for="floatingTextarea2">Laissez vos questions</label>
                            </div>
                            <div class="col-12">
                              <button type="submit" class="btn btn-primary">Soumettre</button>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- coodonnée de l'entreprise-->
                <div class="row justify-content-around">
                    <div class="col-4">
                        <img src="image/icon/location_map.png" style="max-width: 34px;">COCODY FAYA
                    </div>
                    <div class="col-4">
                          <img src="image/icon/photo.png" style="max-width: 34px;">0564221228
                    </div>
                </div>
                <div class="row justify-content-center">
                  <div class="col-4">
                        <img src="image/icon/email.png" style="max-width: 34px;">digitale@gmail.com
                  </div>
                </div>
            </div>
        </div>
    </div>
<!------------------------------------------------------> 

<!-- Body -->
<div class="container">
    <!-- Slide -->
      <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active" data-bs-interval="7000">
            <img src="image/photo/1.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Slide 1</h5>
              <p>
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Adipisci molestias repudiandae dolore?
              </p>
              <p>
                <a href="#">click1</a>
              </p>
            </div>
          </div>
          <div class="carousel-item" data-bs-interval="7000">
            <img src="image/photo/2.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>Slide 2</h5>
                <p>
                  Lorem ipsum, dolor sit amet consectetur adipisicing elit. Adipisci molestias repudiandae dolore?
                </p>
                <p>
                  <a href="#">click2</a>
                </p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="image/photo/3.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>Slide 3</h5>
                <p>
                  Lorem ipsum, dolor sit amet consectetur adipisicing elit. Adipisci molestias repudiandae dolore?
                </p>
                <p>
                  <a href="#">click3</a>
                </p>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div><br>

     <!-- Commande -->
      <div class="container text-center" style="height: 112vh;">
        <div class="row justify-content-evenly">
            <div class="col-3" id="commande">
                <div id="commandeD1">
                    <h2>SOFT</h2>
                </div>
                <div id="commandeD2">
                    <h2>24.000</h2>
                    <p>cfa/AN</p>
                </div>
                <ul>
                    <li>10GB</li><br>
                    <li>1 Nom de domaine offert</li><br>
                    <li>1 Bare de donnée</li><br>
                    <li>Trefic illimité</li><br>
                    <li>10 E-mail possible</li><br>
                    <li>1 Compte FTP</li><br>
                    <li>MysQl, PHP etc...</li><br>
                    <li>Compte control spanel</li><br>
                    <li>24/7j support gratuit</li>
                </ul>
                <div id="commandeD3">
                    <button>
                        COMMANDE
                    </button>
                </div>
            </div>
            <div class="col-3" id="commande">
                <div id="commandeD1">
                    <h2>PREMIUN</h2>
                </div>
                <div id="commandeD2">
                    <h2>48.000</h2>
                    <p>cfa/AN</p>
                </div>
                <ul>
                    <li>25GB</li><br>  
                    <li>1 Nom de domaine offert</li><br>
                    <li>5 Bare de donnée</li><br>
                    <li>Trefic illimité</li><br>
                    <li>20 E-mail possible</li><br>
                    <li>2 Compte FTP</li><br>
                    <li>MysQl, PHP etc...</li><br>
                    <li>Compte control spanel</li><br>
                    <li>24/7j support gratuit</li>
                </ul>
                <div id="commandeD3">
                    <button>
                        COMMANDE
                    </button>
                </div>
            </div>
            <div class="col-3" id="commande">
                <div id="commandeD1">
                    <h2>EXPERT</h2>
                </div>
                <div id="commandeD2">
                    <h2>60.000</h2>
                    <p>cfa/AN</p>
                </div>
                <ul>
                    <li>250GB</li><br>
                    <li>1 Nom de domaine offert</li><br>
                    <li>100 Bare de donnée</li><br>
                    <li>Trefic illimité</li><br>
                    <li>E-mail possible illimité</li><br>
                    <li>Compte FTP illimité</li><br>
                    <li>MysQl, PHP etc...</li><br>
                    <li>Compte control spanel</li><br>
                    <li>24/7j support gratuit</li>
                </ul>
                <div id="commandeD3">
                    <button>
                        COMMANDE
                    </button>
                </div>
            </div>
        </div>
      </div>   
</div>
<!----------------------------------------------------------------------->

<!-- Footer -->
<div class="container-fluid" style="background-color: #FAACA8;
background-image: linear-gradient(19deg, #FAACA8 0%, #DDD6F3 100%);">
  <div class="container"><br>
    <div class="row">
      <div class="col-3">
        <h5>Liens utiles</h5>
        <ul style="list-style: none; margin-left: -30px;">
          <li><a class="text-dark" href="index.php">Acceuil</a></li>
          <li><a class="text-dark" href="page/index2.php">Service</a></li>
          <li>
            <a class="text-dark" data-bs-toggle="offcanvas" data-bs-target="#formCont" aria-controls="offcanvasRight" href=" ">
              Contactez-nous
            </a>
          </li>
        </ul>
      </div>
      <div class="col-6">
        <h5>À propos</h5> 
        <p>
         Nous sommes une équipe de passionnés dont le but est d'améliorer la vie de chacun grâce à des produits disruptifs. 
         Nous fabriquons d'excellents produits pour résoudre vos problèmes techniques & commerciaux.
         Nos produits sont conçus pour les petites et moyennes entreprises désireuses d'optimiser leurs performances.
        </p>
      </div>
      <div class="col-3">
        <h5>Rejoignez-nous</h5>
        <ul style="list-style: none; margin-left: -30px;">
          <li>
            <a class="btn" data-bs-toggle="offcanvas" data-bs-target="#formCont" aria-controls="offcanvasRight" style=" margin-left: -10px;">
              <img src="image/icon/icons8-messages-120.png" style="max-width: 30px;">
              Contactez-nous
            </a>
          </li>
          <li><img src="image/icon/email.png" style="max-width: 30px;">digitale@gmail.com</li>
          <li><img src="image/icon/photo.png" style="max-width: 30px;">0564221228</li>
        </ul>
      </div>
    </div>
  </div>
</div>
<footer id="foot">
    <p>Copyright © 2021 Experts Computing Intelligence. All Rights Reserved</p>
</footer>
<!---------------------------------------------------->

<script src="style/js/script.js"></script>
<script src="style/bootstrap/js/bootstrap.js"></script>
</body>
</html>