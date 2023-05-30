<?php require_once "bootstrap.php";?>
<?php

if( $_SESSION['proizvod']==null){
    $_SESSION['proizvod']=array();
}



if(isset($_POST['dodaj'])){
    $id=$_POST['id'];
    $oneProizvod=$oneProizvod->cart($id);
    $niz=array();
    $niz=$_SESSION['proizvod'];
    array_push($_SESSION['proizvod'],$oneProizvod);
    // var_dump($_SESSION['proizvod']);
}



?>




<?php require_once "views/index.view.php" ?>







