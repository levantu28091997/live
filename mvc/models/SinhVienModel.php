<?php
    class SinhVienModel extends DB{

        function GetSv(){
            $qr = "SELECT id FROM sinhvien";
            $kq = mysqli_query($this->con, $qr);
            $arr = mysqli_fetch_array($kq);
            var_dump($arr); die;
        }
    }
?>