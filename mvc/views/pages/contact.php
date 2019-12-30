<h2>Contact</h2>

<?php
    while ($row = mysqli_fetch_array($data["danh"])) {
        echo $row["name"]."<br>";
    }

?>