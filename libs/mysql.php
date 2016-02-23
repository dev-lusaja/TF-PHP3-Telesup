<?php
class Mysql {
    private $conexion;
    
    function __construct($servidor, $user, $pass)
    {
        $this->conexion=mysql_connect($servidor,$user,$pass);
        if(!$this->conexion){
            throw new Exception(mysql_error());
        }
    }
    
    public function ChangeDb($db){
        if (!mysql_select_db($db, $this->conexion)){
            throw new Exception(mysql_error());
        }
    }
    
    public function Query($sql)
    {   
        $result = mysql_query($sql, $this->conexion);
        $rsp = array();
        if (!$result){
            throw new Exception(mysql_error());
        } else if (is_resource($result)){
            return $this->FetchAssoc($result);
        } else {
            return $result;
        }
    }
    
    public function Disconnet()
    {
        if (!mysql_close($this->conexion))
        {
            throw new Exception(mysql_error());
        }
    }

    private function FetchAssoc($resource)
    {
        $result = array();
        while ($row = mysql_fetch_assoc($resource)) {
            $result[] = $row;
        }
        return $result;
    }
}