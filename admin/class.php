<?php
class FilesData{
    private $files;

    public function __construct() {
        include('conn.php');

        $sql = "SELECT id, bac_list FROM tbl_bac";

        $queryIns = $conn->query($sql);
        $data = $queryIns->fetch_all(MYSQLI_ASSOC);

        if ($data) {
            $this->files = $data; 
        }
    }

    public function getFiles() {
        return $this->files;
    }

    public function getValue($part) {
        switch ($part) {
            case "id":
                return $this->files;
            default:
                return null;
        }
    }
}
class Bac{
    private $bac_list;
    
    
    public function __construct()
    {
        include('conn.php');
        $sql = "SELECT id, bac_list FROM tbl_bac";
        $queryIns = $conn->query($sql);
        $bac_list = $queryIns->fetch_assoc();
    
        $this->list = $bac_list['bac_list'];
      
     
    }
    
    public function getdetails ($part)
    {
        switch($part){
            case "bac_list":
                return $this->list;
            default:
                return "Part not found.";
        }
    }
   
}
?>