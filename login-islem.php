<?php include 'header.php'; ?>
  <?php 
  error_reporting(0);
    
  $user = $_POST['nick'];
  $pass = $_POST['pass'];

  session_start();
  ob_start();

  if (!$user || !$pass) {
    echo "<div class='error'>Alanları Boş Bırakmayınız</div> ";
  }else{
    $query_user = mysql_query("SELECT * FROM register WHERE nick='".$user."'");
    $list_user = mysql_fetch_array($query_user);
    if (mysql_num_rows($query_user) > 0) 
    {
      $_SESSION['login'] = true;
      $_SESSION['login_id'] = $list_user['id'];  


      header('location: /Project/profile.php');
    }
    else
    {
      header('location: /Project/login.php');
    }
  }
?>
<?php include 'footer.php'; ?>