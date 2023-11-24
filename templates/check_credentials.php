<?php
// Get the submitted username and password
$username = $_POST['username'];
$password = $_POST['password'];

// Read the CSV file to check if the credentials are valid
$csvFile = 'user_credentials.csv';
$file = fopen($csvFile, 'r');
$isValidCredentials = false;

while (($row = fgetcsv($file)) !== false) {
    // Assuming the first column is the username and the second is the password
    if ($row[0] === $username && $row[1] === $password) {
        $isValidCredentials = true;
        break;
    }
}

fclose($file);

// Send the response back to the JavaScript
echo json_encode(['isValid' => $isValidCredentials]);
?>
