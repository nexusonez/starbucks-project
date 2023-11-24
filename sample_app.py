from flask import Flask, request, render_template, redirect, url_for

app = Flask(__name__)

@app.route("/")
def main():
    return render_template("home.html")

# @app.route("/contact-us")
# def contact():
#     return render_template("contact.php")

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

# @app.route("/signup", methods=["GET", "POST"])
# def signup():
#     success_message = None
#     if request.method == "POST":
#         # Handle the signup logic here
#         username = request.form["username"]
#         password = request.form["password"]
#         confirm_password = request.form["confirm_password"]
        
#         if password == confirm_password:
#             cursor=conn.cursor()
            
#             # Check if the username is already taken
#             check_username_query = "SELECT * FROM users WHERE username = %s"
#             cursor.execute(check_username_query, (username))
#             existing_user = cursor.fetchone()
            
#             if existing_user:
#                 error_message = "Username already exists"
#                 return render_template("signup.php", error=error_message)
#             else:
#                 # Insert the new user into the database
#                 insert_user_query = "INSERT INTO users VALUES (NULL, %s, %s);"
#                 cursor.execute(insert_user_query, (username, password))
#                 conn.commit()

#                 # Display a success message on the signup page
#                 success_message = "Signup successful! You can now log in."
#                 return render_template("signup.php", success=success_message)

#         else:
#             error_message = "Passwords do not match!"
#             return render_template("signup.php", error=error_message)
                    
#     return render_template("signup.php")

if __name__ == "__main__":
    app.run(host="0.0.0.0", port=5000)
