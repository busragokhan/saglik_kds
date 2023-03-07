<?php
include("baglanti.php");
?>
<!DOCTYPE html>
<html lang="tr">
<html>
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YBS Sağlık Grubu</title>
    <link rel="stylesheet" href="sube.css">
    </head>
    <body>
    <div class="subeEk" style="width:500px; height:270px; margin-top:40px; margin-left: 100px; border: 1px;
    border-color: black;
    border-style: solid;
    border-radius: 10px;
    background: white;
    box-shadow: 4px 3px rgba(10, 49, 113, 0.692);">
    <p style="position:relative; font-family: 'Raleway', Helvetica, Arial, sans-serif;  color: rgb(5, 14, 63);
    font-weight: 400px; text-align:center; font-weight: bold;">ŞUBE EKLEME</p>                       
    <form method="post" action="">
    <input style="width:300px; height:30px; text-align:center; margin-left: 100px;" type="string" required="" name="sube" placeholder="Şube Adını Giriniz...">
    <br>
    <br>
    <select style="width:300px; height:30px; text-align:center; margin-left: 105px;" name="bolge"><option value="">Mahalle Seçiniz
        <?php $sube=mysqli_query($conn,"SELECT* FROM arazi_secim");
                while($row=mysqli_fetch_array($sube)){
                echo "<option value='".$row["arazi_id"]."'>".$row["mahalle_ad"]."</option>";
            }

        ?>
    </select>
    <br>
    <br>
    <input style="width:300px; height:30px; text-align:center;margin-left: 100px;" type="string" required="" name="kapasite" placeholder="Hasta Kapasitesi Giriniz...">
    <br>
    <br>
    <br>                       
    <input type="submit" style="width:70px; height:30px; text-align:center;margin-left: 210px;" name="button">
    </form>
    <?php
        if(isset($_POST["button"]))
        {
        $sql="INSERT INTO sube(arazi_id,sube_ad,hasta_kapasitesi) VALUES('".$_POST["bolge"]."','".$_POST["sube"]."','".$_POST["kapasite"]."')";
        $sonuc=mysqli_query($conn,$sql);
            if($sonuc)
            {
                echo "";
            }
            else{
                echo "Hata var!";
            }
        }  

        if (isset($_POST['sube_silme'])) {
        $id = $_POST['sube_id'];
        $sorgu=("DELETE FROM sube WHERE sube_id=$id");
        $sonuc=mysqli_query($conn, $sorgu);
        
        if ($sonuc) {
        header("Location: subeler.php");
        exit;
        }
        }	
            
    ?> 
    
    
    </div>
    <span style="width:1000px; height:40px; margin-top:-40px; margin-left: 200px; border: 1px; text-align: center;
    font-family: 'Raleway', Helvetica, Arial, sans-serif;  color: rgb(255, 255, 255);
    font-weight: 400px;
    border-radius: 10px;
    background: none;">Şube açacağınız arazinin metrekare değeri 250'den küçük ise hasta kapasitesini 75'ten fazla olmayacak şekilde belirtmeniz önerilir.</span>
    <br>
    <br>
    <table id="sube_tablo">
        <tr>
            <th>Şube Adı</th>
            <th>Hasta Kapasitesi</th>
            <th>Şube Maliyeti</th>
            <th>Şube Silme</th>

        </tr>
    <?php
    $tablo="SELECT sube.sube_id,sube.sube_ad,sube.hasta_kapasitesi,sube.sube_maliyet FROM sube";
    $sonuc2=$conn->query($tablo);
while($row = $sonuc2->fetch_assoc()) { ?>
<tr>
<td><?php echo $row['sube_ad']; ?></td>
<td><?php echo $row['hasta_kapasitesi']; ?></td>
<td><?php echo $row['sube_maliyet']; ?></td>      
<td>  
<div class="d-flex">
<form class="mx-1" action="subeler.php" method="POST">
<input type="hidden" name="sube_id" value="<?php echo $row['sube_id'] ?>">
<button type="submit" name="sube_silme" class="btn-sil">SİL</button>
</form>  
<?php } ?>
</div>
</td> 
<td><?php echo $row['urun_ad']; ?></td>           
</tr>                
</table>

    <section id="menu">
        <div class="items">
            <li><a href="index.php">Anasayfa</a></li>
            <li><a href="subeler.php">Şubeler</a></li>
            <li><a href="doktor.php">Doktorlar</a></li>
            <li><a href="hemsire.php">Hemşireler</a></li>
            <li><a href="login.php">Çıkış</a></li>
        </div>

    <div class="logo" >
        <img src="ybs_logo.png" alt="" style="width: 110px;height: 110px">
    </div>
    </body>

