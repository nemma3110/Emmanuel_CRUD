<?php
//Setting DSN(Data Source Name)
$dsn='mysql:host=localhost;dbname=company';
$username='root';
$password='';
$options=[];
try{
    //creating PDO instance
    $connection=new PDO($dsn,$username,$password,$options);

}
catch(PDOExceprion $e){
    throw new PDOException($se->getMessage(),(int)$e->getCode());
}
?>