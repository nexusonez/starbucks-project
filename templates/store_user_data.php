<?php

// store_user_data.php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Concatenate username and password with a comma
    $userDataString = "$username, $password\n";

    // Append the user data to the CSV file
    file_put_contents('user_credentials.csv', $userDataString, FILE_APPEND);

    // Send a response indicating success
    http_response_code(200);
    echo json_encode(['message' => 'User data has been written to the CSV file.']);
} else {
    // Invalid request method
    http_response_code(405);
    echo json_encode(['error' => 'Method Not Allowed']);
}

?>
