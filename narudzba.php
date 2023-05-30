<?php require_once "bootstrap.php";
// var_dump($_SESSION['proizvod']);
// var_dump($_SESSION['loggedUser']);
$proizvod = $_SESSION['proizvod'];

?>
<?php foreach($proizvod as $naziv): ?>
    

        <?php $korisnik = $korisnik->narudzba($_SESSION['loggedUser']->korisnik_id,$naziv[0]->naziv_proizvoda);?>
        
    <?php endforeach ?>


<?php
?>