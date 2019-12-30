<h2>New</h2>

<?php
    while ($row = mysqli_fetch_array($data["sinhvien"])) {
       echo $row["HoTen"];
    }
?>