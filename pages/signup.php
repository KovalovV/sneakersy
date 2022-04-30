<!DOCTYPE html>
<html>
<head>
     <meta charset="UTF-8" />
	<link rel="icon" type="image/x-icon" href="/favicon.png" />
     <link rel="stylesheet" type="text/css" href="../css/style.css">
	<title>Реєстрація</title>
</head>
<body>
     <form action="../scripts/signup-check.php" method="post" accept-charset=utf-8>
     	<h2>Реєстрація</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>

          <?php if (isset($_GET['success'])) { ?>
               <p class="success"><?php echo $_GET['success']; ?></p>
          <?php } ?>

          <label>Ім'я</label>
          <?php if (isset($_GET['name'])) { ?>
               <input type="text" 
                      name="name" 
                      placeholder="Ім'я"
                      value="<?php echo $_GET['name']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="name" 
                      placeholder="Ім'я"><br>
          <?php }?>

          <label>Логін</label>
          <?php if (isset($_GET['uname'])) { ?>
               <input type="text" 
                      name="uname" 
                      placeholder="Логін"
                      value="<?php echo $_GET['uname']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="uname" 
                      placeholder="Логін"><br>
          <?php }?>


     	<label>Пароль</label>
     	<input type="password" 
                 name="password" 
                 placeholder="Пароль"><br>

          <label>Підтвердження паролю</label>
          <input type="password" 
                 name="re_password" 
                 placeholder="Підтвердження паролю"><br>

     	<button type="submit">Зареєструватися</button>
          <a href="../index.php" class="ca">Маєте акаунт? Увійти</a>
     </form>
</body>
</html>