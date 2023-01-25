<!DOCTYPE html>
<html lang="de-De">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
    <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
    <script src="./src/js/script.js"></script>
    <link rel="stylesheet" href="./src/css/style.css">
    <link rel="icon" type="image/x-icon" href="./src/img/homework-favicon1.png">
    <title>Neuigkeiten</title>
</head>

<body>
    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
        <header class="mdl-layout__header">
            <div class="mdl-layout__header-row">
                <span class="mdl-layout-title">&#128260;&nbsp;Update&nbsp;&#45;&nbsp;Neuigkeiten</span>
                <div class="mdl-layout-spacer"></div>
                <nav class="mdl-navigation mdl-layout--large-screen-only">
                    
                </nav>
            </div>
        </header>
        <div class="mdl-layout__drawer">
            <span class="mdl-layout-title">Menü</span>
            <nav class="mdl-navigation">
                <a class="mdl-navigation__link" title="Zurück&nbsp;gehen" href="./index.php?comeFrom=./changeLog.php">&#127968;&nbsp;Home</a>
                <a class="mdl-navigation__link" title="E-Mail&nbsp;schreiben" href="mailto:cracky2208@gmail.com?subject=report from com.crackyOS.homework in @contact">&#128231;&nbsp;Kontakt</a>
                <a class="mdl-navigation__link" title="Datenschutz&nbsp;öffnen" href="./Datenschutz.php?comeFrom=./changeLog.php">&#128272;&nbsp;Datenschutz</a>
                <a class="mdl-navigation__link" title="Impressum&nbsp;öffnen" href="./Impressum.php?comeFrom=./changeLog.php">&#128209;&nbsp;Impressum</a>
                <a class="mdl-navigation__link" title="Info&nbsp;zu&nbsp;aktuellen&nbsp;Version&nbsp;+&nbsp;Änderungen" href="#dubleClick"><p class="version"><script src="./src/js/version.js"></script></p></a>
                <a class="mdl-navigation__link" title="&copy;&nbsp;Martin&nbsp;Blieninger" href="#">&#169;&nbsp;<b>cracky></b>&nbsp;<small>by Martin B.<sup>&nbsp;2023</sup></small></a>
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
			<button onclick="refresh()">
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
