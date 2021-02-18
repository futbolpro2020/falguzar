<?php
 
    $image = $_POST['image'];
    $name = $_POST['name'];
 
    $realImage = base64_decode($image);
 
    file_put_contents("dosyalar/".$name, $realImage);
 
    echo "Image Uploaded Successfully.";
 
?>
