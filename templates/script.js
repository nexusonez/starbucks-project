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
                    // You can proceed to store the username and password in the CSV file.
                    // Send another request to store user data in the CSV file
                    const storeUserDataXhr = new XMLHttpRequest();
                    storeUserDataXhr.open('POST', 'store_user_data.php', true);
                    storeUserDataXhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
                    storeUserDataXhr.onreadystatechange = function() {
                        if (storeUserDataXhr.readyState === XMLHttpRequest.DONE) {
                            if (storeUserDataXhr.status === 200) {
                                console.log('User data has been written to the CSV file.');
                            } else {
                                console.error('Error storing user data:', storeUserDataXhr.status, storeUserDataXhr.statusText);
                            }
                        }
                    };
                    
                    // Send the username and password to the server for CSV file storage
                    storeUserDataXhr.send(`username=${username}&password=${password}`);
                }
            } else {
                console.error('Error checking username:', xhr.status, xhr.statusText);
            }
        }
    };

    // Send the username to the server for validation
    xhr.send(`username=${username}`);
}

// Assuming this variable is set based on the initial login state
const isLoggedIn = false;

// Function to show or hide the section based on the login status
function toggleLoggedInSection(isLoggedIn) {
    const couponsDealsContainer = document.getElementById('couponsDealsContainer');

    const loginForm = document.getElementById('loginForm');

    if (isLoggedIn) {
        // If logged in, show the logged-in section and hide the login form
        couponsDealsContainer.style.display = 'block';
        loginForm.style.display = 'none';
    } else {
        // If not logged in, hide the logged-in section and show the login form
        couponsDealsContainer.style.display = 'none';
        loginForm.style.display = 'block';
    }
}

// Function to handle login
function loginUser(event) {
    event.preventDefault();

    const username = document.getElementById('username').value;
    const password = document.getElementById('password').value;

    // Send a request to the server to validate credentials
    const xhr = new XMLHttpRequest();
    xhr.open('POST', 'check_credentials.php', true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    xhr.onreadystatechange = function () {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                const response = JSON.parse(xhr.responseText);
                if (response.isValid) {
                    document.getElementById('loginMessage').innerHTML = 'Login successful!';
                    // Call the toggleLoggedInSection function with isLoggedIn as true
                    toggleLoggedInSection(true);
                } else {
                    document.getElementById('loginMessage').innerHTML = 'Invalid username or password.';
                    // Call the toggleLoggedInSection function with isLoggedIn as false
                    toggleLoggedInSection(false);
                }
            } else {
                console.error('Error validating credentials:', xhr.status, xhr.statusText);
            }
        }
    };

    // Send the username and password to the server for validation
    xhr.send(`username=${username}&password=${password}`);
}




