<?php
// Get the submitted username
$username = $_POST['username'];

// Read the CSV file to check if the username exists
$csvFile = 'user_credentials.csv';
$file = fopen($csvFile, 'r');
$exists = false;

while (($row = fgetcsv($file)) !== false) {
    if ($row[0] === $username) {
        $exists = true;
        break;
    }
}

fclose($file);

// Send the response back to the JavaScript
echo json_encode(['exists' => $exists]);
?>
