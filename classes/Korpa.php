<?php 
class Korpa extends QueryBuilder {
        public $cartProizvod=NULL;
        public $dodano=NULL;
   public function cart($id){
        $sql = "SELECT * FROM proizvod WHERE proizvod.proizvod_id = ?";
        $query = $this->db->prepare($sql);
        $query->execute([$id]);
        $cartProizvod = $query->fetchAll(PDO::FETCH_OBJ); 
        
        return $cartProizvod;
        
   }

}
?>