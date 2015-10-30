<?php include 'header.php'; ?>
  <div class="container">
    <div class="row">
      <?php 
        error_reporting(0);
        $user = $_POST['nick'];
        $email = $_POST['email'];
        $pass = md5($_POST['pass']);

        if(!$user || !$email || !$pass){

        }else{
          $sql = "insert into register(nick, email, pass) values ('". $user ."', '". $email ."', '". $pass ."')";
          if (mysql_query($sql)) {
            echo "<div class='success'>İşleminiz Başarılı Ana Sayfaya yönlendiriliyorsunuz</div>";
            header("Refresh: 2; /Project/login.php/");
          }else{
            echo "<div class='error'>Hata!</div>";
          }
        }
        ?>
      <div class="form">
        <form action="register.php" method="post">
          <div class="form-img"><a href="#"><img src="/Project/image/img.png"><a></div>
          <div class="form-group">
            <label for="exampleInputEmail1">Kullanıcı Adı</label>
            <input type="text" name="nick" class="form-control" id="exampleInputEmail1" placeholder="Kullanıcı Adı">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">E-Posta</label>
            <input type="email" name="email" class="form-control" id="exampleInputPassword1" placeholder="E-Posta">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Şifre</label>
            <input type="password" name="pass" class="form-control" id="exampleInputPassword1" placeholder="Şifre">
          </div>
          <div class="checkbox">
            <label>
              <input type="checkbox"> Beni hatırla
            </label>
          </div>
          <button type="submit" class="btn btn-default">Üye ol</button>
      </form>
      </div>
    </div>
  </div>
  
<?php include 'footer.php'; ?>