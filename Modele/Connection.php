<?php
class Connect{
    private $_host = "localhost";
    private $_user = "root";
    private $_pass = "";
    private $_database = "PROJET_WEB";

    public function connector(){
        $con = mysqli_connect($this->_host, $this->_user , $this->_pass , $this->_database );
        
        if ($con)
        {
           return $con;
        }else{
            die("Connection failed: " . mysqli_connect_error());
        }
    }
}
?>