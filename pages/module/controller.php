<?php
class controller{
    private $conn;
    function constructor() {
        $this->conn=new mysqli("127.0.0.1","root","","xxx");
        if($this->conn->connect_error){
            die("connect failed");
        }
    }
    function excuteSQL($sql){
        return $this->conn->query($sql);
    }
    function modifySQL($sql){
        $result=$this->conn->query($sql);
        if($result>0)
            return true;
        return false;
    }
    function disconnect() {
        $this->conn->close();
    }

}
?>