<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

<!-- Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<?php
include 'navbar.php';
?>
<h6><b>Post Oluşturma ekranı</b></h6>

<br><br>



<div class="row">
    <form class="col s12">
      <div class="row">
        <div class="input-field col s6">
          <input type="text" placeholder="Başlık" name="title">
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
        <textarea placeholder="Blog yazısı giriniz" name="bbody" class="materialize-textarea"></textarea>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
        <button class="btn waves-effect waves-light" type="submit" name="action">Yazı Ekle</button>
        </div>
      </div>
    </form>
  </div>
        








<script>
  $(document).ready(function() {
    M.updateTextFields();
  });
</script>

<?php

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        
    }

?>