<?php include 'header.php'; ?>

  <div class="container">
    <div class="row">
      <div class="form">
        <form action="/Project/login-islem.php" method="post">
          <div class="form-img"><a href="#"><img src="/Project/image/img.png"><a></div>
          <div class="form-group">
            <label for="exampleInputEmail1">Kullanıcı Adı</label>
            <input type="text" name="nick" class="form-control" id="exampleInputEmail1" placeholder="Kullanıcı Adı">
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
          <button type="submit" class="btn btn-primary">Girş yap</button>
      </form>
      </div>
    </div>
  </div>
  
<?php include 'footer.php'; ?>