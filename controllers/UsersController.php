<?php


class UsersController extends User{
      public function index(){
          require_once ('views/users/index.php');
      }
     /*
      * formulario
      *  crear nuevo usuario
      */
      public function create(){
          require_once ('views/users/create.php');
      }


}
