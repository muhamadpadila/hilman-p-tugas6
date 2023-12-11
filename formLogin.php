<?php
function otentikasi($uname, $pass) {
    // User admin with password 123456
    if ($uname == "admin" && $pass == "123456") {
        return true;
    } else {
        return false;
    }
}

// Process the form data when the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve and sanitize form data
    $username = htmlspecialchars($_POST["username"]);
    $password = htmlspecialchars($_POST["password"]);

    // Authenticate the user
    if (otentikasi($username, $password)) {
        // Authentication successful
        echo "<div class='alert alert-success' role='alert'>";
        echo "Login successful! Welcome, $username!";
        echo "</div>";
    } else {
        // Authentication failed
        echo "<div class='alert alert-danger' role='alert'>";
        echo "Login failed. Please check your username and password.";
        echo "</div>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>

    <!-- Bootstrap CSS (assuming you are using Bootstrap) -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <style>
        /* Custom CSS for Form Styling */
        .form-horizontal {
            max-width: 600px;
            margin: 0 auto;
        }

        .form-group {
            margin-bottom: 15px;
        }

        legend {
            font-size: 24px;
            color: #333;
            margin-bottom: 20px;
        }

        label {
            font-weight: bold;
        }

        input {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
        }

        button {
            padding: 10px 20px;
        }

        /* Optional: Add some background and border styling for visual appeal */
        body {
            background-color: #f4f4f4;
        }

        .form-horizontal {
            background-color: #fff;
            border: 1px solid #ccc;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>

<body>
    <form class="form-horizontal" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <fieldset>

            <!-- Form Name -->
            <legend>Login Form</legend>

            <!-- Text input for UserName -->
            <div class="form-group">
                <label class="col-md-4 control-label" for="username">UserName</label>
                <div class="col-md-4">
                    <input id="username" name="username" type="text" placeholder="Enter your username"
                        class="form-control input-md" required="">
                </div>
            </div>

            <!-- Text input for Password -->
            <div class="form-group">
                <label class="col-md-4 control-label" for="password">Password</label>
                <div class="col-md-4">
                    <input id="password" name="password" type="password" placeholder="Enter your password"
                        class="form-control input-md" required="">
                </div>
            </div>

            <!-- Button -->
            <div class="form-group">
                <label class="col-md-4 control-label" for="button"></label>
                <div class="col-md-4">
                    <button id="button" name="button" class="btn btn-primary">Login</button>
                </div>
            </div>

        </fieldset>
    </form>

    <!-- Bootstrap JS (assuming you are using Bootstrap) -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>

</html>
