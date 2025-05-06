
<?php session_start()

?>
<DOCTYPE! html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="projetinfo.css">

</head>




<body>
   
  <div id="main">

    <div class="titre" style="text-align:center">
      <img src="img/titre.png" alt="Beautiful Landscape" width="500" height="176" >
      </div>
      <div class="a">
      
      
      <!--  NAvigation -->
      
      
      
      
      <nav class="navbar bg-light border-bottom" style="background-color: #e3f2fd;" border-body data-bs-theme="light">
          
          
          <div class="container-fluid position-relative" >
            <!-- <a class="navbar-brand fa fa-align-justify" href="#"></a> -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
        
            
                <a class="a nav-brand" aria-current="page" href="projetinfo.php" innerText="Accueil">Accueil
                  
                 
                </a>
             
        
      
             
                <a class="b nav-brand" href="#" innerText="Nos coiffures">Nos coiffures
               
      
                </a>
             
           
                <a class="c nav-brand" href="#" innerText="Nous contacter">Nous Contacter
      
                 
      
                </a>

                <a class="d nav-brand" href="#" innerText="Mon Compte">Mon Compte
    
                </a>
       
            </ul>
      
          </a>
      
            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
      
      
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="#">Accueil</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Présentation</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Nos coiffures</a>
                 
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link" href="#">Nous contacter</a>
                  
                </li>
      
      
              </ul>
      
            </div>
          </div>
        </nav>
      
      
      
      </div>
<div class="b">


    <div id="page_ca">


    <h1>Connexion:</h1>
    
        <form method="post">
            
            <div class="c100">
                <label for="mail">Email : </label>
                <input type="email" id="mail" name="mail"
                required pattern="^[A-Za-z0-9]+@{1}[A-Za-z]+\.{1}[A-Za-z]{2,}$">
            </div>
            <div class="c100" >
              
              <label for="mdp">Mot de passe: </label>
                <input type="text" id="mdp" name="mdp"
                required pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).{8,}$" maxlength="20">
            </div>

            <div class="c100" id="submit">
              <form method="post">
                <input type="submit" value="Envoyer">
              </form>
            </div>
        </form>
      
        <?php 
include 'server/connexion_server.php'; ?> 
           
  
    <br/>
  
  </div>

</div>
</div>
<div>
<footer class="footer">
    <div class="container">
     <div class="row">
       <div class="footer-col">
         <h4>company</h4>
         <ul>
           <li><a href="#">about us</a></li>
           <li><a href="#">our services</a></li>
           <li><a href="#">privacy policy</a></li>
           <li><a href="#">affiliate program</a></li>
         </ul>
       </div>
       <div class="footer-col">
         <h4>get help</h4>
         <ul>
           <li><a href="#">FAQ</a></li>
           <li><a href="#">payment options</a></li>
         </ul>
       </div>
       <div class="footer-col">
         <h4>follow us</h4>
         <div class="social-links">
           <a href="#"><i class="fab fa-facebook-f"></i></a>
           <a href="#"><i class="fab fa-twitter"></i></a>
           <a href="#"><i class="fab fa-instagram"></i></a>
           <a href="#"><i class="fab fa-linkedin-in"></i></a>
         </div>
       </div>
     </div>
    </div>
 </footer>
</div>
<?php 
    echo '<input type="hidden" id="sessionUsername" value="' . $_SESSION['prenom'] . '">';
  ?>

 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery.js"></script>

<script type="text/javascript" src="mainprojet.js"></script>

</body>

</html>
