<?php 
class Kategorija extends QueryBuilder {

    function allCategory ($id){
        $sql = "SELECT proizvod_id,naziv_proizvoda,proizvod.kategorija_id,slika,opis,cijena,stara_cijena,stanje,naziv_kategorije FROM proizvod INNER JOIN kategorija ON kategorija.kategorija_id = proizvod.kategorija_id WHERE proizvod.kategorija_id = ?";
        $query = $this->db->prepare($sql);
        $query->execute([$id]);
        $result = $query->fetchAll(PDO::FETCH_OBJ);  
        return $result;
        
    }

    function sviProizvodi(){
        $sql = "SELECT * FROM proizvod,kategorija WHERE proizvod.kategorija_id=kategorija.kategorija_id";
        $query = $this->db->prepare($sql);
        $query->execute();
        $result = $query->fetchAll(PDO::FETCH_OBJ);  
        return $result;

    }
}
?>