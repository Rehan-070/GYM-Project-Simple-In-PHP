
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style2.css">
    <title>login</title>
</head>
<body>
<?php require 'mnav.php'?>
    <div class="fh5co-cover" data-stellar-background-ratio="0.5" style="background-image: url(images/id.webp);">
        <div class="container">
            <div class="box form-box">
                <header>Login</header>
                <form action="MPHP/m.php" method="post">
                    <div class="field input">
                        <label for="Email">Email</label>
                        <input type="email"  name="email" id="email" required placeholder="Enter the email ">
                    </div>
                    <div class="field input">
                        <label for="password">Password</label>
                        <input type="password"  name="password" id="password" required placeholder="Enter the password ">
                    </div>
                    <div class="field">
                        <input type="submit" class="btn btn-outline-primary me-2" value="Login" name="=submit" required >
                    </div>
                    <div class="links">
                        Don't have account ? <a href="register.php">  Sign Up Now </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>

