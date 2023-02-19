
<html lang="en">
<head>
    <title>Login-Spidey</title>
    <link rel="icon" type="PNG" href="img/icon.png">
    <link rel="stylesheet" href="log_style.css">
    <style>* {
    padding: 0px;
    margin: 0px;
    box-sizing: border-box;
    /* overflow: hidden; */
}

@font-face {
    font-family: marvel;
    src: url('fonts/MarvelRegular-Dj83.ttf');
}

@font-face {
    font-family: spider;
    src: url('fonts/Aku\ &\ Kamu.otf');
}

@font-face {
    font-family: meles;
    src: url('fonts/Colors\ Of\ Autumn.ttf');
}

body {
    width: 100%;
    height: 100vh;
    background: rgb(10, 10, 10);
    display: flex;
    align-items: center;
    justify-content: center;
}

header {
    width: 100%;
    height: 99%;
    /* border: 4px solid #FFF;  */
    background: url('img/log_bg.jpg') no-repeat center center/cover;
    background-attachment: fixed;
}

header nav {
    width: 90%;
    height: 12%;
    /* border: 1px solid #fff; */
    margin: auto;
    display: flex;
    justify-content: center;

}

header nav .logo {

    width: 100px;
    height: 100%;
    /* border: 1px solid #fff; */
    align-items: center;
    display: flex;
}

header nav .logo img {

    width: 70px;
    height: 70px;
    margin-top: 10px;

}

header nav ul {

    width: 100%;
    height: 100%;
    /* border: 1px solid #fff; */
    display: flex;
    align-items: center;
    justify-content: center;
}

header nav ul li {

    padding: 5px 15px;
    list-style-type: none;
    margin-top: 30px;
    display:none;
}

header nav ul li a {

    color: #fff;
    text-decoration: none;
    font-family: fantasy;
    font-size: 20px;
    transition: all .3s ease-in-out;
}

header nav ul li a:hover {

    color: #993230;
    font-size: 25px;
}

header nav .button {

    width: 150px;
    height: 100%;
    /* border: 1px solid #fff; */
    align-items: center;
    display: flex;
    justify-content: flex-end;
    margin-top: px;
}

header nav .button button {

    padding: 5px 18px;
    background: #fff;
    border: 3px solid #993230;
    color: #993230;
    font-size: 13px;
    font-weight: bold;
    border-radius: 20px;
    outline: none;
    margin-right: 30px;
    cursor: pointer;
    transition: all .3s ease-in-out;
    font-family: fantasy;
    letter-spacing: 1px;


}

header nav .button button:hover {

    background: transparent;
    border: 3px solid #fff;

}


section {

    height: 85%;
    width: 100%;
}

section .login{

    /* border: 1px solid #fff; */
    height: 100%;
    width: 50%;
    margin-left: 28%;
    align-items: center;
    justify-content: center;
}

section .login .login_box{

    border: 3px solid #993230;
    height: 95%;
    width: 400px;
    margin-left: 20%;
    margin-top: 70px;
    position: relative;
    border-radius: 50px;
    background: #447bbe; 
}

section .login .login_box form{
    
    margin-left: 2px;
    max-width: 380px;
    width: 394px;
    height: 489px;
    display: flex;
    flex-direction: column;
    align-items: center;
    margin-top: 60px;
}

section .login .login_box form .in1,.in2{

    height: 40px;
    width: 250px;
    border: 2px solid #993230;
    outline: none;
    border-radius: 30px;
    font-family: spider;
    letter-spacing: 2px;
    font-weight: lighter;
    text-align: center;
    transition: all .3s ease-in-out;
}
section .login .login_box form .in1:focus,.in2:focus{

    border: 4px solid #000;
    width: 270px;
    font-weight: bolder;
}

section .login .login_box form h1{

    font-family: spider;
    letter-spacing: 2px;
    font-weight: lighter;
    font-size: 40px;
    margin-top: -40px;

}

section .login .login_box form .in3{

    background: #993230;
    border: 2px solid #000;
    color: #000;
    font-size: 18px;
    border-radius: 20px;
    outline: none;
    cursor: pointer;
    transition: all .3s ease-in-out;
    font-family: spider;
    font-weight: lighter;
    letter-spacing: 1px;
    width: 100px;
    height: 30px;
    
}

section .login .login_box form .in3:hover{

    border: 4px solid #993230;
    background: #fff;
    width: 120px;
    height: 35px;
    color: #993230;

}

section .login .login_box form h3{
    
    font-family: spider;
    font-weight: lighter;

}
section .login .login_box form .logso{

    height: 70px;
    width: 100%;
    /* border: 2px solid #fff; */
    margin-left: 1px;
    display: flex;
    justify-content: center;
    


}

section .login .login_box form .logso img{

    height: 60px;
    transition: all .3s ease-in-out;
    
}

section .login .login_box form .logso img:hover{

    height: 70px;
}

.copy ,.info {

    clear: both;
}

.copy{

    height: 5%;
    width: 100%;
    
}

.copy p{

    color: #fff;
    font-size: 10px;
    font-family: verdana;
    margin-left: 45%;
    margin-top: 20px;
    
}

.info p{

   
    color: #fff;
    font-size: 10px;
    font-family: verdana;
    margin-left: 15%;
    margin-top: 20px;
    
}
  </style>
</head>
<body>
    <header>
        <nav>
            <div class="logo">
                <a href="index.html"><img src="img/logo.png" alt="Spidey"></a>
            </div>
            <ul>
                <li><a href="#">Movies</a></li>
                <li><a href="#">Shop</a></li>
                <li><a href="#">Help</a></li>
            </ul>
            <div class="button">
                <a href="login.php"><button>LOGIN</button></a>
             </div>
        </nav>
        <section>
            <div class="login">
                <div class="login_box">
                    <form action="connect_insert.php" method='post' id="signup-form" >
                        <h1>SIGN UP</h1><br><br>
                        <input type="text" id="uname" name="user" class="in1" placeholder="Username"><br>
                        <input type="text" id="email" name="email" class="in2" placeholder="Email"><br>
                        <input type="text" id="phone" name="phone" class="in2" placeholder="Phone"><br>
                        <input type="password"  id="password" name="pass" class="in2" placeholder="Password"><br>
                        <input type="password" id="passwordConfirm" class="in2" placeholder="Confirm-Password"><br>
                        <input type="submit" id="signup-button" class="in3" value="SignUp" name="signup"><br><br>
                        <h3>OR</h3>
                        <div class="logso">
                            <img src="img/fb.png" alt=""> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <img src="img/g+.png" alt="">
                        </div>
                        <script src="validate.js"></script>
                    </form>
                </div>
                </div>
    
            </div>
        </section>
    </header>
</body>
</html>