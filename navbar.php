<?php require_once "bootstrap.php"; ?>


<nav class="navbar navbar-expand navbar-dark bg-dark">
    <a href="index.php" class="navbar-brand"> CnC</a>

    <ul class="navbar-nav ml-auto">
        <?php if(isset($_SESSION['loggedUser'])): ?>
        <li class="nav-item">
            <a href="allFromUser.php?user_id=<?php echo $_SESSION['loggedUser']->korisnik_id ?>"class="nav-link"><i class="fa fa-user-o" aria-hidden="true"></i><?php echo ' '. $_SESSION['loggedUser']->ime ?></a>
        </li>
        <li class="nav-item">
            <a href="logout.php"class="nav-link"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a>
        </li>
        <li>
            <a href="korpa.view.php" class="nav-link"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Korpa(<?php if(isset($_SESSION['proizvod'])){echo count($_SESSION['proizvod']);} ?>)</a>
        </li>     
        <?php else: ?>
            <li class="nav-item">
            <a href="login_register.php"class="nav-link"><i class="fa fa-sign-out" aria-hidden="true"></i> Login/Register</a>
            </li>
            
        <?php endif ?>
    </ul>
</nav>

<nav class="navbar navbar-expand navbar-dark bg-dark">
    <?php foreach($query as $cat): ?>
        <a href="kategorija.php?id=<?php echo $cat->kategorija_id ?>" class="btn btn-outline-warning btn-sm m-2">
            <?php echo $cat->naziv_kategorije?>
        </a>
    <?php endforeach ?>
</nav>


