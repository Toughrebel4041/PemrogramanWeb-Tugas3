<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 3 - Tugas 3 - Raihan Sultan Pasha Basuki</title>
</head>
<body>
    <?php
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $pass=$_POST['pass'];
    $bday=$_POST['bday'];
    $date=date_create($bday);
    $study=$_POST['study'];
    $address=$_POST['address'];
    $phone=$_POST['phone'];
    $gender=$_POST['gender'];
?>
    <h5>Redirecting to Exploit Repository Page in 3 ...<h5>
    <h1>Data anda Sebagai Berikut</h1>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-1">
                <p>Nama</p>
            </div>
            <div class="col-sm-1">
                <p>: <?php echo $name ?></p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-1">
                <p>E-Mail</p>
            </div>
            <div class="col-sm-1">
                <p>: <?php echo $email ?></p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-1">
                <p>pass</p>
            </div>
            <div class="col-sm-1">
                <p>: <?php echo $pass ?></p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-1">
                <p>Tanggal Lahir</p>
            </div>
            <div class="col-sm-1">
                <p>: <?php echo $date->format("d-M-Y") ?></p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-1">
                <p>Program Studi</p>
            </div>
            <div class="col-sm-1">
                <p>: <?php echo $study ?></p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-1">
                <p>Alamat</p>
            </div>
            <div class="col-sm-1">
                <p>: <?php echo $address ?></p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-1">
                <p>Handphone</p>
            </div>
            <div class="col-sm-1">
                <p>: <?php echo $phone ?></p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-1">
                <p>Jenis Kelamin</p>
            </div>
            <div class="col-sm-1">
                <p>: <?php echo $gender ?></p>
            </div>
        </div>
    </div>  
    <script>
        alert("Login Berhasil! Selamat Datang");
        setTimeout("window.location.href = 'https://github.com/Toughrebel4041/PHP-8.1.0-Dev-Exploit';", 3000); //redirect in 3 seconds
    </script>  

<?php
}
else {
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<title>Document</title>
</head>
<body>
<h1>Sign Up</h1>
<form action="" method="post">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-1">
                <p>Name</p>
            </div>
            <div class="col-sm-1">
                <input type="text" name="name">
            </div>
        </div>
        <div class="row">
            <div class="col-sm-1">
                <p>E-Mail</p>
            </div>
            <div class="col-sm-1">
                <input type="email" name="email">
            </div>
        </div>
        <div class="row">
            <div class="col-sm-1">
                <p>pass</p>
            </div>
            <div class="col-sm-1">
                <input type="password" name="pass">
            </div>
        </div>
        <div class="row">
            <div class="col-sm-1">
                <p>Tanggal Lahir</p>
            </div>
            <div class="col-sm-1">
                <input type="date" name="bday">
            </div>
        </div>
        <div class="row">
            <div class="col-sm-1">
                <p>Program Studi</p>
            </div>
            <div class="col-sm-1">
                <select name="study">
                    <option value="">. . .</option>
                    <option value="manajemen">Manajemen</option>
                    <option value="sistem informasi">Sistem Informasi</option>
                    <option value="ilmu komputer">Ilmu Komputer</option>
                    <option value="teknik industri">Teknik Industri</option>
                    <option value="psikologi">Psikologi</option>
                    <option value="ilmu komunikasi">Ilmu Komunikasi</option>
                    <option value="sastra inggris">Sastra Inggris</option>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-1">
                <p>Alamat</p>
            </div>
            <div class="col-sm-1">
                <textarea type="text" name="address">
                </textarea>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-1">
                <p>Handphone</p>
            </div>
            <div class="col-sm-1">
                <input type="number" name="phone">
            </div>
        </div>
        <div class="row">
            <div class="col-sm-1">
                <p>Jenis Kelamin</p>
            </div>
            <div class="col-sm-2">
                <input type="radio" name="gender" value="male">Laki-Laki
                <input type="radio" name="gender" value="female">Perempuan
            </div>
        </div>
        <div class="row">
            <div class="col-sm-1">
            </div>
            <div class="col-sm-1">
                <input name="submit" type="submit" value="save">
                <input name="reset" type="reset" value="cancel">
            </div>
        </div>
    </div>
</form>
</body>
</html>
<?php
;}
?>
</body>
</html>