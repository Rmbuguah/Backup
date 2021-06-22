<!DOCTYPE html>
<html lang="en">

<head>
    <title>Checks Whether a File Exists or Not in PHP</title>
</head>

<body>

    <?php
    $file = "data.txt";

    // Check the existence of file
    if (file_exists($file)) {
        echo "The file $file exists." . "<br>";

        // Attempt to open the file
        $handle = fopen($file, "r") or die("ERROR: Cannot open the file.");
        if ($handle) {
            echo "File opened successfully.";

            // Closing the file handle
            fclose($handle);
        }
    } else {
        echo "ERROR: The file $file does not exist.";
    }
    // Check the existence of file
    if (file_exists($file)) {
        // Open the file for reading
        $handle = fopen($file, "r") or die("ERROR: Cannot open the file.");

        /* Some code to be executed */

        // Closing the file handle
        fclose($handle);
    } else {
        echo "ERROR: File does not exist.";
    }
    $file = "data.txt";

    // Check the existence of file
    if (file_exists($file)) {
        // Open the file for reading
        $handle = fopen($file, "r") or die("ERROR: Cannot open the file.");

        // Reading the entire file
        $content = fread($handle, filesize($file));

        // Closing the file handle
        fclose($handle);

        // Display the file content
        echo $content;
    } else {
        echo "ERROR: File does not exist.";
    }
    if (file_exists($file)) {
        // Reading the entire file into a string
        $content = file_get_contents($file) or die("ERROR: Cannot open the file.");

        // Display the file content 
        echo $content;
    } else {
        echo "ERROR: File does not exist.";
    }
    if (file_exists($file)) {
        // Reading the entire file into an array
        $arr = file($file) or die("ERROR: Cannot open the file.");
        foreach ($arr as $line) {
            echo $line;
        }
    } else {
        echo "ERROR: File does not exist.";
    }
    ?>

</body>

</html>