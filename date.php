<!DOCTYPE html>
<html lang="en">

<head>
    <title>PHP Get Current Date</title>
</head>

<body>

    <?php
    // Return current date from the remote server
    $today = date("d/m/Y");
    echo $today;
    $today1 = date("d/m/Y");
    echo $today1;
    echo date("h:i:s") . "<br>";
    echo date("F d, Y h:i:s A") . "<br>";
    echo date("h:i a");
    $timestamp = time();
    echo ($timestamp);
    ?>

</body>

</html>