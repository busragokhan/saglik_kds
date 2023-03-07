<?php
require 'config.php';
include 'sidebar.php';
if(!empty($_SESSION["id"])){
  $id = $_SESSION["id"];
  $result = mysqli_query($conn, "SELECT * FROM tb_user WHERE id = $id");
  $row = mysqli_fetch_assoc($result);
}
else{
  header("Location: login.php");
}
?>
<?php
$sql = "SELECT SUM(getirtilme_satis.getirtilme_sayisi) FROM getirtilme_satis WHERE urun_id = 1";
$result = mysqli_query($conn, $sql);


if (mysqli_num_rows($result) > 0) {
  $row = mysqli_fetch_assoc($result);
  $bademliberlinerget = $row["SUM(getirtilme_satis.getirtilme_sayisi)"];
} else {
  echo "Sorguda hata oluştu veya hiç kayıt bulunamadı.";
}
?>

<?php
$sql = "SELECT SUM(getirtilme_satis.satis_sayisi) FROM getirtilme_satis WHERE urun_id = 1";
$result = mysqli_query($conn, $sql);


if (mysqli_num_rows($result) > 0) {
  $row = mysqli_fetch_assoc($result);
  $bademliberlinersatis = $row["SUM(getirtilme_satis.satis_sayisi)"];
} else {
  echo "Sorguda hata oluştu veya hiç kayıt bulunamadı.";
}
?>

<?php
$sql = "SELECT SUM(getirtilme_satis.getirtilme_sayisi) - SUM(getirtilme_satis.satis_sayisi) FROM getirtilme_satis WHERE urun_id = 1";
$result = mysqli_query($conn, $sql);


if (mysqli_num_rows($result) > 0) {
  $row = mysqli_fetch_assoc($result);
  $bademliberlinerfark = $row["SUM(getirtilme_satis.getirtilme_sayisi) - SUM(getirtilme_satis.satis_sayisi)"];
} else {
  echo "Sorguda hata oluştu veya hiç kayıt bulunamadı.";
}
?>
<?php
use function PHPSTORM_META\type;

$conn = mysqli_connect('localhost', 'root', '', 'bono_cafe');

if (!$conn) {
  die("Bağlantı hatası: " . mysqli_connect_error());
}
$sql = "select getirtilme_satis.getirtilme_sayisi, getirtilme_satis.satis_sayisi from getirtilme_satis inner join urunler on getirtilme_satis.urun_id = urunler.urun_id inner join aylar on getirtilme_satis.ay_id = aylar.ay_id where urunler.urun_ad = 'Bademli Berliner' ";
$res = mysqli_query($conn, $sql);

$getirtilme_sayisi = array();
$satis_sayisi = array();
while ($data = mysqli_fetch_array($res)) {
  $getirtilme_sayisi[] = $data['getirtilme_sayisi'];
  $satis_sayisi[] = $data['satis_sayisi'];
}

?>

<?php
if (!$conn) {
  die("Bağlantı hatası: " . mysqli_connect_error());
}
$sql2 = "select getirtilme_satis.getirtilme_sayisi, getirtilme_satis.satis_sayisi from getirtilme_satis inner join urunler on getirtilme_satis.urun_id = urunler.urun_id inner join aylar on getirtilme_satis.ay_id = aylar.ay_id where urunler.urun_ad = 'Çikolatalı Berliner' ";
$res2 = mysqli_query($conn, $sql2);

$getirtilme_sayisi2 = array();
$satis_sayisi2 = array();
while ($data2 = mysqli_fetch_array($res2)) {
  $getirtilme_sayisi2[] = $data2['getirtilme_sayisi'];
  $satis_sayisi2[] = $data2['satis_sayisi'];
}
?>

<?php
if (!$conn) {
  die("Bağlantı hatası: " . mysqli_connect_error());
}
$sql3 = "select getirtilme_satis.getirtilme_sayisi, getirtilme_satis.satis_sayisi from getirtilme_satis inner join urunler on getirtilme_satis.urun_id = urunler.urun_id inner join aylar on getirtilme_satis.ay_id = aylar.ay_id where urunler.urun_ad = 'Vişneli Berliner' ";
$res3 = mysqli_query($conn, $sql3);

$getirtilme_sayisi3 = array();
$satis_sayisi3 = array();
while ($data3 = mysqli_fetch_array($res3)) {
  $getirtilme_sayisi3[] = $data3['getirtilme_sayisi'];
  $satis_sayisi3[] = $data3['satis_sayisi'];
}
?>

<?php
if (!$conn) {
  die("Bağlantı hatası: " . mysqli_connect_error());
}
$sql4 = "select getirtilme_satis.getirtilme_sayisi, getirtilme_satis.satis_sayisi from getirtilme_satis inner join urunler on getirtilme_satis.urun_id = urunler.urun_id inner join aylar on getirtilme_satis.ay_id = aylar.ay_id where urunler.urun_ad = 'Bavyera Çikolatalı Berliner' ";
$res4 = mysqli_query($conn, $sql4);

$getirtilme_sayisi4 = array();
$satis_sayisi4 = array();
while ($data4 = mysqli_fetch_array($res4)) {
  $getirtilme_sayisi4[] = $data4['getirtilme_sayisi'];
  $satis_sayisi4[] = $data4['satis_sayisi'];
}
?>

<?php
if (!$conn) {
  die("Bağlantı hatası: " . mysqli_connect_error());
}
$sql5 = "select getirtilme_satis.getirtilme_sayisi, getirtilme_satis.satis_sayisi from getirtilme_satis inner join urunler on getirtilme_satis.urun_id = urunler.urun_id inner join aylar on getirtilme_satis.ay_id = aylar.ay_id where urunler.urun_ad = 'Brownie' ";
$res5 = mysqli_query($conn, $sql5);

$getirtilme_sayisi5 = array();
$satis_sayisi5 = array();
while ($data5 = mysqli_fetch_array($res5)) {
  $getirtilme_sayisi5[] = $data5['getirtilme_sayisi'];
  $satis_sayisi5[] = $data5['satis_sayisi'];
}
?>

