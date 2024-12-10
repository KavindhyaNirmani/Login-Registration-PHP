<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <title>Login</title>
</head>

<body>
    <div class="container">
        <div class="box form-box">

            <header>Login</header>
            <form action="" method="login">
                <div class="field input">
                    <label for="email">Email</label>
                    <input type="text" name="email" placeholder="Enter Your Email">
                </div>

                <div class="field input">
                    <label for="password">Password</label>
                    <input type="password" name="pass" placeholder="Enter Your Password">
                </div>

                <div class="rem">
                    <input type="checkbox" name="re-check" id="re-check">
                    <label for="re-check">Remember Me </label>
                </div>

                <div class="field">

                    <input type="submit" class="btn" name="submit" value="Login" required>
                </div>
                <div class="links">
                    Don't have account? <a href="register.php">Sign Up Now</a>
                </div>
            </form>
        </div>

    </div>
</body>

</html>