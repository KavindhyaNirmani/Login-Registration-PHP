<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <title>Register</title>
</head>
<body>
<div class="container">
        <div class="box form-box">

            <header>Register</header>
            <form action="./includes/register.inc.php" method="post" class="register">
                <div class="field input">
                    <label for="text">First Name</label>
                    <input type="text" name="fname" placeholder="Enter Your First Name">
                </div>

                <div class="field input">
                    <label for="text">Last Name</label>
                    <input type="text" name="lname" placeholder="Enter Your Last Name">
                </div>

                <div class="field input">
                    <label for="email">Email</label>
                    <input type="text" name="email" placeholder="Enter Your First Name">
                </div>

                <div class="field input">
                    <label for="password">Password</label>
                    <input type="password" name="pass" placeholder="Enter Your Password">
                </div>

                <div class="field input">
                    <label for="password">Confirm Password</label>
                    <input type="password" name="re-pass" placeholder="Enter Password Again">
                </div>

                <div class="rem">
                    <input type="checkbox" name="re-check" id="re-check">
                    <label for="re-check">Remember Me </label>
                </div>

                <div class="field">

                    <button class="btn" type="submit" name="register-btn">Register</button>
                </div>
                <div class="links">
                    Don't have account? <a href="index.php">Login now</a>
                </div>
            </form>
        </div>

    </div>
</body>
</html>