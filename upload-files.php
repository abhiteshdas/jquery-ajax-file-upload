<?php
$uploaddir = "uploadedFiles/"; 
    $fileName=time().'_'.str_replace(' ', '_', basename($_FILES['uploadfile']['name']));
    $file = $uploaddir.$fileName; 
    if (move_uploaded_file($_FILES['uploadfile']['tmp_name'], $file)) { 
        echo $fileName;
    } else {
        echo 'error';
    }
?>