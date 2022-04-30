<!DOCTYPE html>
<html lang="ua">
<head>
	<meta charset="UTF-8" />
	<link rel="icon" type="image/x-icon" href="/favicon.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Вхід</title>
</head>
<body>
     <form action="./scripts/login.php" method="post" accept-charset=utf-8>
     	<h2>Вхід</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<label>Логін</label>
     	<input type="text" name="uname" placeholder="Логін"><br>

     	<label>Пароль</label>
     	<input type="password" name="password" placeholder="Пароль"><br>

     	<button type="submit">Увійти</button>
          <a href="./pages/signup.php" class="ca">Створити акаунт</a>
     </form>
</body>
</html>
