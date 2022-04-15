<?php 

try{
    $db=new PDO("mysql:host=localhost;dbname=archivefile;charset=utf8",'root','');
}
catch (PDOException $e){
    
        echo $e->getMessage();

}


?>