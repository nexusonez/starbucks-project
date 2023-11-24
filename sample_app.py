from flask import Flask, request, render_template, redirect, url_for

app = Flask(__name__)

@app.route("/")
def main():
    return render_template("home.html")

@app.route("/contact-us")
def contact():
    return render_template("contact.html")

@app.route('/login', methods=['GET', 'POST'])
def login():
    if request.method == 'POST':
        # Handle the login logic here
        return 'Login successful'  # Replace with your actual response
    else:
        # Render the login form
        return render_template('login.html')

@app.route("/sign-up")
def signup():
    return render_template("signup.html")

if __name__ == "__main__":
    app.run(host="0.0.0.0", port=5000)
