<?php 
session_start(); 
include "baglanti.php";
if (isset($_POST['uname']) && isset($_POST['password'])) {
    function validate($data){
       $data = trim($data);
       $data = stripslashes($data);
       $data = htmlspecialchars($data);
       return $data;
    }
    $uname = validate($_POST['uname']);
    $pass = validate($_POST['password']);
    if (empty($uname)) {
        header("Location: login.php?error=Kullanıcı Adınızı Giriniz");
        exit();
    }else if(empty($pass)){
        header("Location: login.php?error=Şifrenizi Giriniz");
        exit();
    }else{
        $sql = "SELECT * FROM yonetici WHERE ad='$uname' AND sifre='$pass'";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);
            if ($row['ad'] === $uname && $row['sifre'] === $pass) {
                echo "Logged in!";
                $_SESSION['ad'] = $row['ad'];
                $_SESSION['sifre'] = $row['sifre'];
                header("Location: index.php");
                exit();
            }else{
                header("Location: login.php?error=Kullanıcı Adı veya Şifre Hatalı");
                exit();
            }
    }

}
?>