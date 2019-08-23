<?php 

    echo "hos  geldiniz !<br>";

    ?>
 
    <a href="postekle.php">Yeni post Ekle</a>

    <?php
    include 'config.php';


    $sql = "SELECT * FROM post";

    $result = $conn->query($sql);

    if (!$result) {
        trigger_error('Invalid query: ' . $conn->error);
    }

    if ($result->num_rows > 0) {

        while($row = $result->fetch_assoc()) {
            echo $row["title"]. " (" . $row["date"]. ")<br>";
        }
 
    }else {
        echo "<h4>blog yazisi bulunamadi!</h4>";
    }
?>
