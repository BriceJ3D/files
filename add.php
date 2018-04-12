<?php
/**
 * Created by PhpStorm.
 * User: wilder13
 * Date: 09/04/18
 * Time: 16:37
 */

$uploadDir = 'fichiers/';
if(count($_FILES['fichier']['name']) > 0){
    for($i=0; $i<count($_FILES['fichier']['name']); $i++) {
        if (in_array(mime_content_type($_FILES['fichier']['tmp_name'][$i]),['image/gif','image/jpeg','image/png']) && $_FILES['fichier']['error'][$i] == 0 && filesize($_FILES['fichier']['tmp_name'][$i]) <= 1000000){
            $extension = pathinfo($_FILES['fichier']['name'][$i], PATHINFO_EXTENSION);
            $filename = uniqid('image') . '.' .$extension;
            $uploadFile = $uploadDir . basename($filename);

            //Make sure we have a filepath
            if ($uploadFile != "") {
                if (move_uploaded_file($_FILES['fichier']['tmp_name'][$i], $uploadFile)) {
                    echo 'ajouté ' . $_FILES['fichier']['name'][$i];
                }
            }
        }
    }
}

header("Location:index.php");

