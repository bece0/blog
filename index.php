<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

<!-- Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

        
    <!-- <a href="postekle.php">Yeni post Ekle</a> -->

    <?php
    include 'config.php';
    include 'navbar.php';


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
        echo "<h6>blog yazisi bulunamadi!</h6>";
    }
?>
