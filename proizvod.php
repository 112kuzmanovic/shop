
<div class="container">
    <div class="row">
    <?php foreach ($proizvod as $proizvod): ?>
        <form action="korpa.php"method="POST">
            <input type="hidden" name="id" value="<?php echo $proizvod->proizvod_id ?>">
        <div class="card" style="width: 18rem;margin-right:30px">
  <img class="card-img-top" src="images/<?php echo $proizvod->slika ?>" alt="Card image cap">
  <div class="card-body">
    <h5 name="naziv" class="card-title"><?php echo $proizvod->naziv_proizvoda ?></h5>
    <p class="card-text"><?php echo $proizvod->opis ?></p>
    <?php if($proizvod->stara_cijena!='0'): ?>
    <button class="btn btn-outline-danger btn-sm float-left"><s><?php echo $proizvod->stara_cijena.'KM' ?></s></button>
    <?php endif ?>
    <button class="btn btn-success btn-sm float-right">
        <?php if($proizvod->cijena!=0):  ?>
            <?php echo $proizvod->cijena .'KM' ?>
        <?php else: ?>
            <?php echo 'Cijena po dogovoru' ?>
        <?php endif ?>
    </button><br><br>
    

    <?php if(isset($_SESSION['loggedUser'])): ?>
    <button type="submit" name="dodaj" class="btn btn-primary btn-sm">Dodaj u korpu</button><br>
    <?php endif ?>


    <?php if($proizvod->stanje!=0): ?>
    <p><i><em>Trenutno na stanju:<?php echo $proizvod->stanje ?></em></i></p>
    <?php else: ?>
        <?php echo "Trenutno nema na stanju!" ?>
    <?php endif ?>
  </div>
</div>
        </form>
       
    
<?php endforeach ?>

    </div>
    
</div>