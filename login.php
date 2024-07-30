<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/loader.css">
    <title>LoginPage</title>
</head>
<body>
<h1 class="header1">ATTENDANCE APP</h1>
<p class="para1">Welcome back! <br> Log in to unlock your attendance dashboard<br> Here we mark your attendance, update your records, and download reports </p>
    <div class="loginform">
              <p class="sign" align="center">LOGIN </p>
             <div class="inputgroup topmarginlarge">
                    <input type="text" id="txtUsername" required>
                    <label for="txtUsername" id="lblUsername">USER NAME</label>
             </div>

             <div class="inputgroup topmarginlarge">
                    <input type="password" id="txtPassword" required>
                    <label for="txtPassword" id="lblPassword">PASSWORD</label>
             </div>
             <div class="divcallforaction topmarginlarge">
                <button class="btnlogin inactivecolor" id="btnLogin">LOGIN</button>
             </div>  
             
             <div class="diverror topmarginlarge" id="diverror">
              <label class="errormessage" id="errormessage">ERROR GOES HERE</label>
             </div>
    </div>
    <div class="lockscreen" id="lockscreen">
       <div class="spinner" id="spinner"></div>
         <lable class="lblwait topmargin" id="lblwait">PLEASE WAIT</lable>
    </div>

    <span class="square square-tl"></span>
    <span class="square square-tr"></span>
    <span class="square square-bl"></span>
    <span class="square square-br"></span>
    <span class="star star1"></span>
    <span class="star star2"></span>
         <script src="js/jquery.js"></script>
        <script src="js/login.js"></script>
</body>
</html>