function registerUser(event) {
    event.preventDefault();

    const username = document.getElementById('username').value;
    const password = document.getElementById('password').value;

    // Send a request to the server to check if the username is already registered
    const xhr = new XMLHttpRequest();
    xhr.open('POST', 'check_username.php', true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    xhr.onreadystatechange = function() {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                const response = JSON.parse(xhr.responseText);
                if (response.exists) {
                    document.getElementById('message').innerHTML = 'Username already registered. Please choose a different one.';
                } else {
                    document.getElementById('message').innerHTML = 'Registration successful!';
                    // You can proceed to store the username and password in the CSV file or a database.
                }
            } else {
                console.error('Error checking username:', xhr.status, xhr.statusText);
            }
        }
    };

    // Send the username to the server for validation
    xhr.send(`username=${username}`);
}