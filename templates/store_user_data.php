<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Concatenate username and password with a comma
    $userDataString = "$username, $password\n";

    // Append the user data to the CSV file
    $file = 'user_credentials.csv';
    file_put_contents($file, $userDataString, FILE_APPEND);

    // Commit and push changes to GitHub
    exec('git add .');
    exec('git commit -m "Add new user data"');
    exec('git push origin master');

    // Send a response indicating success
    http_response_code(200);
    echo json_encode(['message' => 'User data has been written to the CSV file and pushed to GitHub.']);
} else {
    // Invalid request method
    http_response_code(405);
    echo json_encode(['error' => 'Method Not Allowed']);
}

?>
