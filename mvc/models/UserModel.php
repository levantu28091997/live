<?php
    class UserModel extends DB{

        public function InUser($user, $pass, $email, $diachi){
            $qr = "INSERT INTO users VALUES (null, '$user', '$pass', '$email', '$diachi')";
            
            $result = false;
            if (mysqli_query($this->con, $qr)) {
                $result = true;
            }
            return json_encode($result);
        }

        public function checkUser($un){
            $qr =  "SELECT * FROM users WHERE username = '$un' ";
            $kq = mysqli_query($this->con, $qr);
            $result = false;
            if(mysqli_num_rows($kq) > 0){
                $result = true;
            }
            return json_encode($result);
        }
    }
?>