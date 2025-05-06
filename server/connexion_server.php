<?php
               
// Your code here
                /*On utilise session_id() pour récupérer l'id de session s'il existe.
                *Si l'id de session n'existe  pas, session_id() rnevoie une chaine
                *de caractères vide*/
               
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $serveur = "localhost"; $dbname = "pdodb"; $user = "root"; $pass = "";
    
    function valid_donnees($donnees){
      $donnees = trim($donnees);
      $donnees = stripslashes($donnees);
      $donnees = htmlspecialchars($donnees);
      return $donnees;
  }

    $mail = valid_donnees($_POST["mail"]);
    $mdp=valid_donnees($_POST["mdp"]);;
    $prenom="";

    /*Si les champs prenom et mail ne sont pas vides et si les donnees ont
     *bien la forme attendue...*/
     if(!empty($mdp)
        && strlen($mdp) <= 20
        && preg_match("/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).{8,}$/",$mdp)
        && !empty($mail)
        && filter_var($mail, FILTER_VALIDATE_EMAIL) ) {
    
        try{
            //On se connecte à la BDD
            
            $dbco = new PDO("mysql:host=$serveur;dbname=$dbname",$user,$pass);
            $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sth = $dbco->prepare("
            SELECT * FROM clients WHERE mdp='".$mdp."' AND Mail='".$mail."'"); 
            $sth->execute();
            $resultat = $sth->fetchAll(PDO::FETCH_ASSOC);
            $verif=0;
            $keys = array_keys($resultat);
                for($i = 0; $i < count($resultat); $i++){
                    foreach($resultat[$keys[$i]] as $key => $value){
                        if(($key=="Mail" && $value==$mail) || ($key=="mdp" && $value==$mdp)){
                            $verif=$verif+1;
                        }
                        if($key=="Prenom"){
                            $prenom=$value;
                        }
                    }
                    echo '<br>';
                }

                if($verif==2){
                    $id_session = session_id();
                    $_SESSION['mail'] = $mail;
                    $_SESSION['prenom'] = $prenom;   
                    
                    echo "<p>Vous êtes connecté!</p>";
                    
                }else{
                    echo "<p>Impossible de se connecter: Identifiants faux</p>";
                }
                
        }catch(PDOException $e){
            echo 'Erreur : '.$e->getMessage();
            
        }
}
else{
    echo "<p>vos données n'ont pas été enregistrés!</p>";
}
}
ob_end_flush();
?>