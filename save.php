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
$date = trim($_REQUEST["date"]);
$br	=	"<br>";
$filename       = "HomeWorkData.html";
$MyFile         = fopen($filename, "a");
$message='<p class="hwdata"><u>Hausaufgabe&nbsp;in&nbsp;<b>'.$fach.'</b>'.$date.'&#58;</u> '.$hwdata."\r\n \n";
fwrite($MyFile, $message);
fclose($MyFile);
$errmsg_arr[] = 'Hausaufgabe erfolgreich gesendet';
$errflag = true;
if($errflag) {
        $_SESSION['ERRMSG_ARR'] = $errmsg_arr;
        session_write_close();
        header("location: index.php?comeFrom=./save.php;POST-Data=$message;user=web-backend_php;");
        exit();
}
die;
?>
<?php
    exec("/bin/bash ./src/sh/sync.sh");
?>

</body>
</html>