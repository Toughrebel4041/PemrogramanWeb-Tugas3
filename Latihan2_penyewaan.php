<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan2 - Raihan Sultan</title>
</head>
<body>
    <h1>Form Penyewaan</h1>
    <form action="Latihan2_penyewaanPOST.php" method="post">
    <h4>Judul Buku<h4>    
    <input type="text" name="title"><br>
        <h4>Kategori Buku</h4>
        <select name="genre">
            <option value="">...</option>
            <option value="Fict">Fiksi</option>
            <option value="NonFict">Non-Fiksi</option>
            <option value="Article">Karya Ilmiah</option>
            <option value="Mag">Majalah</option>
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
        <input type="number" name="duration"><br>
        <h4>Nama Anggota</h4>
        <input type="text" name="name"><br>
        <h4>Nama Petugas</h4>
        <select name="staff">
            <?php
                $officer=array("Wawan Sumatera", "Agus LPG 12 Kilo", "Iskandar Basreng pedas");
                foreach($officer as $x) {
                    echo "<option value='$x'>$x</option>";
                }
            ?>
        </select>
        <br>
        <input name="submit" type="submit" value="simpan">
        <input name="reset" type="reset" value="batal">
    </form>
</body>
</html>