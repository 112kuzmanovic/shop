<?php require_once "views/partials/top.php"; 
session_start();
$config = require "config.php";

require "classes/Connection.php";
$db = Connection::connect($config['database']);
require "classes/QueryBuilder.php";
require_once "classes/User.php";
require_once "classes/Kategorija.php";
require_once "classes/Korpa.php";



$query = new QueryBuilder($db);
$query = $query->selectAll('kategorija');

$user = new User($db);

$kategorija = new Kategorija($db);
if(isset($_GET['id'])){
   $id = $_GET['id'];
$kategorija = $kategorija->allCategory($id);
}

$proizvod = new Kategorija($db);
$proizvod = $proizvod->sviProizvodi();
// var_dump($proizvod);
$oneProizvod = new Korpa($db);

$korisnik=new User($db);












 
       
    
