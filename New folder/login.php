<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-compatibale" content="IE-edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Login and Registration</title>
    <link rel="stylesheet" href="logstyle.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body >
    
    <a href="webfront.php" class="back-btn">Back</a> <!-- Back Button added here -->
    <div class="wrapper">
        <span class="bg-animate"></span>
        <span class="bg-animate2"></span>

        <div class="form-box login">
            <h2 class="animation" style="--i:0; --j:21;">Login</h2>
            <form method="post" action="registercheck.php">
                <div class="input-box animation" style="--i:1; --j:22;">
                    <input type="text" name="username" required>
                    <label>Username</label>
                    <i class='bx bxs-user-circle' ></i>
                </div>

                <div class="input-box animation" style="--i:2; --j:23;">
                    <input type="text" name="email" required>
                    <label>Email</label>
                    <i class='bx bxs-envelope'></i>
                </div>

                <div class="input-box animation" style="--i:3; --j:24;">
                    <input type="password" name="password" required>
                    <label>Password</label>
                    <i class='bx bxs-lock' ></i>
                </div>
                <button type="submit" class="btn animation" style="--i:3; --j:24;" name="login">Login</button>
                <div class="logreg-link animation" style="--i:4; --j:25;">
                    <p>New to PrintCraft ? <a href="#" class="register-link">Register Now!</a></p>
                </div>
            </form>
        </div>
        <div class="info-text login">
            <h2 class="animation" style="--i:0; --j:20;">Welcome Back!</h2>
            <p class="animation" style="--i:1; --j:21;"> Let's get crafty with PrintCraft!</p>
        </div>
         
        <div class="form-box register">
            <h2 class="animation" style="--i:17; --j:0;">Sign Up</h2>
            <form method="post" action="registercheck.php">
                <div class="input-box animation" style="--i:18; --j:1;">
                    <input type="text" name="username" required>
                    <label>Username</label>
                    <i class='bx bxs-user-circle' ></i>
                </div>

                <div class="input-box animation" style="--i:19; --j:2;">
                    <input type="text" name="email" required>
                    <label>Email</label>
                    <i class='bx bxs-envelope'></i>
                </div>

                <div class="input-box animation"  style="--i:20; --j:3;">
                    <input type="password" name="password" required>
                    <label>Password</label>
                    <i class='bx bxs-lock' ></i>
                </div>
                <button type="submit" class="btn animation" style="--i:21; --j:4;" name="signup">Sign Up</button>
                <div class="logreg-link animation" style="--i:22; --j:5;">
                    <p>Got an Acoount ? <a href="#" class="login-link">Login </a></p>
                </div>
            </form>
        </div>
        
        <div class="info-text register ">
            <h2 class="animation" style="--i:17; --j:0;">Hi There!</h2>
            <p class="animation" style="--i:18; --j:1;">Let's dive into your new journey with PrintCraft!</p>
        </div>
         
    </div>
    <script src="script.js"></script>

</body>

</html>
