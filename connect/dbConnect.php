<?php
class DbConnection extends DbConfig{
    public function dbConnect()
    {

        $conn = new mysqli($this->hostname,$this->username,$this->password,$this->database);

        if($conn->connect_error){
            throw new Exception($conn->connect_error);
        } else{
            return $conn;
        }
    }
}