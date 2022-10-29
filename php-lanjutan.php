<?php
/*
$nama = "Irsa";
$no = 10;
$i = 0;

for ($i=0; $i<5; $i++){
    $n= $i +1;
    echo $n." ".$nama. "<br/>";
}

//
$no = 10;
$i = 0;
while ($i< $no) {
    echo $n." ".$nama. "<br/>";
    $i++;
}

do {
    $n = $i + 1;
    echo $n. " ".$nama."</br>";
    $i++;
} while ($i < $no );

$data = array('a','b','c','d','e');
for($i=0; $i<count($data);$i++){
    echo $data[$i]."<br/>";    
}

foreach($data as $value){
    echo $value."<br>";
}

// percabangan

if ($nama = "Irsa") {
    echo $nama." adalah orang Malang";
} else if ($nama = "Amanda"){
    echo $nama." bukan orang Malang";
} else {
    echo $nama." dari mana ya?";
}
switch($nama) {
    case "Irsa":
        $pesan = $nama." adalah orang Malang";
    break;
    case "Amanda":
        $pesan = $nama." berasal dari Jawa Barat";
    break;
    default;
        $pesan = $nama." dari mana ya?";
    }
echo $pesan;
*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Input Nama dan Diulang</h1>
    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
        <label>Nama</label>
        <input type="text" name="nama">
        <label>Jumlah</label>
        <input type="text" name="no">
        <input type="submit" name="submit" value="Submit">
    </form>
    <?php
    if(!empty($_POST['submit'])){

        switch($_POST['nama']){
            case "Irsa":
                $pesan = ($_POST['nama'])." adalah orang Banda Neira";
            break;
            case "Amanda":
                $pesan = $_POST['nama']." adalah orang Jawa Barat";
            break;
            default:
                $pesan = $_POST['nama']." dari mana ya?";
        }
        for ($i=0;$i<$_POST['no'];$i++){
            echo $pesan."<br>";
        }
    } else {
        echo "Anda belum input nama dan jumlah.";
    }
    ?>
</body>
</html>