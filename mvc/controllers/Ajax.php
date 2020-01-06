<?php
    class Ajax extends Controller{
        public $userModel;
        public function __construct(){
            $this->userModel = $this->GetModel("UserModel");
        }
        public function checkUsername(){
            $un = $_POST["un"];
            echo $this->userModel->checkUser($un);
        }
    }
?>