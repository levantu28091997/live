<?php
    class Register extends Controller{
        
        public $userModel;
        public function __construct(){
            $this->userModel = $this->GetModel("UserModel");
        }
        function SayHi(){
            $this->GetView("layout2",[
                "page" => "register"
            ]);
        }
        function InsertUser(){
            // Lay thong tin tu form dang ky
            if (isset($_POST["btnRegister"])) {
                $user = $_POST["username"];
                $pass = $_POST["password"];
                $email = $_POST["email"];
                $diachi = $_POST["address"];

                // goi model
                $reusult = $this->userModel->InUser($user, $pass, $email, $diachi);

                var_dump($reusult);
                // show ket qua
                $this->GetView("layout2",[
                    "page" => "register",
                    "result"=> $reusult
                ]);
            }
        }
    }
?>