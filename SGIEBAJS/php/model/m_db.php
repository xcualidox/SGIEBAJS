<?php
class database_connect{
    private $connection;
    private $dsn;
    private $host;
    private $user;
    private $dbName;
    private $password;
    protected function connect(){
        $this->host="localhost";
        $this->dbName="sgiebajs";
        $this->user = "root";
        $this->password = "";
        try {
        $this->dsn = "mysql:host =$this->host;dbname=$this->dbName";
        $this->connection = new PDO($this->dsn, $this->user,$this->password);
        $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $this->connection;}
        catch( PDOException $e){
            echo "Connection failed: ".$e->getMessage(); 
        }
    }
    protected function query($query , $data){
        $this->connect();
        $query_exec = $this->connect()->prepare("$query");
        $query_exec->execute(is_array($data)?$data:[$data]);
        if( $query_exec->rowCount()>0){
            return $query_exec;
        }
        return false;

    }
    protected function fetch_query($record){
        return $record->fetch(PDO::FETCH_ASSOC);
    }

}
?>