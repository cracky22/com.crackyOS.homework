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
    <link rel="icon" type="image/x-icon" href="./src/img/homework-favicon1.png">
    <title>Einstellungen</title>
    <script src="./src/js/sysstat.js"></script>
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
                <a class="mdl-navigation__link" title="Zurück&nbsp;gehen"
                    href="./index.php?comeFrom=./settings.php">&#127968;&nbsp;Home</a>
                <a class="mdl-navigation__link" title="Links&nbsp;ansehen"
                    href="./links.php?comeFrom=./settings.php">&#128279;&nbsp;Links</a>
                <a class="mdl-navigation__link" title="Termine&nbsp;ansehen"
                    href="./calendar.php?comeFrom=./settings.php">&#128467;&nbsp;Termine</a>
                <a class="mdl-navigation__link" title="Stundenplan&nbsp;öffnen"
                    href="./timetable.php?comeFrom=./settings.php">&#128198;&nbsp;Stundenplan</a>
                <a class="mdl-navigation__link" title="Datenschutz&nbsp;öffnen"
                    href="./p/Datenschutz.php?comeFrom=../settings.php">&#128272;&nbsp;Datenschutz</a>
                <a class="mdl-navigation__link" title="Impressum&nbsp;öffnen"
                    href="./p/Impressum.php?comeFrom=../settings.php">&#128209;&nbsp;Impressum</a>
                <a class="mdl-navigation__link" title="E-Mail schreiben"
                    href="mailto:cracky2208@gmail.com?subject=report from com.crackyOS.homework">&#128231;&nbsp;Kontakt</a>
                <a class="mdl-navigation__link" title="Info&nbsp;zu&nbsp;aktuellen&nbsp;Version&nbsp;+&nbsp;Änderungen"
                    href="./changeLog.php?comeFrom=./settings.php">
                    <p class="version">
                        <script src="./src/js/version.js"></script>
                    </p>
                </a>
                <a class="mdl-navigation__link" style="background-color: #c3c3c34f;"
                    title="&copy;&nbsp;Martin&nbsp;Blieninger"
                    href="#">&#169;&nbsp;<b>cracky></b>&nbsp;<small>by&nbsp;Martin&nbsp;B.<sup>&nbsp;2023</sup></small></a>
                <img class="qr-share" src="./src/img/qr-share-homework.png">
                <p class="qr-text">QR-Code zum teilen</p>
                </img>
            </nav>
        </div>
        <main class="mdl-layout__content">
            <div class="page-content">
                <center>
                    <h5>Allgemeine Einstellungen</h5>
                    
                    
                    <button
                        class="settingBtn mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored"
                        onclick="window.location.href='./shell.php?cmd=bash+./src/sh/sync.sh'">
                        Hausaufgaben Synchronisieren
                    </button>
                    <br>
                    <button
                        class="settingBtn mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored"
                        onclick="window.location.href='./shell.php?cmd=bash+clearHomeWorkData.sh'">
                        Hausaufgaben leeren
                    </button>
                    <br>
                    <button
                        class="settingBtn mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored"
                        onclick="window.location.href='./shell.php?cmd=bash+wipeHomeWorkData.sh'">
                        Hausaufgaben komplett löschen
                    </button>
                    <br>
                    <button
                        class="settingBtn mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored"
                        onclick="window.location.href='./shell.php?cmd=bash+restoreHomeWorkData.sh'">
                        Hausaufgaben wiederherstellen
                    </button>
                    <br>
                    <button
                        class="settingBtn mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored"
                        onclick="window.location.href='./HomeWorkData.html?setting=noAutoSyncMod:false;'">
                        Hausaufgabenliste Teilen
                    </button>
                    <br>
                </center>

                <center>
                    <div class="sysstat">
                        <h6 id="sysstat" class="sysstat"></h6>
                    </div>
                    
                    <button
                        class="settingBtn mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored"
                        onclick="window.location.href='mailto:cracky2208@gmail.com?subject=report from com.crackyOS.homework'">
                        Administartor Kontaktieren
                    </button>
                    <br><br>
                </center>

                <center>
                    <div class="sysinfo">
                        <h6 class="header">
                            <small><u>&emsp;Systeminformationen&emsp;</u></small>
                            <p>
                                <small>
                                    <b>Server:</b>&nbsp;Raspberry&nbsp;Pi&nbsp;4B&nbsp;4GB&nbsp;DDR4&nbsp;RAM
                                    <br>
                                    <b>Betriebssystem:</b>&nbsp;Debian&nbsp;(Raspbian)&nbsp;11&nbsp;Lite
                                    <br>
                                    <b>WebServer</b>&nbsp;/&nbsp;<b>Backend:</b>&nbsp;Apache2&nbsp;/&nbsp;PHP&nbsp;8.1
                                </small>
                            </p>
                        </h6>
                    </div>
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