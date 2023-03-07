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
    <link rel="stylesheet" href="doktor.css">
</head>
<body>
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

    <div class="drEk" style="width:500px; height:325px; margin-top:-450px; margin-left: 565px; border: 1px;
    border-color: black;
    border-style: solid;
    border-radius: 10px;
    background: white;
    box-shadow: 4px 3px rgba(10, 49, 113, 0.692);">
    <p style="position:relative; font-family: 'Raleway', Helvetica, Arial, sans-serif;  color: rgb(5, 14, 63);
    font-weight: 400px; text-align:center; font-weight: bold;">HEMŞİRE EKLEME</p>                       
    <form method="post" action="">
    <input style="width:300px; height:30px; text-align:center; margin-left: 100px;" type="string" required="" name="hemsireAd" placeholder="Hemşire Adını Giriniz...">
    <br>
    <br>
    <input style="width:300px; height:30px; text-align:center; margin-left: 100px;" type="string" required="" name="hemsireSoyad" placeholder="Hemşire Soyadını Giriniz...">
    <br>
    <br>
    <select style="width:300px; height:30px; text-align:center; margin-left: 105px;" name="subeSec"><option value="">Şube Seçiniz
        <?php $sube=mysqli_query($conn,"SELECT* FROM sube");
                while($row=mysqli_fetch_array($sube)){
                    echo "<option value='".$row["sube_id"]."'>".$row["sube_ad"]."</option>";
                }
        ?>
    </select>
    <br>
    <br>
    <select style="width:300px; height:30px; text-align:center; margin-left: 105px;" name="bransSec"><option value="">Branş Seçiniz
    <?php $brans=mysqli_query($conn,"SELECT * FROM brans, doktor WHERE brans.brans_id=doktor.brans_id");
            while($row=mysqli_fetch_array($brans)){
                    echo "<option value='".$row["brans_id"]."'>".$row["brans_ad"]."</option>";
                }

    ?>
    </select>
    <br>
    <br>
    <br>                       
    <input type="submit" style="width:70px; height:30px; text-align:center;margin-left: 210px;" name="button">
    </form>
    <?php
        if(isset($_POST["button"]))
        {
        $sql="INSERT INTO hemsire(sube_id,hemsire_ad,hemsire_soyad,brans_id) VALUES('".$_POST["subeSec"]."','".$_POST["hemsireAd"]."','".$_POST["hemsireSoyad"]."','".$_POST["bransSec"]."')";
        $sonuc=mysqli_query($conn,$sql);
            if($sonuc)
            {
                echo "";
            }
            else{
                echo "Hata var!";
            }
        }  
          
        if (isset($_POST['hemsire_silme'])) {
            $id = $_POST['hemsire_id'];
            $sorgu=("DELETE FROM hemsire WHERE hemsire_id=$id");
            $sonuc=mysqli_query($conn, $sorgu);
            
            if ($sonuc) {
            header("Location: hemsire.php");
            exit;
            }
            }	
                
    ?>       
    </div>
     
    <table id="hemsire_tablo">
        <tr>
            <th>Şube Adı</th>
            <th>Hemşire Adı</th>
            <th>Hemşire Soyadı</th>
            <th>Branş</th>
            <th>Hemşire Silme</th>                  
        </tr>
    <?php
    $tablo="SELECT hemsire.hemsire_id ,sube.sube_ad,hemsire.hemsire_ad,hemsire.hemsire_soyad,brans.brans_ad FROM sube,hemsire,brans WHERE sube.sube_id=hemsire.sube_id AND hemsire.brans_id=brans.brans_id GROUP BY hemsire.hemsire_id";
    $sonuc2=$conn->query($tablo);
    while($row = $sonuc2->fetch_assoc()) { ?>
        <tr>
        <td><?php echo $row['sube_ad']; ?></td>
        <td><?php echo $row['hemsire_ad']; ?></td>
        <td><?php echo $row['hemsire_soyad']; ?></td>
        <td><?php echo $row['brans_ad']; ?></td>      
        <td>  
        <div class="d-flex">
        <form class="mx-1" action="hemsire.php" method="POST">
        <input type="hidden" name="hemsire_id" value="<?php echo $row['hemsire_id'] ?>">
        <button type="submit" name="hemsire_silme" class="btn-sil">SİL</button>
        </form>  
        <?php } ?>
        </div>
        </td>      
        </br>        
        </tr>       
    </table>


    </body>
    </html>