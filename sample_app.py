from flask import Flask, request, render_template, redirect, url_for

app = Flask(__name__)

@app.route("/")
def main():
    return render_template("home.html")

@app.route("/contact-us")
def contact():
    return render_template("contact.html")

# @app.route("/login", methods=["GET", "POST"])
# def login():
#     if request.method == "POST":
#         # Handle the login logic here
#         username = request.form["username"]
#         password = request.form["password"]

#         # Use a cursor to interact with the database
#         cursor = conn.cursor()

#         # SQL query to check if the username and password match a record in the database
#         sql = "SELECT * FROM users WHERE username = %s AND password = %s"
#         cursor.execute(sql, (username, password))

#         # Fetch one result
#         result = cursor.fetchone()

#         # Check if a matching record is found
#         if result:
#             return redirect(url_for("main"))  # Redirect to the home page on successful login
#         else:
#             error_message = "Invalid username or password"
#             return render_template("login.php", error=error_message)

#     return render_template("login.php")

@app.route("/sign-up")
def signup():
    return render_template("signup.html")

if __name__ == "__main__":
    app.run(host="0.0.0.0", port=5000)
