<?php 
if(!session_id()){
  session_start();
}
?>

<DOCTYPE! html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">

<link rel="stylesheet" href="https://unpkg.com/bs-brain@2.0.4/components/contacts/contact-5/assets/css/contact-5.css">
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
            <a class="nav-link" href="projetinfo.php">Présentation</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="type_coiffure.php">Nos coiffures</a>
           
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link" href="contact.php">Nous contacter</a>
            
          </li>


        </ul>

      </div>
    </div>
  </nav>



</div>

<div class="b_tarifs">
  <h1 class="fw-bold">Nos Prestations</h1>
  <br>
  <div class="container text-center" id="prestations">
    <div class="row"><h2>Pour femme</h2></div>
  <div class="row">
    <div class="col">
     <spam> SHAMPOING </spam>
      <ul>
        <li>☆Normal </li>
          <li>☆Traitant</li>
          <li>☆Inoa</li>
      </ul>
    </div>
    <div class="col">
    <spam>  SOINS </spam>
      <ul>
       <li> ☆Démêlant</li>
        <li> ☆Hydratant</li>
         <li> ☆Traitements</li>
      </ul>
    </div>
    <div class="col">
    <spam>  BRUSHING </spam>
    <ul>
      <li>☆Normal </li>
</ul>
    </div>
    
  </div>

  <div class="row">
     <spam>FORMULES <br>(Shampoing/Soins/Brushing inclus)</spam>
  <div class="col">
   
      <ul>
        <li>☆Chignon</li>
        <li>☆Attachés </li>
          <li>☆Tréssés</li>
           <li>☆Maquillage</li>
      </ul>
    </div>
 <div class="col c5">
     <ul>
        <li>☆A la garçonne</li>
        <li>☆Carré </li>
          <li>☆Mi-Long</li>
           <li>☆Long</li>
      </ul>

</div>
<div class="row">
     <spam>FORMULES SOINS (lissage)<br></spam>
  <div class="col">
   
      <ul>
         <li>☆Bresilien</li>
           <li>☆Lyscia</li>
           <li>☆Au ra</li>
      </ul>
    </div>


</div>
 <div class="row r2"><h2>Pour Homme</h2></div>
   <div class="row c2">
    <div class="col" style="width:40%">
     <spam> Formules</spam>
      <ul>
        <li>☆Shampoing/Coupe </li>
        <li>☆Shampoing/Coupe/Couleur</li>
        <li>☆Défrisage/Coupe</li>
        <li>☆Service Barbe</li>
      </ul>
    </div>

    <div class="col" style="width:40%">
     <spam>Formules(Enfant)</spam>
      <ul>
        <li >☆Coupe garçon (-12 ans)</li>
        <li>☆Coupe garçon</li>
        <li>☆Shampoing/soin/coupe</li>
        <li>☆Shampoing/soin/coupe/brushing</li>
        <li>☆Shampoing/soin/coupe/séchage</li>
        <li>☆Coupe femme</li>
      </ul>
    </div>
    
  </div>
   <div class="row">
  <h2>Nos Couleurs</h2>
<div class="col" style="width:40%">
     <spam>Techniques de coloration</spam>
      <ul>
        <li>☆Ombre Hair </li>
          <li>☆Les Balayages</li>
          <li>☆Les mèches</li>
          <li>☆Patine</li>
          <li>☆Décoloration</li>
      </ul>
    </div>
    <div class="col" style="width:40%">
    <spam>  Défrisage</spam>
      <ul style="margin-top:10%">
       <li>☆Dès 3 mois (entretien)</li>
        <li>*dose suppl. possible</li>
      </ul>
    </div>
    <div class="col" style="width:40%">
    <spam>  Permanente</spam>
      <ul style="margin-top:10%">
       <li>☆Court</li>
        <li>☆Carré</li>
        <li>☆Mi-long</li>
        <li>☆Long</li>
      </ul>
    </div>

</div>
</div>

</div>



 <?php
    echo '<input type="hidden" id="sessionUsername" value="' . $_SESSION['prenom'] . '">';
  ?>
</div>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery.js"></script>

<script type="text/javascript" src="mainprojet.js"></script>


</body>

</html>




























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
          
           <a href="https://www.facebook.com/events/969006941136906/?active_tab=about" style="width:80px;color:white;background-color:black">Facebook<i class="bi bi-facebook"></i></a>
         </div>
       </div>
     </div>
    </div>
 </footer>
</div>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery.js"></script>
<script type="text/javascript" src="mainprojet.js"></script>


</body>

</html>
