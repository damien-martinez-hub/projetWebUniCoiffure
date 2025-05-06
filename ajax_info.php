<?php 



if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['button'];
    
    echo "<p>Bonjour, $name !</p>";
    $count_global=5;
    echo json_encode($count_global); 
    }

  
  
?>