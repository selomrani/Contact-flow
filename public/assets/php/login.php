<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/login.css">
</head>
<body>
    <div class="container">
        <form action="login.php" method="post">
            <h1>LOGIN</h1>
            <div class="input-field">
                <input type="text" name="username" id="username" placeholder="username" required><i class='bx  bxs-user'></i>  
            </div>
            <div class="input-field">
                <input type="password" name="password" id="password" required placeholder="password"><i class='bx  bxs-lock'></i>  
            </div>
            <div class="remember">
                <label><input type="checkbox" >Remember me</label>   
            </div>
              <button class="btn" type="submit">Login</button>
              <div class="register-link">
                <p>Don't have an account? <a href="">Register</a></p>
              </div>
        </form>
    </div>
</body>
</html>