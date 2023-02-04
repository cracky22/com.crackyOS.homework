<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="./src/img/homework-favicon1.png">
    <title>laden...</title>
</head>
<body>

<?php
session_start();
$errmsg_arr = array();
$errflag = false;
$fach	= trim($_REQUEST["fach"]);
$hwdata  = trim($_REQUEST["hwdata"]);
$br	=	"<br>";
$filename       = "HomeWorkData.html";
$MyFile         = fopen($filename, "a");
$message='<p class="hwdata"><i><b>Hausaufgabe</b></i>&nbsp;in&nbsp;<u><b>'.$fach.'</b></u>&#58; '.$hwdata."\r\n \n";
fwrite($MyFile, $message);
fclose($MyFile);
$errmsg_arr[] = 'Hausaufgabe gesendet';
$errflag = true;
if($errflag) {
        $_SESSION['ERRMSG_ARR'] = $errmsg_arr;
        session_write_close();
        header("location: index.php?comeFrom=./save.php;POST-Data=$message");
        exit();
}
die;
?>
<?php
    exec("sudo bash sync.sh");
?>

</body>
</html>