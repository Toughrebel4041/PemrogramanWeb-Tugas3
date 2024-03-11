<!DOCTYPE html>
<html>
    <?php
    $title = $_POST['title'];
    $genre = $_POST['genre'];
    $thn = $_POST['year'];
    $tgl = $_POST['date'];
    $bln = $_POST['month'];
    $duration = $_POST['duration'];
    $name = $_POST['name'];
    $Officer = $_POST['staff'];
    // if (checkdate($tgl, $bln, $thn)) {
    //     $FullDate = date_create($thn.$bln.$tgl);
    //     $RentDate = date_format($FullDate, "d M Y");  
    //   } else {
    //     echo "Error: Invalid tgl entered. Please enter a valid tgl.";
    //   }

    $Rental=0;
    
    if ($genre == "NonFict") {
        $Rental = 10000; 
    }
    else {
        $Rental = 5000;
    }
    $Invoice = $Rental * $duration;
?>
<head>
    <meta charset="UTF-8">
    <title>latihan2 - Raihan Sultan</title>
</head>
<body>
    <div clas="container" style="margin-left:auto; margin-right:auto; padding:20px; background-color:lightgrey;">
    <h1>Resume Penyewaan</h1>
    <div class="container">
    Judul Buku     : <?php echo $title ?> <br><br>
    Kategori Buku  : <?php echo $genre ?> <br><br>
    Tanggal Pinjam : <?php // echo $RentDate ?> <br><br> <!--Maaf bu belum bisa keambil POST nya-->
    Lama Pinjam    : <?php echo $duration ?> Hari <br><br>
    Biaya Sewa     : Rp. <?php echo number_format($Invoice) ?>,- <br><br>
    Nama Anggota   : <?php echo $name ?> <br> <br>
    Nama Petugas   : <?php echo $Officer ?> <br><br>
</div>
    <br>
    <form action="Latihan2_penyewaan.php">
    <input name="submit" type="submit" value=" Kembali " href="Latihan2_penyewaan.php">
</form>
</div>
</body>
</html>