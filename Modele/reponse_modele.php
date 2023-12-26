<?php
require_once "./BD/db.php";
class reponses {
    private $db;
    private $idreponse;
    private $reponsecontent;
    private $idquestion;
    private $reponsestatut;

    public function __get($propertyName) {
        if (property_exists($this, $propertyName)) {
            return $this->$propertyName;
        }
        return null;
    }

    public function __set($propertyName, $value) {
        if (property_exists($this, $propertyName)) {
            $this->$propertyName = $value;
        }
        return null; 
    }

    public function getAllReponses() {
        $this->db = new db();
        $pdo = $this->db->connect();

        $query = "SELECT * FROM reponses WHERE idquestion = :idquestion";
        $stmt = $pdo->prepare($query);
        $stmt->bindParam(':idquestion', $this->idquestion);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

}

?>