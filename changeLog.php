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
    <link rel="manifest" href="./config/manifest.webmanifest">
    <link rel="stylesheet" href="./src/css/style.css">
    <meta http-equiv="Refresh" content="20; url='./changeLog.php?apt-get%20update%20-y'" />
    <link rel="icon" type="image/x-icon" href="./src/img/homework-favicon1.png">
    <title>Neuigkeiten</title>
</head>

<body>
    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
        <header class="mdl-layout__header">
            <div class="mdl-layout__header-row">
                <span class="mdl-layout-title">&#128260;&nbsp;Update&nbsp;&#45;&nbsp;Neuigkeiten
                    <div class="mdl-spinner mdl-js-spinner is-active"></div>
                </span>
                <div class="mdl-layout-spacer"></div>
                <nav class="mdl-navigation mdl-layout--large-screen-only">
                    
                </nav>
            </div>
        </header>
        <div class="mdl-layout__drawer">
            <span class="mdl-layout-title"><b>Menü</b>&nbsp;-&nbsp;<small>Änderungen</small></span>
            <nav class="mdl-navigation">
                <a class="mdl-navigation__link" title="Zurück&nbsp;gehen" href="./index.php?comeFrom=./changeLog.php">&#127968;&nbsp;Home</a>
                <a class="mdl-navigation__link" title="Links&nbsp;ansehen" href="./links.php?comeFrom=./changeLog.php">&#128279;&nbsp;Links</a>
                <a class="mdl-navigation__link" title="Termine&nbsp;ansehen" href="./calendar.php?comeFrom=./changelog.php">&#128467;&nbsp;Termine</a>
                <a class="mdl-navigation__link" title="Stundenplan&nbsp;öffnen" href="./timetable.php?comeFrom=./changeLog.php">&#128198;&nbsp;Stundenplan</a>
                <a class="mdl-navigation__link" title="Datenschutz&nbsp;öffnen" href="./p/Datenschutz.php?comeFrom=../changeLog.php">&#128272;&nbsp;Datenschutz</a>
                <a class="mdl-navigation__link" title="Impressum&nbsp;öffnen" href="./p/Impressum.php?comeFrom=../changeLog.php">&#128209;&nbsp;Impressum</a>
                <a class="mdl-navigation__link" title="&#9881;&nbsp;Einstellungen" href="./settings.php?comeFrom=./changeLog.php">&#9881;&nbsp;Einstellungen</a>
                <a class="mdl-navigation__link" title="E-Mail schreiben" href="mailto:cracky2208@gmail.com?subject=report from com.crackyOS.homework">&#128231;&nbsp;Kontakt</a>
                <a class="mdl-navigation__link" title="Info&nbsp;zu&nbsp;aktuellen&nbsp;Version&nbsp;+&nbsp;Änderungen" href="#dubleClick"><p class="version"><script src="./src/js/version.js"></script></p></a>
                <a class="mdl-navigation__link" style="background-color: #c3c3c34f;" title="&copy;&nbsp;Martin&nbsp;Blieninger" href="#">&#169;&nbsp;<b>cracky></b>&nbsp;<small>by&nbsp;Martin&nbsp;B.<sup>&nbsp;2023</sup></small></a>
                <img class="qr-share" src="./src/img/qr-share-homework.png">
                    <p class="qr-text">QR-Code zum teilen</p>
                </img>
            </nav>
        </div>
        <main class="mdl-layout__content">
            <div class="page-content">
                <div class="changes">
                    <h3 class="NewsHeader">Was gibt's Neues?</h3>
                    <center>
			<p class="version">
			    <script src="./src/js/version.js"></script>
			</p>
			<p class="info">
                            <script src="./src/js/patchInfo.js"></script>
                        </p>
                        <br>
                        <p class="changes">
			    <b>Änderungen:</b><br>
                            <script src="./src/js/changes.js"></script>
                        </p>
			<br>
			<button title="Wenn du nach Updates sehen willst oder die Seite nicht korrekt geladen hat, kannst du sie hier aktualisieren" onclick="refresh()">
			    manuell
                    <br>
                aktualisieren
			</button>

			<script>
			    function refresh() {
			      console.log("refresh page...");
			      sessionStorage.clear();
			      localStorage.clear();
			      location.reload();
			    }
			</script>
            
            <br>
            
            <img class="HWImage" src="./src/img/homework-favicon2.png" >
            </center>
                </div>
            </div>
        </main>
    </div>
</body>

</html>