<?php
if (!$conn) {
  die("Bağlantı hatası: " . mysqli_connect_error());
}
$sql6 = "select getirtilme_satis.getirtilme_sayisi, getirtilme_satis.satis_sayisi from getirtilme_satis inner join urunler on getirtilme_satis.urun_id = urunler.urun_id inner join aylar on getirtilme_satis.ay_id = aylar.ay_id where urunler.urun_ad = 'Lotus Cheesecake' ";
$res6 = mysqli_query($conn, $sql6);

$getirtilme_sayisi6 = array();
$satis_sayisi6 = array();
while ($data6 = mysqli_fetch_array($res6)) {
  $getirtilme_sayisi6[] = $data6['getirtilme_sayisi'];
  $satis_sayisi6[] = $data6['satis_sayisi'];
}
?>

<?php
if (!$conn) {
  die("Bağlantı hatası: " . mysqli_connect_error());
}
$sql7 = "select getirtilme_satis.getirtilme_sayisi, getirtilme_satis.satis_sayisi from getirtilme_satis inner join urunler on getirtilme_satis.urun_id = urunler.urun_id inner join aylar on getirtilme_satis.ay_id = aylar.ay_id where urunler.urun_ad = 'Orman Meyveli Cheesecake' ";
$res7 = mysqli_query($conn, $sql7);

$getirtilme_sayisi7 = array();
$satis_sayisi7 = array();
while ($data7 = mysqli_fetch_array($res7)) {
  $getirtilme_sayisi7[] = $data7['getirtilme_sayisi'];
  $satis_sayisi7[] = $data7['satis_sayisi'];
}
?>

<?php
if (!$conn) {
  die("Bağlantı hatası: " . mysqli_connect_error());
}
$sql8 = "select getirtilme_satis.getirtilme_sayisi, getirtilme_satis.satis_sayisi from getirtilme_satis inner join urunler on getirtilme_satis.urun_id = urunler.urun_id inner join aylar on getirtilme_satis.ay_id = aylar.ay_id where urunler.urun_ad = 'San Sebastian Cheesecake' ";
$res8 = mysqli_query($conn, $sql8);

$getirtilme_sayisi8 = array();
$satis_sayisi8 = array();
while ($data8 = mysqli_fetch_array($res8)) {
  $getirtilme_sayisi8[] = $data8['getirtilme_sayisi'];
  $satis_sayisi8[] = $data8['satis_sayisi'];
}
?>

<?php
if (!$conn) {
  die("Bağlantı hatası: " . mysqli_connect_error());
}
$sql9 = "select getirtilme_satis.getirtilme_sayisi, getirtilme_satis.satis_sayisi from getirtilme_satis inner join urunler on getirtilme_satis.urun_id = urunler.urun_id inner join aylar on getirtilme_satis.ay_id = aylar.ay_id where urunler.urun_ad = 'Oreolu Magnolia' ";
$res9 = mysqli_query($conn, $sql9);

$getirtilme_sayisi9 = array();
$satis_sayisi9 = array();
while ($data9 = mysqli_fetch_array($res9)) {
  $getirtilme_sayisi9[] = $data9['getirtilme_sayisi'];
  $satis_sayisi9[] = $data9['satis_sayisi'];
}
?>

<?php
if (!$conn) {
  die("Bağlantı hatası: " . mysqli_connect_error());
}
$sql10 = "select getirtilme_satis.getirtilme_sayisi, getirtilme_satis.satis_sayisi from getirtilme_satis inner join urunler on getirtilme_satis.urun_id = urunler.urun_id inner join aylar on getirtilme_satis.ay_id = aylar.ay_id where urunler.urun_ad = 'Lotuslu Magnolia' ";
$res10 = mysqli_query($conn, $sql10);

$getirtilme_sayisi10 = array();
$satis_sayisi10 = array();
while ($data10 = mysqli_fetch_array($res10)) {
  $getirtilme_sayisi10[] = $data10['getirtilme_sayisi'];
  $satis_sayisi10[] = $data10['satis_sayisi'];
}
?>

<?php
if (!$conn) {
  die("Bağlantı hatası: " . mysqli_connect_error());
}
$sql11 = "select getirtilme_satis.getirtilme_sayisi, getirtilme_satis.satis_sayisi from getirtilme_satis inner join urunler on getirtilme_satis.urun_id = urunler.urun_id inner join aylar on getirtilme_satis.ay_id = aylar.ay_id where urunler.urun_ad = 'Çilekli Magnolia' ";
$res11 = mysqli_query($conn, $sql11);

$getirtilme_sayisi11 = array();
$satis_sayisi11 = array();
while ($data11 = mysqli_fetch_array($res11)) {
  $getirtilme_sayisi11[] = $data11['getirtilme_sayisi'];
  $satis_sayisi11[] = $data11['satis_sayisi'];
}
?>

<?php
if (!$conn) {
  die("Bağlantı hatası: " . mysqli_connect_error());
}
$sql12 = "select getirtilme_satis.getirtilme_sayisi, getirtilme_satis.satis_sayisi from getirtilme_satis inner join urunler on getirtilme_satis.urun_id = urunler.urun_id inner join aylar on getirtilme_satis.ay_id = aylar.ay_id where urunler.urun_ad = 'Mozaik Pasta' ";
$res12 = mysqli_query($conn, $sql12);

$getirtilme_sayisi12 = array();
$satis_sayisi12 = array();
while ($data12 = mysqli_fetch_array($res12)) {
  $getirtilme_sayisi12[] = $data12['getirtilme_sayisi'];
  $satis_sayisi12[] = $data12['satis_sayisi'];
}
?>

<?php
if (!$conn) {
  die("Bağlantı hatası: " . mysqli_connect_error());
}
$sql13 = "select getirtilme_satis.getirtilme_sayisi, getirtilme_satis.satis_sayisi from getirtilme_satis inner join urunler on getirtilme_satis.urun_id = urunler.urun_id inner join aylar on getirtilme_satis.ay_id = aylar.ay_id where urunler.urun_ad = 'Bademli Kruvasan' ";
$res13 = mysqli_query($conn, $sql13);

$getirtilme_sayisi13 = array();
$satis_sayisi13 = array();
while ($data13 = mysqli_fetch_array($res13)) {
  $getirtilme_sayisi13[] = $data13['getirtilme_sayisi'];
  $satis_sayisi13[] = $data13['satis_sayisi'];
}
?>

