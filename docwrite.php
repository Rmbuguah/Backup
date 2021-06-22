<?php
$file = "note.txt";

// String of data to be written
$data = "The quick brown fox jumps over the lazy dog.";

// Write data to the file
file_put_contents($file, $data) or die("ERROR: Cannot write the file.");

echo "Data written to the file successfully.";
// String of data to be written
$dataa = "The quick brown fox jumps over the lazy dog.";

// Write data to the file
file_put_contents($file, $dataa, FILE_APPEND) or die("ERROR: Cannot write the file.");

echo "Data written to the file successfully.";
$file = "file.txt";

// Check the existence of file
if (file_exists($file)) {
    // Attempt to rename the file
    if (rename($file, "newfile.txt")) {
        echo "File renamed successfully.";
    } else {
        echo "ERROR: File cannot be renamed.";
    }
} else {
    echo "ERROR: File does not exist.";
}
