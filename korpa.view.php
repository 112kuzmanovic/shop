<?php require_once "bootstrap.php" ?>
<?php require_once "navbar.php" ?>
 


<?php if(isset($_SESSION['proizvod'])): ?>
    <?php $proizvodi_u_korpi=$_SESSION['proizvod'] ?>
    
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Broj proizvoda</th>
                <th scope="col">Naziv proizvoda</th>
                <th scope="col">Cijena</th>
                

            </tr>
        </thead>
        <tbody>
            <?php foreach ($proizvodi_u_korpi as $stavke): ?>
                <?php foreach ($stavke as $stavka): ?>
                    <tr>
                        <th scope="row"><?php echo $stavka->proizvod_id ?></th>
                        <td><?php echo $stavka->naziv_proizvoda ?></td>
                        <td><?php echo $stavka->cijena ?></td>
                    </tr>
                    <?php 
                    
                    ?>
                <?php endforeach ?>
            <?php endforeach ?>
        </tbody>
    </table>
    <a href="narudzba.php" class="btn btn-info" name="naruci">Naruci</a>
    
    <?php
    $zbir=0;
    
    for ($i=0; $i < count($proizvodi_u_korpi) ; $i++) { 
        $zbir+=$proizvodi_u_korpi[$i][0]->cijena;
        
    }
    
   ?>
<?php if(isset($_POST['obrisi'])){
    $_SESSION['proizvod']=null;
} ?>

    <div class="jumbotron">
        <button class="btn btn-success float-right">Ukupan iznos:<?php echo $zbir.'KM' ?></button><br><br>
        <form action="korpa.view.php" method="POST">
        <button type="submit" class="btn btn-danger float-right" name="obrisi">Isprazni korpu</button>
        </form>


    </div>


   
<?php endif ?>