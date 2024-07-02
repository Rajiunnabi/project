<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <link rel="stylesheet" href="customerstyle.css">
    <link rel="stylesheet" href="./css/nav.css">
</head>
<body>
    <div class="hero">
        <nav>
            <img src="image/bg2.png" class="logo">
            <div class="navbox">
                <ul>
                 <li><a href="#">Home</a></li>
                 <li><a href="#">Shop</a></li>
                 <li><a href="#">Design</a></li>
                 <li><a href="#">Need Help?</a></li>
                </ul>
            </div>
            <div>
                <a href="webfront.php" class="Login-btn">Log--out</a>
            </div>
            <div class="button-container">
                <!-- Red circle button -->
                <input type="checkbox" id="toggle-box" class="toggle-checkbox">
                <label for="toggle-box" class="circle-button"></label>
                
                <!-- Box to show/hide -->
                <div class="toggle-box-content">
                    This box appears when the circle button is clicked.
                </div>
            </div>
        </nav>
    </div>
</body>
</html>
