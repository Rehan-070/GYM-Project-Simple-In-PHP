
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style2.css">
    <title>Edit</title>
</head>
<body>
<?php require 'PHPE/nav.php'?>
    <div class="container">
        <div class="box form-box">
            <header>Change profile</header>
            <form action="" method="post">
                <div class="field input">
                    <label for="username">Username</label>
                    <input type="text"  name="username" id="username" autocomplete="off" placeholder="Enter the name ">
                </div>
                <div class="field input">
                    <label for="Email">Email</label>
                    <input type="email"  name="email" id="email" autocomplete="off" required placeholder="Enter the email ">
                </div>
                <div class="field input">
                    <label for="age">Age</label>
                    <input type="number"  name="age" id="age" autocomplete="off" required placeholder="Enter the age ">
                </div>
                <div class="field">
                    <input type="submit" class="btn" value="Update" name="=submit" required >
                </div>
            </form>
        </div>
    </div>
</body>
</html>