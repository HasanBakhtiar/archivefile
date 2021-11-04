<?php


include '../connect/conn.php';

//Melumatları bura daxil etmək.
$melumatgetir=$db->prepare("SELECT * FROM umumi_qurulus where umumi_id=:id ");
$melumatgetir->execute(array(
  'id'=>0
));
$melumatcek=$melumatgetir->fetch(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php echo $melumatcek['umumi_title']; ?></title>
  <link href="loginfiles/lgmn.css" rel="stylesheet">
  <style>
.altp{
    position: absolute;
    bottom: 25%;
    left:40%;
    border: 2px solid red;
    padding: 10px;
}

  </style>
</head>
<body>
<div class="login-box">
  <h2>Daxil Ol</h2>
  <?php 
                    if (@$_GET['sistem']=="ok") {
                      echo "<span style='font-size:15px;color:#30e714'>Əməliyyat uğurla yerinə yetirildi.</span>";
                    }elseif(@$_GET['sistem']=="no"){
                      echo "<p style='color:red'>Əməliyyat uğursuz oldu</p>";
                    }else{
                      echo "";
                    }

                    ?>
  <form action="../connect/operation.php" method="POST">

    <div class="user-box">
      <input type="text" name="user_mail" required="">
      <label>İstifadəçi Adı</label>
    </div>
    <div class="user-box">
      <input type="password" name="user_password" required="">
      <label>Şifrə</label>
    </div>
    <button name="adminsignin">
  <div class="left"></div>
  GİRİŞ
  <div class="right"></div>
</button>
  </form>
</div>


<p >

             <?php 

             if (@$_GET['system']=="no") {
             
             echo "<span class='altp' style='color:red;'>Xəta! Səlahiyyətsiz giriş cəhdi! (İP ünvan axtarılır...)</span>";

             } elseif (@$_GET['system']=="exit") {
             
             echo "<span class='altp' style='color:green;'>Təhlükəsiz formada çıxış etdiniz...</span>";

             }else{
               
             }

             ?>
               
              </p>
          
</body>
</html>