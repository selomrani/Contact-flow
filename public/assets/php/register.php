<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/login.css">
</head>

<body>
    <div class="container">
        <form action="login.php" method="post">
            <h1>Register</h1>
            <div class="input-field">
                <input type="text" name="username" id="username" placeholder="username" required><i class='bx  bxs-user'></i>
            </div>
            <div class="input-field">
                <input type="email" name="email" id="email" required placeholder="email"><i class='bx  bxs-envelope'></i> 
            </div>
            <div class="input-field">
                <input type="password" name="password" id="password" required placeholder="password"><i class='bx  bxs-lock'></i>
            </div>
            <div class="input-field">
                <input type="password" name="password" id="password" required placeholder="confirm password"><i class='bx  bxs-lock'></i>
            </div>
            <div class="input-field">
                <input type="tel" name="phone" id="phone" placeholder="Phone number (optional)"><i class='bx  bxs-phone'></i> 
            </div>
            <button class="btn" type="submit">Register</button>
            <div class="register-link">
                <p>Already have an account?<a href="login.php">Login</a></p>
            </div>
        </form>
    </div>
</body>

</html>