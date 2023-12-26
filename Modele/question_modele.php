<?php
require_once "./BD/db.php";
class questions{
    private $db;
    private $idquestion;
    private $questioncontent;
    private $idthemes;
    private $themename;

    public function __get($propertyName)
    {
        if (property_exists($this, $propertyName))
            return $this->$propertyName;

        return null;
    }

    public function __set($propertyName, $value)
    {
        if (property_exists($this, $propertyName))
            $this->$propertyName = $value;
        
        return null; 
    }

    public function getQuestion()
    {
        $this->db = new db();
        $pdo = $this->db->connect();

        $query = "SELECT *FROM questions
        JOIN themes ON themes.idthemes = questions.idthemes
        WHERE questions.idquestion = :idquestion";
        

                   

        $stmt = $pdo->prepare($query);
        $stmt->bindParam(':idquestion', $this->idquestion);
        $stmt->execute();

        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($result) {
            $this->idquestion = $result['idquestion'];
            $this->questioncontent = $result['questioncontent'];
            $this->idthemes = $result['idthemes'];
            $this->themename = $result['themename'];
            return true;
        }

        return false;
    }
}
?>
