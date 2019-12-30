<?php
    class SinhVienModel extends DB{

        function GetSv(){
            $qr = "SELECT * FROM sinhvien";
            return mysqli_query($this->con, $qr);
        }
    }
?>