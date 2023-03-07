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
    font-weight: 400px; text-align:center; font-weight: bold;">DOKTOR EKLEME</p>                       
    <form method="post" action="">
    <input style="width:300px; height:30px; text-align:center; margin-left: 100px;" type="string" required="" name="drAd" placeholder="Doktor Adını Giriniz...">
    <br>
    <br>
    <input style="width:300px; height:30px; text-align:center; margin-left: 100px;" type="string" required="" name="drSoyad" placeholder="Doktor Soyadını Giriniz...">
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
    <?php $brans=mysqli_query($conn,"SELECT* FROM brans");
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
        $sql="INSERT INTO doktor(sube_id,doktor_ad,doktor_soyad,brans_id) VALUES('".$_POST["subeSec"]."','".$_POST["drAd"]."','".$_POST["drSoyad"]."','".$_POST["bransSec"]."')";
        $sonuc=mysqli_query($conn,$sql);
            if($sonuc)
            {
                echo "";
            }
            else{
                echo "Hata var!";
            }
        }  

        
        if (isset($_POST['dr_silme'])) {
            $id = $_POST['doktor_id'];
            $sorgu=("DELETE FROM doktor WHERE doktor_id=$id");
            $sonuc=mysqli_query($conn, $sorgu);
            
            if ($sonuc) {
            header("Location: doktor.php");
            exit;
            }
            }	
                
        ?> 
    </div>
    <table id="doktor_tablo">
        <tr>
            <th>Şube Adı</th>
            <th>Doktor Adı</th>
            <th>Doktor Soyadı</th>
            <th>Branş</th>
            <th>Doktor Silme</th>

        </tr>
    <?php
    $tablo="SELECT doktor.doktor_id,sube.sube_ad,doktor.doktor_ad,doktor.doktor_soyad,brans.brans_ad FROM sube,doktor,brans WHERE sube.sube_id=doktor.sube_id AND doktor.brans_id=brans.brans_id GROUP BY doktor.doktor_id";
    $sonuc2=$conn->query($tablo);
    while($row = $sonuc2->fetch_assoc()) { ?>
    <tr>
    <td><?php echo $row['sube_ad']; ?></td>
    <td><?php echo $row['doktor_ad']; ?></td>
    <td><?php echo $row['doktor_soyad']; ?></td>
    <td><?php echo $row['brans_ad']; ?></td>      
    <td>  
    <div class="d-flex">
    <form class="mx-1" action="doktor.php" method="POST">
    <input type="hidden" name="doktor_id" value="<?php echo $row['doktor_id'] ?>">
    <button type="submit" name="dr_silme" class="btn-sil">SİL</button>
    </form>  
    <?php } ?>
    </div>
    </td>      
    </br>        
    </tr>       
    </table>

    </body>
    </html>