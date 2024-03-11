<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan2 - Raihan Sultan</title>
</head>
<body>
    <div class="container" style="margin-left:auto; margin-right:auto; padding:20px; background-color:lightgrey;">
    <h1>Form Penyewaan</h1>
    <form action="Latihan2_penyewaanPOST.php" method="post">
    <h4>Judul Buku<h4>    
    <input type="text" name="title"><br>
        <h4>Kategori Buku</h4>
        <select name="genre">
            <option value="">...</option>
            <option value="Fiction">Fiksi</option>
            <option value="Non-Fiction">Non-Fiksi</option>
            <option value="Article">Karya Ilmiah</option>
            <option value="Magazine">Majalah</option>
        </select><br>
        <h4>Tanggal Pinjam</h4>
        <select name="date">
        <option value="" selected>
                <?php
                    for($i=1; $i<=31; $i++) {
                        echo "<option value='$i'>$i</option>";
                    }
                ?>
            </select>
            <select name="month">
            <option value="" selected>
                <?php
                    $month=array("Januari"
                    , "Februari"
                    , "Maret"
                    , "April"
                    , "Mei"
                    , "Juni"
                    , "Juli"
                    , "Agustus"
                    , "September"
                    , "Oktober"
                    , "November"
                    , "Desember");
                    foreach ($month as $bulan) {
                        echo "<option value='$bulan'>$bulan</option>";
                    }
                ?>
            </select>
            <select name="year">
                <option value="" selected>
                <?php
                    for($i=2023; $i<=2025; $i++) {
                        echo "<option value='$i'>$i</option>";
                    }
                ?>
            </select>
        <br>
        <h4>Lama Pinjam</h4>
        <input type="number" name="duration"> Hari<br>
        <h4>Nama Anggota</h4>
        <input type="text" name="name"><br>
        <h4>Nama Petugas</h4>
        <select name="staff">
            <?php
                $officer=array("Wawan Sumatera", "Agus LPG 12 Kilo", "Iskandar Basreng pedas");
                foreach($officer as $Off) {
                    echo "<option value='$Off'>$Off</option>";
                }
            ?>
        </select>
        <br>
        <br>
        <div class="container" style="">
        <input name="submit" type="submit" value="Simpan">
        <input name="reset" type="reset" value="Batal">
            </div>
    </form>
            </div>
</body>
</html>