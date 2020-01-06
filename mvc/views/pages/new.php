<h2>New</h2>

<?php
    var_dump($data["sinhvien"]);
    $bb = [];
    $data["sinhvien"] = $bb;
    foreach($bb as $item =>$value){
        echo $value.id;
    }
?>