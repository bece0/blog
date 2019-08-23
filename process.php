<?
   # Bu sayfa giriş bilgilerinin kontrol edildiği sayfadır
   # giriş formunda gelen verileri doğru ise kullanıcı anasayfaya yani indexphpye yönlendirilir.
   # YAnlış ile lohin.php sayfasına yönlendşrilir
?>


<div>

     <?php 
     
     if($_SERVER["REQUEST_METHOD"] == "POST"){
         echo '<h3> sayfa post ile açıldı</h3>';

        $username= $_POST["username"];
        $password= $_POST["password"];

        if($username=="" || $password==""){
            header("location: login.php");    
        }
        //TODO - kullancıı bilgilerini veritabanından kontrol et
        include 'config.php';

            //"SELECT * FROM author where username ='bece0' and password = 'bece0' ";

        $sql = "SELECT * FROM author where username = '".$username."' and password = '". $password ."'";
        
        $result = $conn->query($sql);
        

        //echo $sql;

        if (!$result) {
            trigger_error('Invalid query: ' . $conn->error);
        }

        echo $result->num_rows;


     
        if ($result->num_rows > 0) {
            //while($row = $result->fetch_assoc()) {
            //    echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
            //}

            setcookie("kullanici", $username, time() + (86400 * 30), "/");
            //eğer bilgiler doğru ise index.php açılsın
            header("location: index.php");
        } else {
            header("location: login.php");
        }
 
     }else{
        echo '<h3> sayfa post ile açılmadı</h3>';

        header("location: login.php");
     }
        


     ?>

<div>