<?php
if (!$conn) {
  die("Bağlantı hatası: " . mysqli_connect_error());
}
$sql14 = "select getirtilme_satis.getirtilme_sayisi, getirtilme_satis.satis_sayisi from getirtilme_satis inner join urunler on getirtilme_satis.urun_id = urunler.urun_id inner join aylar on getirtilme_satis.ay_id = aylar.ay_id where urunler.urun_ad = 'Çikolatalı Kruvasan' ";
$res14 = mysqli_query($conn, $sql14);

$getirtilme_sayisi14 = array();
$satis_sayisi14 = array();
while ($data14 = mysqli_fetch_array($res14)) {
  $getirtilme_sayisi14[] = $data14['getirtilme_sayisi'];
  $satis_sayisi14[] = $data14['satis_sayisi'];
}
?>

<?php
if (!$conn) {
  die("Bağlantı hatası: " . mysqli_connect_error());
}
$sql15 = "select getirtilme_satis.getirtilme_sayisi, getirtilme_satis.satis_sayisi from getirtilme_satis inner join urunler on getirtilme_satis.urun_id = urunler.urun_id inner join aylar on getirtilme_satis.ay_id = aylar.ay_id where urunler.urun_ad = 'Orman Meyveli Kruvasan' ";
$res15 = mysqli_query($conn, $sql15);

$getirtilme_sayisi15 = array();
$satis_sayisi15 = array();
while ($data15 = mysqli_fetch_array($res15)) {
  $getirtilme_sayisi15[] = $data15['getirtilme_sayisi'];
  $satis_sayisi15[] = $data15['satis_sayisi'];
}
?>

<?php
if (!$conn) {
  die("Bağlantı hatası: " . mysqli_connect_error());
}
$sql16 = "select getirtilme_satis.getirtilme_sayisi, getirtilme_satis.satis_sayisi from getirtilme_satis inner join urunler on getirtilme_satis.urun_id = urunler.urun_id inner join aylar on getirtilme_satis.ay_id = aylar.ay_id where urunler.urun_ad = 'Cookie' ";
$res16 = mysqli_query($conn, $sql16);

$getirtilme_sayisi16 = array();
$satis_sayisi16 = array();
while ($data16 = mysqli_fetch_array($res16)) {
  $getirtilme_sayisi16[] = $data16['getirtilme_sayisi'];
  $satis_sayisi16[] = $data16['satis_sayisi'];
}
?>

<?php
if (!$conn) {
  die("Bağlantı hatası: " . mysqli_connect_error());
}
$sql17 = "select getirtilme_satis.getirtilme_sayisi, getirtilme_satis.satis_sayisi from getirtilme_satis inner join urunler on getirtilme_satis.urun_id = urunler.urun_id inner join aylar on getirtilme_satis.ay_id = aylar.ay_id where urunler.urun_ad = 'Fransız Ekleri' ";
$res17 = mysqli_query($conn, $sql17);

$getirtilme_sayisi17 = array();
$satis_sayisi17 = array();
while ($data17 = mysqli_fetch_array($res17)) {
  $getirtilme_sayisi17[] = $data17['getirtilme_sayisi'];
  $satis_sayisi17[] = $data17['satis_sayisi'];
}
?>

<?php
if (!$conn) {
  die("Bağlantı hatası: " . mysqli_connect_error());
}
$sql18 = "select getirtilme_satis.getirtilme_sayisi, getirtilme_satis.satis_sayisi from getirtilme_satis inner join urunler on getirtilme_satis.urun_id = urunler.urun_id inner join aylar on getirtilme_satis.ay_id = aylar.ay_id where urunler.urun_ad = 'Cinnamon Roll' ";
$res18 = mysqli_query($conn, $sql18);

$getirtilme_sayisi18 = array();
$satis_sayisi18 = array();
while ($data18 = mysqli_fetch_array($res18)) {
  $getirtilme_sayisi18[] = $data18['getirtilme_sayisi'];
  $satis_sayisi18[] = $data18['satis_sayisi'];
}
?>

<?php
if (!$conn) {
  die("Bağlantı hatası: " . mysqli_connect_error());
}
$sql19 = "select getirtilme_satis.getirtilme_sayisi, getirtilme_satis.satis_sayisi from getirtilme_satis inner join urunler on getirtilme_satis.urun_id = urunler.urun_id inner join aylar on getirtilme_satis.ay_id = aylar.ay_id where urunler.urun_ad = 'Soğuk sandviç' ";
$res19 = mysqli_query($conn, $sql19);

$getirtilme_sayisi19 = array();
$satis_sayisi19 = array();
while ($data19 = mysqli_fetch_array($res19)) {
  $getirtilme_sayisi19[] = $data19['getirtilme_sayisi'];
  $satis_sayisi19[] = $data19['satis_sayisi'];
}
?>

<?php
if (!$conn) {
  die("Bağlantı hatası: " . mysqli_connect_error());
}
$sql20 = "select getirtilme_satis.getirtilme_sayisi, getirtilme_satis.satis_sayisi from getirtilme_satis inner join urunler on getirtilme_satis.urun_id = urunler.urun_id inner join aylar on getirtilme_satis.ay_id = aylar.ay_id where urunler.urun_ad = 'Muffin' ";
$res20 = mysqli_query($conn, $sql20);

