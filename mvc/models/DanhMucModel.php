<?php
    
    class DanhMucModel extends DB{
        
        function GetDanhMuc(){
            $qr = "SELECT * FROM danhmuc";
            $dm = mysqli_query($this->con, $qr);
            return $dm;
        }
    }
?>