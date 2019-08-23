<h3>Post OLuşturma ekranı</h3>
    <form method="post" action="postekle.php">
       
        <input type="text" placeholder="başlık" name="title">
        <br>
                 
        <textarea  placeholder="blog yazısı giriniz" name="bbody"></textarea>
        <br>

        <input type="submit" value="Yazı Ekle">
    </form>


<?php

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        
    }

?>
