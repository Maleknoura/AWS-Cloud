<?php  
require_once "./BD/db.php";
class Resultat{
    private $db;
    private $idresultat;
    private $idquestion;
    private $idreponse;

    public function __get($propertyName){
        if(property_exists($this,$propertyName))
            return $this->$propertyName;
        return null;
    }

    public function __set($propertyName,$value){
        if(property_exists($this,$propertyName))
            $this->$propertyName = $value;
        return null;
    }

    public function insertReponseUser(){
        $this->db = new db();
        $pdo = $this->db->connect();

        $query = "INSERT INTO resultat (idquestion,idresultat) values (?,?)";
        $stmt = $pdo->prepare($query);
        $stmt->bindParam( 1 ,$this->idquestion);
        $stmt->bindParam( 2 ,$this->idresultat);
        
        if($stmt->execute())
            return true;
        return null;
    }

    public function score(){
        $this->db = new db();
        $pdo = $this->db->connect();
    
        $query = "SELECT COUNT(rs.idResultat) as total FROM resultat rs
                  JOIN reponses rp ON rp.idreponse = rs.idreponse
                  WHERE rp.statut = 1";
        
        $stmt = $pdo->prepare($query);
    
        if($stmt->execute()) {
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
            return $result['total'];
        }
        
        return null;
    }

    public function delete(){
        $this->db = new db();
        $pdo = $this->db->connect();
    
        $query = "DELETE FROM resultat WHERE idresultat > 0";
        $query2 = "ALTER TABLE resultat AUTO_INCREMENT = 1";
        
        $stmt = $pdo->prepare($query);
        $stmt2 = $pdo->prepare($query2);
    
        if(!($stmt->execute() && $stmt2->execute())) 
            return false;
    }

    public function statuts(){
        $this->db = new db();
        $pdo = $this->db->connect();
    
        $query = "SELECT rp.statut  , q.idquestion , rp.reponse FROM reponses rp 
                    JOIN resultat rs ON rs.idresultat = rp.idresultat
                    JOIN questions q ON q.idquestion = rp.idquestion";
        $stmt = $pdo->prepare($query);
        $stmt->execute();
    
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $results;
    }

    public function justification($idquestion){
        $this->db = new db();
        $pdo = $this->db->connect();
    
        $this->idquestion = $idquestion;
        $query = "SELECT justification FROM reponses 
                WHERE statut = 1 AND idquestion = ?";
        
        $stmt = $pdo->prepare($query);
        $stmt->bindParam(1, $this->idquestion, PDO::PARAM_INT);
        $stmt->execute();
    
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $results;
    }
    
    
    

}

?>