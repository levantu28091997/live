<?php
    
    class DanhMucModel extends DB{
        
        function GetDanhMuc(){
            $qr = "SELECT * FROM danhmuc";
            $dm = mysqli_query($this->con, $qr);
            $arr = array();
            while ($row = mysqli_fetch_array($dm)) {
                $arr[] = $row;
            }
            // var_dump(json_encode($arr)); die;
            return json_encode($arr);
        }
    }
?>