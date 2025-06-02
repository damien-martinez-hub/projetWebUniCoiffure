<?php 

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $content = $_POST['content'];
    $file = 'data.txt';

    if (file_put_contents($file, $content)) {
        echo 'File written successfully';
    } else {
        echo 'Error writing file';
    }
}

  
  
?>