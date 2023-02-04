<!DOCTYPE html>
<html lang="de-De">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./src/mdl/googleAPI-style.css">
    <link rel="stylesheet" href="./src/mdl/mdl-style.css">
    <script src="./src/mdl/mdl-script.js"></script>
    <script src="./src/js/script.js"></script>
    <link rel="manifest" href="./manifest.webmanifest">
    <link rel="stylesheet" href="./src/css/style.css">
    <link rel="icon" type="image/x-icon" href="./src/img/homework-favicon1.png">
    <title>Einstellungen</title>
</head>

<body>
    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
        <header class="mdl-layout__header">
            <div class="mdl-layout__header-row">
                <span class="mdl-layout-title">Einstellungen</span>
                <div class="mdl-layout-spacer"></div>
                <nav class="mdl-navigation mdl-layout--large-screen-only">
                    
                </nav>
            </div>
        </header>
        <div class="mdl-layout__drawer">
            <span class="mdl-layout-title"><b>Menü</b>&nbsp;-&nbsp;<small>Einstellungen</small></span>
            <nav class="mdl-navigation">
                <a class="mdl-navigation__link" title="Zurück&nbsp;gehen" href="./index.php?comeFrom=./settings.php">&#127968;&nbsp;Home</a>
                <a class="mdl-navigation__link" title="E-Mail&nbsp;schreiben" href="mailto:cracky2208@gmail.com?subject=report from com.crackyOS.homework">&#128231;&nbsp;Kontakt</a>
                <a class="mdl-navigation__link" title="Datenschutz&nbsp;öffnen" href="./Datenschutz.php?comeFrom=./settings.php">&#128272;&nbsp;Datenschutz</a>
                <a class="mdl-navigation__link" title="Impressum&nbsp;öffnen" href="./Impressum.php?comeFrom=./settings.php">&#128209;&nbsp;Impressum</a>
                <a class="mdl-navigation__link" title="Info&nbsp;zu&nbsp;aktuellen&nbsp;Version&nbsp;+&nbsp;Änderungen" href="#dubleClick"><p class="version"><script src="./src/js/version.js"></script></p></a>
                <a class="mdl-navigation__link" style="background-color: #c3c3c34f;" title="&copy;&nbsp;Martin&nbsp;Blieninger" href="#">&#169;&nbsp;<b>cracky></b>&nbsp;<small>by&nbsp;Martin&nbsp;B.<sup>&nbsp;2023</sup></small></a>
                <img class="qr-share" src="./src/img/qr-share-homework.png">
                    <p class="qr-text">QR-Code zum teilen</p>
                </img>
            </nav>
        </div>
        <main class="mdl-layout__content">
            <div class="page-content">
                <br><br>
                <center>
                    <button class="green usrSettings" onclick="window.location.href='./shell.php?cmd=bash+sync.sh'">Hausaufgaben Synchronisieren</button><br><br>
                    <button class="red usrSettings" onclick="window.location.href='./shell.php?cmd=bash+clearHomeWorkData.sh'">Hausaufgabenliste leeren</button><br><br>
			        <button class="orange usrSettings" onclick="window.location.href='./shell.php?cmd=bash+restoreHomeWorkData.sh'">Gelöschte Hausaufgaben wiederherstellen</button><br><br>
                    <button class="brown usrSettings" onclick="window.location.href='./HomeWorkData.html'"><b>Hausaufgabenliste teilen</button><br><br>
                    <br><button class="anthrBlue usrSettings" onclick="window.location.href='mailto:cracky2208@gmail.com?subject=report from com.crackyOS.homework'"><b>Administrator</b>  Kontaktieren</button><br><br>
                </center>
			<script>
			    function refresh() {
			      console.log("refresh page...");
			      sessionStorage.clear();
			      localStorage.clear();
			      location.reload();
			    }
			</script>
            </center>
                </div>
            </div>
        </main>
    </div>
</body>

</html>