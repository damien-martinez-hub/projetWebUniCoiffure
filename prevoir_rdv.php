<?php 
if(!session_id()){
  session_start();
}
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
<div class="b">


    <div id="page_ca">
      <?php 
      if(!isset($_SESSION['prenom'])){
        echo "<p> Veuillez vous connecter!</p>";
      }      
      ?>
    <h2  align="center" style="color: rgb(0, 94, 255);">
       
    </h2>
    <br />
  
    <table style="display:none" bgcolor="lightgrey" align="center" 
        cellspacing="21" cellpadding="21">
  
        <!-- The tr tag is used to enter 
            rows in the table -->
  
        <!-- It is used to give the heading to the
            table. We can give the heading to the 
            top and bottom of the table -->
  
        <caption align="top">
            <!-- Here we have used the attribute 
                that is style and we have colored 
                the sentence to make it better 
                depending on the web page-->
        </caption>
  
        <!-- Here th stands for the heading of the
            table that comes in the first row-->
  
        <!-- The text in this table header tag will 
            appear as bold and is center aligned-->
  
        <thead>
            <tr>
                <!-- Here we have applied inline style 
                     to make it more attractive-->
                
                <th style="color: white; background: purple;">
                    Lundi</th>
                <th style="color: white; background: purple;">
                    Mardi</th>
                <th style="color: white; background: purple;">
                    Mercredi</th>
                <th style="color: white; background: purple;">
                    Jeudi</th>
                <th style="color: white; background: purple;">
                    Vendredi</th>
                <th style="color: white; background: purple;">
                    Samedi</th>
                    <th style="color: white; background: purple;">
                        Dimanche</th>
            </tr>
        </thead>
  
        <tbody>
          
        

        </tbody>
    </table>
  </div>


  <div id="horaires">
    <h2></h2>
    <table border="5" cellspacing="0" align="center">
      <!--<caption>Timetable</caption>-->
      <tr>
        <td align="center" height="50"
              width="100">
              <b><br>Heures/<br>Minutes</b>
          </td>
          <td align="center" height="50"
              width="100">
              <b><br>09:30-10:20</b>
          </td>
          <td align="center" height="50"
              width="100">
              <b><br>10:20-11:10</b>
          </td>
          <td align="center" height="50"
              width="100">
              <b><br>11:10-12:00</b>
          </td>
          <td align="center" height="50"
              width="100">
              <b><br>12:00-12:40</b>
          </td>
          <td align="center" height="50"
              width="100">
              <b><br>12:40-13:30</b>
          </td>
          <td align="center" height="50"
              width="100">
              <b><br>13:30-14:20</b>
          </td>
          <td align="center" height="50"
              width="100">
              <b><br>14:20-15:10</b>
          </td>
          <td align="center" height="50"
              width="100">
              <b><br>15:10-16:00</b>
          </td>
      </tr>
     <tr>
      <td>
        :00
   </td>
      <td>
        <form method="post">
        <button>Réserver</button>
        </form>
   </td>
      <td> 
        <form method="post">
        <button type="submit">Réserver</button>
        </form>
      </td>
      <td> 
        
        <form method="post">
        <button type="submit">Réserver</button>
        </form>
      </td>
      <td>
        
        <form method="post">
        <button type="submit">Réserver</button>
        </form>
      </td>
      <td>
        <form method="post">
        <button type="submit">Réserver</button>
        </form> 
      </td>
          <td><form method="post">
          <button type="submit">Réserver</button>
          </form> </td> 
      <td>
            <form method="post">
          <button type="submit">Réserver</button>
          </form> 
    </td>
          <td><form method="post">
          <button type="submit">Réserver</button>
          </form>
        </td>
     </tr>
     
  </table>


</div>

</div>
</div>
<?php
    echo '<input type="hidden" id="sessionUsername" value="' . $_SESSION['prenom'] . '">';
 ?>
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
