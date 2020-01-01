<?php
    class UserModel extends DB{

        public function InUser($user, $pass, $email, $diachi){
            $qr = "INSERT INTO users VALUES (null, '$user', '$pass', '$email', '$diachi')";
            mysqli_query($this->con, $qr);

            $result = false;
            if (mysqli_query($this->con, $qr)) {
                $result = true;
            }
            return json_encode($result);
        }
    }
?>