$getirtilme_sayisi20 = array();
$satis_sayisi20 = array();
while ($data20 = mysqli_fetch_array($res20)) {
  $getirtilme_sayisi20[] = $data20['getirtilme_sayisi'];
  $satis_sayisi20[] = $data20['satis_sayisi'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  
</head>

<body>
  <html>

  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

  </head>

  <body>
    <div class="container">
      <div class="row">
        <div class="col-md">
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
            Değiştir
          </button>
          <h5>Bademli Berliner</h5>
          <canvas id="getirtilmeSayisiCanvas"></canvas>
        </div>

        <div class="col-md">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
            Değiştir
          </button>
          <h5>Çikolatalı Berliner</h5>
          <canvas id="getirtilmeSayisi2Canvas"></canvas>
        </div>
        <div class="col-md">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
            Değiştir
          </button>
          <h5>Vişneli Berliner</h5>
          <canvas id="getirtilmeSayisi3Canvas"></canvas>
        </div>
        <div class="col-md">
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
            Değiştir
          </button>
          <h5>Bavyera Çikolatalı Berliner</h5>
          <canvas id="getirtilmeSayisi4Canvas"></canvas>
        </div>
        <div class="col-md">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
            Değiştir
          </button>
          <h5>Brownie</h5>
          <canvas id="getirtilmeSayisi5Canvas"></canvas>
        </div>
        <div class="col-md">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
            Değiştir
          </button>
          <h5>Lotus Cheesecake</h5>
          <canvas id="getirtilmeSayisi6Canvas"></canvas>
        </div>
        <div class="col-md">
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
            Değiştir
          </button>
          <h5>Orman Meyveli Cheesecake</h5>
          <canvas id="getirtilmeSayisi7Canvas"></canvas>
        </div>
        <div class="col-md">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
            Değiştir
          </button>
          <h5>San Sebastian Cheesecake</h5>
          <canvas id="getirtilmeSayisi8Canvas"></canvas>
        </div>
        <div class="col-md">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
            Değiştir
          </button>
          <h5>Oreolu Magnolia</h5>
          <canvas id="getirtilmeSayisi9Canvas"></canvas>
        </div>
        <div class="col-md">
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
            Değiştir
          </button>
          <h5>Lotuslu Magnolia</h5>
          <canvas id="getirtilmeSayisi10Canvas"></canvas>
        </div>
        <div class="col-md">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
            Değiştir
          </button>
          <h5>Çilekli Magnolia</h5>
          <canvas id="getirtilmeSayisi11Canvas"></canvas>
        </div>
        <div class="col-md">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
            Değiştir
          </button>
          <h5>Mozaik Pasta</h5>
          <canvas id="getirtilmeSayisi12Canvas"></canvas>
        </div>
        <div class="col-md">
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
            Değiştir
          </button>
          <h5>Bademli Kruvasan</h5>
          <canvas id="getirtilmeSayisi13Canvas"></canvas>
        </div>
        <div class="col-md">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
            Değiştir
          </button>
          <h5>Çikolatalı Kruvasan</h5>
          <canvas id="getirtilmeSayisi14Canvas"></canvas>
        </div>
        <div class="col-md">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
            Değiştir
          </button>
          <h5>Orman Meyveli Kruvasan</h5>
          <canvas id="getirtilmeSayisi15Canvas"></canvas>
        </div>
        <div class="col-md">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
            Değiştir
          </button>
          <h5>Cookie</h5>
          <canvas id="getirtilmeSayisi16Canvas"></canvas>
        </div>
        <div class="col-md">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
            Değiştir
          </button>
          <h5>Fransız Ekleri</h5>
          <canvas id="getirtilmeSayisi17Canvas"></canvas>
        </div>
        <div class="col-md">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
            Değiştir
          </button>
          <h5>Cinnamon Roll</h5>
          <canvas id="getirtilmeSayisi18Canvas"></canvas>
        </div>
        <div class="col-md">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
            Değiştir
          </button>
          <h5>Soğuk Sandviç</h5>
          <canvas id="getirtilmeSayisi19Canvas"></canvas>
        </div>
        <div class="col-md">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
            Değiştir
          </button>
          <h5>Muffin</h5>
          <canvas id="getirtilmeSayisi20Canvas"></canvas>
        </div>
      </div>
    </div>
  </body>

  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text">Getirtilme Sayısı</span>
            </div>
            <input class="form-control" id="inputGetirtilme" type="number">
          </div>

          <label>Satış Sayısı</label>
          <input id="inputSatis" type="number">
          <label>Ay</label>
          <input id="inputAy" type="text">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary" data-dismiss="modal" onclick="getirtilmeChange()">Save changes</button>
        </div>
      </div>
    </div>
  </div>
  </html>
  </body>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script type="text/javascript">

//------------------------------------------------1------------------------------------------------------------------
  var getirtilmeSayisi, satisSayisi, aylar;
  var chartGetirtilme;

  function createChart() {
    getAllData();
    getirtilmeSayisiChart();
  }
  window.onload = createChart();

  function getAllData(){
    getirtilmeSayisi = [<?php echo '"' . implode('","', $getirtilme_sayisi) . '"' ?>];
    satisSayisi = [<?php echo '"' . implode('","', $satis_sayisi) . '"' ?>];
    aylar = [ "Kasım", "Aralık","Ocak", "Şubat", "Mart", "Nisan", "Mayıs", "Haziran", "Temmuz", "Ağustos", "Eylül", "Ekim"];
  }

  function getirtilmeSayisiChart() {
    getirtilmeSayisiCanvas = document.getElementById("getirtilmeSayisiCanvas");

    chartGetirtilme = new Chart(getirtilmeSayisiCanvas, {
      type: "bar",
      data: {
        labels: aylar,
        datasets: [{
            label: "Getirtilme Sayısı",
            data: getirtilmeSayisi,
            backgroundColor: "#F7DC6F"
          },
          {
            label: "Satis Sayisi",
            data: satisSayisi,
            backgroundColor: "#2980B9"
          }
        ]
      }
    })
  }
//------------------------------------------------2------------------------------------------------------------------
  var getirtilmeSayisi2, satisSayisi2, aylar2;
  var chartGetirtilme2;

  function createChart2() {
    getAllData2();
    getirtilmeSayisiChart2();
  }
  window.onload = createChart2();

  function getAllData2(){
    getirtilmeSayisi2 = [<?php echo '"' . implode('","', $getirtilme_sayisi2) . '"' ?>];
    satisSayisi2 = [<?php echo '"' . implode('","', $satis_sayisi2) . '"' ?>];
    aylar2 = ["Kasım", "Aralık","Ocak", "Şubat", "Mart", "Nisan", "Mayıs", "Haziran", "Temmuz", "Ağustos", "Eylül", "Ekim"];
  }

  function getirtilmeSayisiChart2() {
    getirtilmeSayisi2Canvas = document.getElementById("getirtilmeSayisi2Canvas");

    chartGetirtilme2 = new Chart(getirtilmeSayisi2Canvas, {
      type: "bar",
      data: {
        labels: aylar2,
        datasets: [{
            label: "Getirtilme Sayısı",
            data: getirtilmeSayisi2,
            backgroundColor: "#F7DC6F"
          },
          {
            label: "Satis Sayisi",
            data: satisSayisi2,
            backgroundColor: "#2980B9"
          }
        ]
      }
    })
  }

//-----------------------------------------3-------------------------------------------------------------
var getirtilmeSayisi3, satisSayisi3, aylar3;
  var chartGetirtilme3;

  function createChart3() {
    getAllData3();
    getirtilmeSayisiChart3();
  }
  window.onload = createChart3();

  function getAllData3(){
    getirtilmeSayisi3 = [<?php echo '"' . implode('","', $getirtilme_sayisi3) . '"' ?>];
    satisSayisi3 = [<?php echo '"' . implode('","', $satis_sayisi3) . '"' ?>];
    aylar3 = ["Kasım", "Aralık","Ocak", "Şubat", "Mart", "Nisan", "Mayıs", "Haziran", "Temmuz", "Ağustos", "Eylül", "Ekim"];
  }

  function getirtilmeSayisiChart3() {
    getirtilmeSayisi3Canvas = document.getElementById("getirtilmeSayisi3Canvas");

    chartGetirtilme3 = new Chart(getirtilmeSayisi3Canvas, {
      type: "bar",
      data: {
        labels: aylar3,
        datasets: [{
            label: "Getirtilme Sayısı",
            data: getirtilmeSayisi3,
            backgroundColor: "#F7DC6F"
          },
          {
            label: "Satis Sayisi",
            data: satisSayisi3,
            backgroundColor: "#2980B9"
          }
        ]
      }
    })
  }
  //-----------------------------------------4-------------------------------------------------------------

  var getirtilmeSayisi4, satisSayisi4, aylar4;
  var chartGetirtilme2;

  function createChart4() {
    getAllData4();
    getirtilmeSayisiChart4();
  }
  window.onload = createChart4();

  function getAllData4(){
    getirtilmeSayisi4 = [<?php echo '"' . implode('","', $getirtilme_sayisi4) . '"' ?>];
    satisSayisi4 = [<?php echo '"' . implode('","', $satis_sayisi4) . '"' ?>];
    aylar4 = ["Kasım", "Aralık","Ocak", "Şubat", "Mart", "Nisan", "Mayıs", "Haziran", "Temmuz", "Ağustos", "Eylül", "Ekim"];
  }

  function getirtilmeSayisiChart4() {
    getirtilmeSayisi4Canvas = document.getElementById("getirtilmeSayisi4Canvas");

    chartGetirtilme4 = new Chart(getirtilmeSayisi4Canvas, {
      type: "bar",
      data: {
        labels: aylar4,
        datasets: [{
            label: "Getirtilme Sayısı",
            data: getirtilmeSayisi4,
            backgroundColor: "#F7DC6F"
          },
          {
            label: "Satis Sayisi",
            data: satisSayisi4,
            backgroundColor: "#2980B9"
          }
        ]
      }
    })
  }
  //-----------------------------------------5-------------------------------------------------------------

  var getirtilmeSayisi5, satisSayisi5, aylar5;
  var chartGetirtilme5;

  function createChart5() {
    getAllData5();
    getirtilmeSayisiChart5();
  }
  window.onload = createChart5();

  function getAllData5(){
    getirtilmeSayisi5 = [<?php echo '"' . implode('","', $getirtilme_sayisi5) . '"' ?>];
    satisSayisi5 = [<?php echo '"' . implode('","', $satis_sayisi5) . '"' ?>];
    aylar5 = ["Kasım", "Aralık","Ocak", "Şubat", "Mart", "Nisan", "Mayıs", "Haziran", "Temmuz", "Ağustos", "Eylül", "Ekim"];
  }

  function getirtilmeSayisiChart5() {
    getirtilmeSayisi5Canvas = document.getElementById("getirtilmeSayisi5Canvas");

    chartGetirtilme5 = new Chart(getirtilmeSayisi5Canvas, {
      type: "bar",
      data: {
        labels: aylar5,
        datasets: [{
            label: "Getirtilme Sayısı",
            data: getirtilmeSayisi5,
            backgroundColor: "#F7DC6F"
          },
          {
            label: "Satis Sayisi",
            data: satisSayisi5,
            backgroundColor: "#2980B9"
          }
        ]
      }
    })
  }
//-----------------------------------------6-------------------------------------------------------------
var getirtilmeSayisi6, satisSayisi6, aylar6;
  var chartGetirtilme6;

  function createChart6() {
    getAllData6();
    getirtilmeSayisiChart6();
  }
  window.onload = createChart6();

  function getAllData6(){
    getirtilmeSayisi6 = [<?php echo '"' . implode('","', $getirtilme_sayisi6) . '"' ?>];
    satisSayisi6 = [<?php echo '"' . implode('","', $satis_sayisi6) . '"' ?>];
    aylar6 = ["Kasım", "Aralık","Ocak", "Şubat", "Mart", "Nisan", "Mayıs", "Haziran", "Temmuz", "Ağustos", "Eylül", "Ekim"];
  }

  function getirtilmeSayisiChart6() {
    getirtilmeSayisi6Canvas = document.getElementById("getirtilmeSayisi6Canvas");

    chartGetirtilme6 = new Chart(getirtilmeSayisi6Canvas, {
      type: "bar",
      data: {
        labels: aylar6,
        datasets: [{
            label: "Getirtilme Sayısı",
            data: getirtilmeSayisi6,
            backgroundColor: "#F7DC6F"
          },
          {
            label: "Satis Sayisi",
            data: satisSayisi6,
            backgroundColor: "#2980B9"
          }
        ]
      }
    })
  }
//-----------------------------------------7-------------------------------------------------------------
  var getirtilmeSayisi7, satisSayisi7, aylar7;
  var chartGetirtilme7;

  function createChart7() {
    getAllData7();
    getirtilmeSayisiChart7();
  }
  window.onload = createChart7();

  function getAllData7(){
    getirtilmeSayisi7 = [<?php echo '"' . implode('","', $getirtilme_sayisi7) . '"' ?>];
    satisSayisi7 = [<?php echo '"' . implode('","', $satis_sayisi7) . '"' ?>];
    aylar7 = ["Kasım", "Aralık","Ocak", "Şubat", "Mart", "Nisan", "Mayıs", "Haziran", "Temmuz", "Ağustos", "Eylül", "Ekim"];
  }

  function getirtilmeSayisiChart7() {
    getirtilmeSayisi7Canvas = document.getElementById("getirtilmeSayisi7Canvas");

    chartGetirtilme7 = new Chart(getirtilmeSayisi7Canvas, {
      type: "bar",
      data: {
        labels: aylar7,
        datasets: [{
            label: "Getirtilme Sayısı",
            data: getirtilmeSayisi7,
            backgroundColor: "#F7DC6F"
          },
          {
            label: "Satis Sayisi",
            data: satisSayisi7,
            backgroundColor: "#2980B9"
          }
        ]
      }
    })
  }
//-----------------------------------------8-------------------------------------------------------------
  var getirtilmeSayisi8, satisSayisi8, aylar8;
  var chartGetirtilme8;

  function createChart8() {
    getAllData8();
    getirtilmeSayisiChart8();
  }
  window.onload = createChart8();

  function getAllData8(){
    getirtilmeSayisi8 = [<?php echo '"' . implode('","', $getirtilme_sayisi8) . '"' ?>];
    satisSayisi8 = [<?php echo '"' . implode('","', $satis_sayisi8) . '"' ?>];
    aylar8 = ["Kasım", "Aralık","Ocak", "Şubat", "Mart", "Nisan", "Mayıs", "Haziran", "Temmuz", "Ağustos", "Eylül", "Ekim"];
  }

  function getirtilmeSayisiChart8() {
    getirtilmeSayisi8Canvas = document.getElementById("getirtilmeSayisi8Canvas");

    chartGetirtilme8 = new Chart(getirtilmeSayisi8Canvas, {
      type: "bar",
      data: {
        labels: aylar8,
        datasets: [{
            label: "Getirtilme Sayısı",
            data: getirtilmeSayisi8,
            backgroundColor: "#F7DC6F"
          },
          {
            label: "Satis Sayisi",
            data: satisSayisi8,
            backgroundColor: "#2980B9"
          }
        ]
      }
    })
  }
//-----------------------------------------9-------------------------------------------------------------
  var getirtilmeSayisi9, satisSayisi9, aylar9;
  var chartGetirtilme9;

  function createChart9() {
    getAllData9();
    getirtilmeSayisiChart9();
  }
  window.onload = createChart9();

  function getAllData9(){
    getirtilmeSayisi9 = [<?php echo '"' . implode('","', $getirtilme_sayisi9) . '"' ?>];
    satisSayisi9 = [<?php echo '"' . implode('","', $satis_sayisi9) . '"' ?>];
    aylar9 = ["Kasım", "Aralık","Ocak", "Şubat", "Mart", "Nisan", "Mayıs", "Haziran", "Temmuz", "Ağustos", "Eylül", "Ekim"];
  }

  function getirtilmeSayisiChart9() {
    getirtilmeSayisi9Canvas = document.getElementById("getirtilmeSayisi9Canvas");

    chartGetirtilme9 = new Chart(getirtilmeSayisi9Canvas, {
      type: "bar",
      data: {
        labels: aylar9,
        datasets: [{
            label: "Getirtilme Sayısı",
            data: getirtilmeSayisi9,
            backgroundColor: "#F7DC6F"
          },
          {
            label: "Satis Sayisi",
            data: satisSayisi9,
            backgroundColor: "#2980B9"
          }
        ]
      }
    })
  }
//-----------------------------------------10-------------------------------------------------------------
  var getirtilmeSayisi10, satisSayisi10, aylar10;
  var chartGetirtilme10;

  function createChart10() {
    getAllData10();
    getirtilmeSayisiChart10();
  }
  window.onload = createChart10();

  function getAllData10(){
    getirtilmeSayisi10 = [<?php echo '"' . implode('","', $getirtilme_sayisi10) . '"' ?>];
    satisSayisi10 = [<?php echo '"' . implode('","', $satis_sayisi10) . '"' ?>];
    aylar10 = ["Kasım", "Aralık","Ocak", "Şubat", "Mart", "Nisan", "Mayıs", "Haziran", "Temmuz", "Ağustos", "Eylül", "Ekim"];
  }

  function getirtilmeSayisiChart10() {
    getirtilmeSayisi10Canvas = document.getElementById("getirtilmeSayisi10Canvas");

    chartGetirtilme10 = new Chart(getirtilmeSayisi10Canvas, {
      type: "bar",
      data: {
        labels: aylar10,
        datasets: [{
            label: "Getirtilme Sayısı",
            data: getirtilmeSayisi10,
            backgroundColor: "#F7DC6F"
          },
          {
            label: "Satis Sayisi",
            data: satisSayisi10,
            backgroundColor: "#2980B9"
          }
        ]
      }
    })
  }
//-----------------------------------------11-------------------------------------------------------------
  var getirtilmeSayisi11, satisSayisi11, aylar11;
  var chartGetirtilme11;

  function createChart11() {
    getAllData11();
    getirtilmeSayisiChart11();
  }
  window.onload = createChart11();

  function getAllData11(){
    getirtilmeSayisi11 = [<?php echo '"' . implode('","', $getirtilme_sayisi11) . '"' ?>];
    satisSayisi11 = [<?php echo '"' . implode('","', $satis_sayisi11) . '"' ?>];
    aylar11 = ["Kasım", "Aralık","Ocak", "Şubat", "Mart", "Nisan", "Mayıs", "Haziran", "Temmuz", "Ağustos", "Eylül", "Ekim"];
  }

  function getirtilmeSayisiChart11() {
    getirtilmeSayisi11Canvas = document.getElementById("getirtilmeSayisi11Canvas");

    chartGetirtilme11 = new Chart(getirtilmeSayisi11Canvas, {
      type: "bar",
      data: {
        labels: aylar11,
        datasets: [{
            label: "Getirtilme Sayısı",
            data: getirtilmeSayisi11,
            backgroundColor: "#F7DC6F"
          },
          {
            label: "Satis Sayisi",
            data: satisSayisi11,
            backgroundColor: "#2980B9"
          }
        ]
      }
    })
  }
//-----------------------------------------12-------------------------------------------------------------
  var getirtilmeSayisi12, satisSayisi12, aylar12;
  var chartGetirtilme12;

  function createChart12() {
    getAllData12();
    getirtilmeSayisiChart12();
  }
  window.onload = createChart12();

  function getAllData12(){
    getirtilmeSayisi12 = [<?php echo '"' . implode('","', $getirtilme_sayisi12) . '"' ?>];
    satisSayisi12 = [<?php echo '"' . implode('","', $satis_sayisi12) . '"' ?>];
    aylar12 = ["Kasım", "Aralık","Ocak", "Şubat", "Mart", "Nisan", "Mayıs", "Haziran", "Temmuz", "Ağustos", "Eylül", "Ekim"];
  }

  function getirtilmeSayisiChart12() {
    getirtilmeSayisi12Canvas = document.getElementById("getirtilmeSayisi12Canvas");

    chartGetirtilme12 = new Chart(getirtilmeSayisi12Canvas, {
      type: "bar",
      data: {
        labels: aylar12,
        datasets: [{
            label: "Getirtilme Sayısı",
            data: getirtilmeSayisi12,
            backgroundColor: "#F7DC6F"
          },
          {
            label: "Satis Sayisi",
            data: satisSayisi12,
            backgroundColor: "#2980B9"
          }
        ]
      }
    })
  }

//-----------------------------------------13-------------------------------------------------------------
  var getirtilmeSayisi13, satisSayisi13, aylar13;
  var chartGetirtilme13;

  function createChart13() {
    getAllData13();
    getirtilmeSayisiChart13();
  }
  window.onload = createChart13();

  function getAllData13(){
    getirtilmeSayisi13 = [<?php echo '"' . implode('","', $getirtilme_sayisi13) . '"' ?>];
    satisSayisi13 = [<?php echo '"' . implode('","', $satis_sayisi13) . '"' ?>];
    aylar13 = ["Kasım", "Aralık","Ocak", "Şubat", "Mart", "Nisan", "Mayıs", "Haziran", "Temmuz", "Ağustos", "Eylül", "Ekim"];
  }

  function getirtilmeSayisiChart13() {
    getirtilmeSayisi13Canvas = document.getElementById("getirtilmeSayisi13Canvas");

    chartGetirtilme13 = new Chart(getirtilmeSayisi13Canvas, {
      type: "bar",
      data: {
        labels: aylar13,
        datasets: [{
            label: "Getirtilme Sayısı",
            data: getirtilmeSayisi13,
            backgroundColor: "#F7DC6F"
          },
          {
            label: "Satis Sayisi",
            data: satisSayisi13,
            backgroundColor: "#2980B9"
          }
        ]
      }
    })
  }
//-----------------------------------------14-------------------------------------------------------------
  var getirtilmeSayisi14, satisSayisi14, aylar14;
  var chartGetirtilme14;

  function createChart14() {
    getAllData14();
    getirtilmeSayisiChart14();
  }
  window.onload = createChart14();

  function getAllData14(){
    getirtilmeSayisi14 = [<?php echo '"' . implode('","', $getirtilme_sayisi14) . '"' ?>];
    satisSayisi14 = [<?php echo '"' . implode('","', $satis_sayisi14) . '"' ?>];
    aylar14 = ["Kasım", "Aralık","Ocak", "Şubat", "Mart", "Nisan", "Mayıs", "Haziran", "Temmuz", "Ağustos", "Eylül", "Ekim"];
  }

  function getirtilmeSayisiChart14() {
    getirtilmeSayisi14Canvas = document.getElementById("getirtilmeSayisi14Canvas");

    chartGetirtilme14 = new Chart(getirtilmeSayisi14Canvas, {
      type: "bar",
      data: {
        labels: aylar14,
        datasets: [{
            label: "Getirtilme Sayısı",
            data: getirtilmeSayisi14,
            backgroundColor: "#F7DC6F"
          },
          {
            label: "Satis Sayisi",
            data: satisSayisi14,
            backgroundColor: "#2980B9"
          }
        ]
      }
    })
  }
//-----------------------------------------15-------------------------------------------------------------
  var getirtilmeSayisi15, satisSayisi15, aylar15;
  var chartGetirtilme15;

  function createChart15() {
    getAllData15();
    getirtilmeSayisiChart15();
  }
  window.onload = createChart15();

  function getAllData15(){
    getirtilmeSayisi15 = [<?php echo '"' . implode('","', $getirtilme_sayisi15) . '"' ?>];
    satisSayisi15 = [<?php echo '"' . implode('","', $satis_sayisi15) . '"' ?>];
    aylar15 = ["Kasım", "Aralık","Ocak", "Şubat", "Mart", "Nisan", "Mayıs", "Haziran", "Temmuz", "Ağustos", "Eylül", "Ekim"];
  }

  function getirtilmeSayisiChart15() {
    getirtilmeSayisi15Canvas = document.getElementById("getirtilmeSayisi15Canvas");

    chartGetirtilme15 = new Chart(getirtilmeSayisi15Canvas, {
      type: "bar",
      data: {
        labels: aylar15,
        datasets: [{
            label: "Getirtilme Sayısı",
            data: getirtilmeSayisi15,
            backgroundColor: "#F7DC6F"
          },
          {
            label: "Satis Sayisi",
            data: satisSayisi15,
            backgroundColor: "#2980B9"
          }
        ]
      }
    })
  }
//-----------------------------------------16-------------------------------------------------------------
  var getirtilmeSayisi16, satisSayisi16, aylar16;
  var chartGetirtilme16;

  function createChart16() {
    getAllData16();
    getirtilmeSayisiChart16();
  }
  window.onload = createChart16();

  function getAllData16(){
    getirtilmeSayisi16 = [<?php echo '"' . implode('","', $getirtilme_sayisi16) . '"' ?>];
    satisSayisi16 = [<?php echo '"' . implode('","', $satis_sayisi16) . '"' ?>];
    aylar16 = ["Kasım", "Aralık","Ocak", "Şubat", "Mart", "Nisan", "Mayıs", "Haziran", "Temmuz", "Ağustos", "Eylül", "Ekim"];
  }

  function getirtilmeSayisiChart16() {
    getirtilmeSayisi16Canvas = document.getElementById("getirtilmeSayisi16Canvas");

    chartGetirtilme16 = new Chart(getirtilmeSayisi16Canvas, {
      type: "bar",
      data: {
        labels: aylar16,
        datasets: [{
            label: "Getirtilme Sayısı",
            data: getirtilmeSayisi16,
            backgroundColor: "#F7DC6F"
          },
          {
            label: "Satis Sayisi",
            data: satisSayisi16,
            backgroundColor: "#2980B9"
          }
        ]
      }
    })
  }
//-----------------------------------------17-------------------------------------------------------------
  var getirtilmeSayisi17, satisSayisi17, aylar17;
  var chartGetirtilme17;

  function createChart17() {
    getAllData17();
    getirtilmeSayisiChart17();
  }
  window.onload = createChart17();

  function getAllData17(){
    getirtilmeSayisi17 = [<?php echo '"' . implode('","', $getirtilme_sayisi17) . '"' ?>];
    satisSayisi17 = [<?php echo '"' . implode('","', $satis_sayisi17) . '"' ?>];
    aylar17 = ["Kasım", "Aralık","Ocak", "Şubat", "Mart", "Nisan", "Mayıs", "Haziran", "Temmuz", "Ağustos", "Eylül", "Ekim"];
  }

  function getirtilmeSayisiChart17() {
    getirtilmeSayisi17Canvas = document.getElementById("getirtilmeSayisi17Canvas");

    chartGetirtilme17 = new Chart(getirtilmeSayisi17Canvas, {
      type: "bar",
      data: {
        labels: aylar17,
        datasets: [{
            label: "Getirtilme Sayısı",
            data: getirtilmeSayisi17,
            backgroundColor: "#F7DC6F"
          },
          {
            label: "Satis Sayisi",
            data: satisSayisi17,
            backgroundColor: "#2980B9"
          }
        ]
      }
    })
  }
//-----------------------------------------18-------------------------------------------------------------
  var getirtilmeSayisi18, satisSayisi18, aylar18;
  var chartGetirtilme18;

  function createChart18() {
    getAllData18();
    getirtilmeSayisiChart18();
  }
  window.onload = createChart18();

  function getAllData18(){
    getirtilmeSayisi18 = [<?php echo '"' . implode('","', $getirtilme_sayisi18) . '"' ?>];
    satisSayisi18 = [<?php echo '"' . implode('","', $satis_sayisi18) . '"' ?>];
    aylar18 = ["Kasım", "Aralık","Ocak", "Şubat", "Mart", "Nisan", "Mayıs", "Haziran", "Temmuz", "Ağustos", "Eylül", "Ekim"];
  }

  function getirtilmeSayisiChart18() {
    getirtilmeSayisi18Canvas = document.getElementById("getirtilmeSayisi18Canvas");

    chartGetirtilme18 = new Chart(getirtilmeSayisi18Canvas, {
      type: "bar",
      data: {
        labels: aylar18,
        datasets: [{
            label: "Getirtilme Sayısı",
            data: getirtilmeSayisi18,
            backgroundColor: "#F7DC6F"
          },
          {
            label: "Satis Sayisi",
            data: satisSayisi18,
            backgroundColor: "#2980B9"
          }
        ]
      }
    })
  }
//-----------------------------------------19-------------------------------------------------------------
  var getirtilmeSayisi19, satisSayisi19, aylar19;
  var chartGetirtilme19;

  function createChart19() {
    getAllData19();
    getirtilmeSayisiChart19();
  }
  window.onload = createChart19();

  function getAllData19(){
    getirtilmeSayisi19 = [<?php echo '"' . implode('","', $getirtilme_sayisi19) . '"' ?>];
    satisSayisi19 = [<?php echo '"' . implode('","', $satis_sayisi19) . '"' ?>];
    aylar19 = ["Kasım", "Aralık","Ocak", "Şubat", "Mart", "Nisan", "Mayıs", "Haziran", "Temmuz", "Ağustos", "Eylül", "Ekim"];
  }

  function getirtilmeSayisiChart19() {
    getirtilmeSayisi19Canvas = document.getElementById("getirtilmeSayisi19Canvas");

    chartGetirtilme19 = new Chart(getirtilmeSayisi19Canvas, {
      type: "bar",
      data: {
        labels: aylar19,
        datasets: [{
            label: "Getirtilme Sayısı",
            data: getirtilmeSayisi19,
            backgroundColor: "#F7DC6F"
          },
          {
            label: "Satis Sayisi",
            data: satisSayisi19,
            backgroundColor: "#2980B9"
          }
        ]
      }
    })
  }
//-----------------------------------------20-------------------------------------------------------------
  var getirtilmeSayisi20, satisSayisi20, aylar20;
  var chartGetirtilme20;

  function createChart20() {
    getAllData20();
    getirtilmeSayisiChart20();
  }
  window.onload = createChart20();

  function getAllData20(){
    getirtilmeSayisi20 = [<?php echo '"' . implode('","', $getirtilme_sayisi20) . '"' ?>];
    satisSayisi20 = [<?php echo '"' . implode('","', $satis_sayisi20) . '"' ?>];
    aylar20 = ["Kasım", "Aralık","Ocak", "Şubat", "Mart", "Nisan", "Mayıs", "Haziran", "Temmuz", "Ağustos", "Eylül", "Ekim"];
  }

  function getirtilmeSayisiChart20() {
    getirtilmeSayisi20Canvas = document.getElementById("getirtilmeSayisi20Canvas");

    chartGetirtilme20 = new Chart(getirtilmeSayisi20Canvas, {
      type: "bar",
      data: {
        labels: aylar20,
        datasets: [{
            label: "Getirtilme Sayısı",
            data: getirtilmeSayisi20,
            backgroundColor: "#F7DC6F"
          },
          {
            label: "Satis Sayisi",
            data: satisSayisi20,
            backgroundColor: "#2980B9"
          }
        ]
      }
    })
  }

  function getirtilmeChange() {
    var getirtilme = document.getElementById("inputGetirtilme");
    var satis = document.getElementById("inputSatis");
    var ay = document.getElementById("inputAy");

    if (getirtilme.value.length === 0 || satis.value.length === 0 || ay.value.length === 0) {
      alert("Lütfen boş alan bırakmayınız");
    }else{
      getirtilmeSayisi.push(getirtilme.value);
      satisSayisi.push(satis.value);
      aylar.push(ay.value);
      chartGetirtilme.destroy();
      getirtilmeSayisiChart();

      getirtilme.value = "";
      satis.value = "";
      ay.value = "";
    }
    

  }


</script>

</html>

