<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        if(!session_id()){
            echo "<p>Veuillez vous connecter avant de vous déconnecter !</p>";
        }else{
            if(isset($_SESSION['prenom'])){
                unset($_SESSION['prenom']);
            }
            
            /*On détruit les données de session*/
            session_destroy();
            echo "<p>Vous êtes déconnecté !</p>";
        }
    }
?>