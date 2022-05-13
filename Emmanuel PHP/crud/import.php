<?php
require 'db.php';
if(isset($_POST["Import"])){
    $filename=$_FILES["file"]["temp_name"];
    if($_FILES["file"]["size"]>0){
        $file=fopen($filename,"r");
        while(($data=fgetcsv($file,10000,",")) !== FALSE){
            $sql='INSERT INTO people(name,email) VALUES(:name,:email)';
            $statement=$connection->prepare($sql);
            $statement->execute([':name' =>$data[0], ':email' =>$data[1]]);
        }
        fclose($file);
        header("Location:/crud");
    }
    else{
        echo "please recheck your file";
    
    }
}

?>