<!DOCTYPE html>
<html lang="tr">
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>YBS Sağlık Grubu</title>
        <link rel="stylesheet" href="login.css">
    </head>
    <body>
        <div class="title-box"
        <h1>YBS SAĞLIK GRUBU</h1>
        </div>
        <div class="login-box">
        <h2>Yönetici Girişi</h2>
        <form action="kontrol.php" method="post">
            <?php if (isset($_GET['error'])) { ?>
            <p class="error"><?php echo $_GET['error']; ?></p>
            <?php } ?>
            <div class="user-box">
                <input type="text" required="uname">
                <label>Kullanıcı Adı</label>
            </div>
            <div class="user-box">
                <input type="password" required="password">
                <label>Şifre</label>
            </div>
        <a href="index.php">Giriş Yap</a>
        </form>
        </div>
    </body>