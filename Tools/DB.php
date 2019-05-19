<?php
/**
 * Created by PhpStorm.
 * User: alan
 * Date: 18/12/18
 * Time: 11:16
 */
class DataBase extends mysqli{
    var $result;
    var $numRegister;

    function _construct(){
        $this->connect("localhost","fumycel","lpmj1212","Fumycel");
        if($this->error > '')
            echo $this->error;
    }
    function disconnect(){
        $this->close();
    }

    function request($query){
        $this->result=$this->query($query);
        if(strpos(strtoupper($query), "SELECT") !== false){
        $this->numRegister = mysqli_num_rows($this->result);
        }
    }

    function ResultObject(){
        return $this->result->fetch_object();
    }

    function ResultArray(){
        return $this->result->fetch_array(MYSQLI_ASSOC);
    }

}