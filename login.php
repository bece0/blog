<?
   # Bu sayfa uygulamanın giriş sayfasıdır
   # burada kullanıcı girişi için bir form bulunur. form içerisinde kullanıcı adı ve parola vardır.
   # Giriş butonu vardır
   # Giriş butonuna basılınca form verileri process.php ye gönderilir.
?>


<div>


    <?php 

        if(isset($_COOKIE["kullanici"])){
            $cookie_kullanici = $_COOKIE["kullanici"];

            //kullanıcı daha önce oturum açtığı için "kullanici" isimli cookienin varlığı kontrol edilir
            // coookie var ise anasayfaya yönlendilir.
            
            if($cookie_kullanici !=null && $cookie_kullanici != "" )
                header("location: index.php");
        }


    ?>


    <h3>Giriş Yapınız</h3>
    <form method="post" action="process.php">
        kullanıcı adı : 
        <input type="text" placeholder="kullanıcı adını giriniz" name="username">
        <br>
        parola :         
        <input type="password" placeholder="parola giriniz" name="password">
        <br>

        <input type="submit" value="Giriş Yap">
    </form>

<div>