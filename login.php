<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login & Registration</title>
    <link rel="stylesheet" href="log1.css">
</head>
<body>
    <div class="hero">
        <div class="form-box">
            <div class="button-box">
                <div id="btn"></div>
                <button type="button" class="tog-btn" onclick="logfun()">LOGIN</button>
                <button type="button" class="tog-btn" onclick="regfun()">REGISTER</button>
            </div>
            <div class="social-icon">
                <img src="img/linkedin-icon.png">
                <img src="img/twitter-icon.png">
                <img src="img/facebook-icon.png">
            </div>
            <!-- <div class="or">
                <h6>------------------------------------ OR ------------------------------------</h6>
            </div> -->
            <form action="validation.php" method = "post">
            <div id="log" class="input-group">
                <input name="user" type="text" class="input-field" placeholder="User-Name" required>
                <input name="password" type="password" class="input-field" placeholder="Password" required>
                <input type="checkbox" class="check-box"><span>Remember Password</span>
                <button type="submit" class="submit-btn">LOGIN</button>
            </div>
            </form>

            <form action="registration.php" method = "post">
            <div id="reg" class="input-group">
                <input name="user" type="text" class="input-field" placeholder="User_Name" required>
                <input name="password" type="password" class="input-field" placeholder="Password" required>
                <input name="email" type="email" class="input-field" placeholder="Email" required>
                <input type="checkbox" class="check-box"><span>I agree to the T&C</span>
                <button type="submit" class="submit-btn">REGISTER</button>
            </div>
            </form>

        </div> 
    </div>

    <script>
    var x = document.getElementById("log");
    var y = document.getElementById("reg");
    var z = document.getElementById("btn");
    function regfun(){
        x.style.left = "-400px";
        y.style.left = "50px";
        z.style.left = "110px";
    }
    function logfun(){
        x.style.left = "50px";
        y.style.left = "450px";
        z.style.left = "0px";
    }
    function login(){


    }
    </script>



</body>
</html>