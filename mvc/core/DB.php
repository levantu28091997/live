<?php
    class DB{
        public $con;
        protected $servername = "localhost";
        protected $username = "root";
        protected $password = "";
        protected $database = "mvc";

        function __construct(){
            $this->con = mysqli_connect($this->servername, $this->username, $this->password);
            mysqli_select_db($this->con, $this->database);
            mysqli_query($this->con, "SET NAMES 'utf8' ");
        }
    }
?>