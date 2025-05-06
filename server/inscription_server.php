<?php
/*

<div class="c100" >
              <form method="post">
              <label for="mdp">Mot de passe: </label>
                <input type="text" id="mdp" name="mdp"
                required pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).{8,}$" maxlength="20">
              </form>
            </div>



            
        
            $servername = 'localhost';
            $username = 'root';
            $password = '';
            
            try{
                $dbco = new PDO("mysql:host=$servername", $username, $password);
                $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                
                $sql = "CREATE DATABASE pdodb";
                $dbco->exec($sql);
                
                echo 'Base de données créée bien créée !';
            }
            
            catch(PDOException $e){
              echo "Erreur : " . $e->getMessage();
            }

           
            $servname = 'localhost';
            $dbname = 'pdodb';
            $user = 'root';
            $pass = '';
            
            try{
                $dbco = new PDO("mysql:host=$servname;dbname=$dbname", $user, $pass);
                $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                
                $sql = "CREATE TABLE Clients(
                        Id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                        Nom VARCHAR(30) NOT NULL,
                        Prenom VARCHAR(30) NOT NULL,
                        Adresse VARCHAR(70) NOT NULL,
                        Ville VARCHAR(30) NOT NULL,
                        Codepostal INT UNSIGNED NOT NULL,
                        Pays VARCHAR(30) NOT NULL,
                        Mail VARCHAR(50) NOT NULL,
                        DateInscription TIMESTAMP,
                        UNIQUE(Mail))";
                
                $dbco->exec($sql);
                echo 'Table bien créée !';
            }
            
            catch(PDOException $e){
              echo "Erreur : " . $e->getMessage();
            }

          -->
          */
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $serveur = "localhost"; $dbname = "pdodb"; $user = "root"; $pass = "";
    
    function valid_donnees($donnees){
      $donnees = trim($donnees);
      $donnees = stripslashes($donnees);
      $donnees = htmlspecialchars($donnees);
      return $donnees;
  }

    $prenom = valid_donnees($_POST["prenom"]);
    $mail = valid_donnees($_POST["mail"]);
    $age = valid_donnees($_POST["age"]);
    $sexe = valid_donnees($_POST["sexe"]);
    $pays = valid_donnees($_POST["pays"]);
    $nom="";
    $adresse="";
    $ville="";
    $dateInscription=date("Y-m-d h:i:sa");
    $codepostal=0;
    $mdp=valid_donnees($_POST["mdp"]);;

    /*Si les champs prenom et mail ne sont pas vides et si les donnees ont
     *bien la forme attendue...*/
     if(!empty($prenom)
        && strlen($prenom) <= 20
        && preg_match("/^[A-Za-z '-]+$/",$prenom)
        && !empty($mail)
        && filter_var($mail, FILTER_VALIDATE_EMAIL)
        && !empty($mdp) && preg_match("/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).{8,}$/",$mdp) ) {
    
        try{
            //On se connecte à la BDD

            $dbco = new PDO("mysql:host=$serveur;dbname=$dbname",$user,$pass);
            $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            //On insère les données reçues
            $sth = $dbco->prepare("
                INSERT INTO clients(Nom,Prenom,Adresse,Ville,Codepostal,Pays,Mail,DateInscription,age,sexe,mdp)
                VALUES(:Nom,:Prenom,:Adresse,:Ville,:Codepostal,:Pays,:Mail,:DateInscription,:age,:sexe,:mdp)");   
            
            $sth->bindParam(':Nom',$nom);
            $sth->bindParam(':Prenom',$prenom);	
            $sth->bindParam(':Adresse',$adresse);
            $sth->bindParam(':Ville',$ville);
            $sth->bindParam(':Codepostal',$codepostal);
            $sth->bindParam(':Pays',$pays);
            $sth->bindParam(':Mail',$mail);
            $sth->bindParam(':DateInscription', $dateInscription);
            $sth->bindParam(':age',$age);
            $sth->bindParam(':sexe',$sexe);
            $sth->bindParam(':mdp',$mdp);
            $sth->execute();
          echo "<p>Vos données ont bien été enregistrées!</p>";
        }
        catch(PDOException $e){
            echo 'Erreur : '.$e->getMessage();
        }
    }else{
        echo "<p>Vos données n'ont pas été enregistrées. Veuillez entrer le bon format.</p>";
      
    }
  }
?>