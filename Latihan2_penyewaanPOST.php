<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan2 - Raihan Sultan</title>
</head>
<body>
    <?php
    $title=$_POST['title'];
    $genre=$_POST['genre'];
    $date=$_POST['date'];
    $month=$_POST['month'];
    $year=$_POST['year'];
    $datecomb=date_create($year."-".$month."-".$date);
    $fulldate=date_format($datecomb, "d M Y");
    $duration=$_POST['duration'];
    $name=$_POST['name'];
    $staff=$_POST['staff'];

    $rent=0;
    if ($genre == "ilmiah") {
        $rent = 10000;
    }
    else {
        $rent = 5000;
    }
    $bill = $rent * $duration;
?>
    <h1>Resume Penyewaan</h1>
    Judul Buku : <?php echo $title ?> <br>
    Kategori Buku : <?php echo $genre ?> <br>
    Tanggal Pinjam : <?php echo $fulldate ?> <br>
    Lama Pinjam : <?php echo $duration ?> Hari <br>
    Biaya Sewa : Rp. <?php echo $bill ?>,- <br>
    Nama Anggota : <?php echo $name ?> <br> 
    Nama Petugas : <?php echo $staff ?> <br>
    <br>
    <a href="Latihan2_penyewaan.php"> Kembali </a>
</body>
</html>