<?php
class User extends DB{
    /*
     *  obtener el registro de todos los usuarios registrados en la DB
     */
    public function get_all(){
        try{
            $r=parent::connect()->prepare("SELECT * FROM users");
            $r->execute();
            return $r->fetchAll(PDO::FETCH_OBJ);
        }catch (Exception $e){
           die($e->getMessage());
        }
    }
}
