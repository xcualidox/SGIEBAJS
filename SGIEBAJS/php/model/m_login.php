<?php
include_once("m_db.php");
class login extends database_connect{
    private $cedula;
    public function __construct()
    {
        $this->cedula=0;
    }
    public function setLogin($cedula){
        $this->cedula = $cedula;
    }
    public function getLogin(){
        $query = 'SELECT cedula, `password` from login where cedula = ?';
        $result = $this->query($query, $this->cedula);
        return $result  ? $this->fetch_query($result): false;
        // return $this->query($query, $this->cedula);
    }
    public function getRol(){
        $query = 'SELECT rol from docente where cedula = ?';
        $result = $this->query($query, $this->cedula);
        return $result  ? $this->fetch_query($result): false;
    }
}
?>