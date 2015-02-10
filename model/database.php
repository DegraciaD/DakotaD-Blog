<?php

class database {

    private $connection;
    private $host;
    private $username;
    private $password;
    private $database;

    public function _construct($host, $username, $password, $database) {
        $this->host = $host;
        $this->username = $username;
        $this->password = $password;
        $this->database = $database;
    }

    public function openConnection() {
        $this->connection = new mysqli($this->host, $this->username, $this->password, $this->database);

        if ($this->connection->connect_error) {
            die("<P>Error: " . $this->connection->connect_error . "</P>");
       
            
            
        }
    }

    public function closeConnection() {
      
        if(isset($this->connection)){
            $this->connection->close();
        }
    }
    
    

    public function query($string) {
        $this->connection();
        
        $query =$this->connection->query();
    }

}
