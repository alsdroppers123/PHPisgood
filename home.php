<!DOCTYPE html>
<html lang="en">

<head>
    <title>Spidey</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="PNG" href="img/icon.png">
    <style>
        * {
    padding: 0px;
    margin: 0px;
    box-sizing: border-box;
    
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
    background: url('img/bg.jpg') no-repeat center center/cover;
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

    width: 90%;
    height: 88%;
    /* border: 1px solid #fff; */
    margin: auto;
    display: flex;
}

section .leftside,
.rightside {

    width: 50%;
    height: 100%;
    /* border: 1px solid #fff; */
    color: #fff;
}

section .leftside .textbox {

    position: relative;
    width: 300px;
    height: auto;
    /* border: 1px solid #fff; */
    margin-top: 15%;
}

section .leftside .textbox h6 {

    font-size: 20px;
    font-family: marvel;
    font-weight: lighter;
    letter-spacing: 2px;
    margin-left: 3px;
    text-transform: uppercase;
    border: 1px solid #C41E3A;
    display: inline-block;
    background: #C41E3A;
    padding-top: 2px;
    justify-content: center;
    border-bottom: none;
}

section .leftside .textbox h1 {

    font-size: 50px;
    font-family: spider;
    font-weight: 100;
    letter-spacing: 2px;
    line-height: 32px;
}

section .leftside .textbox h4 {
    font-size: 18px;
    font-family: meles;
    font-weight: 100;
    color: #C41E3A;
    text-shadow: 0px 4px 5px #000;
    margin-top: 5px;
    left: 10%;
    position: absolute;
    top: 53px;
}

section .leftside .textbox p {

    width: 250px;
    height: 150px;
    word-break: break-all;
    font-size: 11px;
    font-family: Verdana;
    margin-top: 20px;
    font-weight: 300;
}

section .leftside .pre {

    /* border: 1px solid #fff; */
    width: 300px;
    padding-left: 50px;
    margin-left: -60px;
}


section .leftside .pre button {

    padding: 4px 15px;
    border: 3px solid #993230;
    color: #993230;
    font-size: 30px;
    font-weight: bold;
    border-radius: 20px;
    outline: none;
    margin-right: 10px;
    cursor: pointer;
    transition: all .3s ease-in-out;
    font-family: fantasy;
    letter-spacing: 3px;
}

section .leftside .pre button:hover {

    background: transparent;
    border: 3px solid #fff;
}

section .leftside .pre h2 {

    font-size: 23px;
    padding-left: 15px;
    font-family: fantasy;
    font-weight: lighter;
    display: flex;
    color: #993230;
    margin-left: 5px;
    margin-top: 10px;
}

section .rightside .video {

    border: 4px solid #C41E3A;
    width: 264px;
    height: 152px;
    margin-top: 42%;
    margin-left: 48%;
    display: flex;
    justify-content: center;
}

section .rightside .video img {

    position: absolute;
    height: 35px;
    margin-top: 50px;
    transition: all .3s ease-in-out;
}

section .rightside h1 {

    color: #fff;
    font-family: spider;
    font-size: 20px;
    text-transform: uppercase;
    position: absolute;
    font-weight: lighter;
    border: 3px solid #fff;
    border-radius: 20px;
    padding: 5px 15px;
    margin-top: auto;
    margin-top: 225px;
    margin-left: 377px;
    background: #993230;
}

section .rightside .miles {

    /* border: 2px solid #fff; */
    height: 60px;
    width: 264px;
    margin-left: 48%;
    margin-top: 20px;
}

section .rightside .miles h2 {

    font-size: 30px;
    font-family: spider;
    font-weight: 100;
    letter-spacing: 2px;
    line-height: 32px;
}

section .rightside .miles h4 {

    font-size: 18px;
    font-family: meles;
    font-weight: 100;
    color: #C41E3A;
    text-shadow: 0px 4px 5px #000;
    margin-top: -8px;
    margin-left: 12px;
    left: 10%;
    top: 53px;
}

section .rightside .miles h6 {

    font-size: 10px;
    font-family: marvel;
    font-weight: lighter;
    letter-spacing: 1px;
    margin-left: 3px;
    text-transform: uppercase;
    display: inline-block;
    background: #C41E3A;
    padding-top: 2px;
    justify-content: center;
    border-bottom: none;
}

section .rightside .miles h5 {

    font-family: spider;
    text-transform: uppercase;
    font-weight: lighter;
    border: #993230 2px solid;
    display: inline-block;
    padding: 0px 5px;
    margin-top: 10px;
    margin-left: 80px;
    border-radius: 20px;
    background: #fff;
    color: #993230;
}

section .rightside .miles .social {

    /* border: 1px solid #fff; */
    height: 60px;
    display: flex;
    transition: all .3s ease-in-out;
}


section .rightside .miles .social li {

    display: flex;
    align-items: center;
    justify-content: center;
    list-style-type: none;
}

section .rightside .miles .social li img {

    height: 30px;
    display: flex;
    margin: 33px;
    transition: all .3s ease-in-out;
    cursor: pointer;
}

section .rightside .miles .social li img:hover {

    height: 40px;
}

main {
    border-top: 4px solid #fff;
    border-bottom: 4px solid #fff;
    display: flex;
}



main .form img {

    height: 400px;
    width: 1480px;
    /* border: 4px solid #fff; */
    /* background-image: url('img/spidey.jpg'); */
    opacity: 0.5;
    display: flex;
}



main .news {

    height: 45%;
    width: 25%;
    border: 2px solid #fff;
    margin-left: 10%;
    margin-top: 40px;
    border-radius: 15px;
    background-color: #447bbe;
    justify-content: center;
    align-items: center;
    clear: both;
    position: absolute;
}



main .news h3 {

    font-family: spider;
    font-weight: lighter;
    color: #000;
    letter-spacing: 2px;
    margin-left: 80px;
    margin-top: 20px;
}

main .news img {

    height: 100px;
    margin-top: 20px;
    margin-left: 130px;
}

main .news p {

    margin-left: 20px;
    margin-right: 15px;
    font-family: verdana;
    font-weight: bold;
    font-size: 12px;
}

main .news form input {

    padding: 7px 45px;
    margin-left: 70px;
    margin-top: 30px;
    border: none;
    border-radius: 23px;
    align-items: center;
    outline: none;
    font-family: fantasy;
    font-weight: lighter;
    font-size: 15px;
    text-align: center;
    align-items: center;
}

main .news form button {

    border: 3px solid #fff;
    color: #447bbe;
    background: #993230;
    font-size: 10px;
    font-weight: lighter;
    border-radius: 12px;
    outline: none;
    margin-left: 132px;
    cursor: pointer;
    transition: all .3s ease-in-out;
    font-family: spider;
    letter-spacing: 1px;
    padding: 5px 20px;
    margin-top: 15px;
    align-items: center;
}

main .news form button:hover{

    border: 3px solid #993230;
    background: transparent;
    color: #993230;
}

main .insta{

    position: absolute;
    margin-left: 50%;
    margin-top: 250px;
    display: flex;
    /* border: 1px solid #fff; */ 
}

main .insta li{

    width: 100%;
    height: 100%;
    /* border: 1px solid #fff; */
    display: flex;
    align-items: center;
    justify-content: center;
}

main .insta li img{

    height: 70px;
    padding: 0px 30px;
    transition: all .3s ease-in-out;
    
}

main .insta li img:hover{

    height: 85px;
}


main .follow{

    position: absolute;
    margin-left: 54%;
    margin-top: 180px;
    display: flex;
    /* border: 1px solid #fff; */
}

main .follow h1{

    font-size: 40px;
    font-family: spider;
    font-weight: lighter;
    letter-spacing: 5px;
    -webkit-text-stroke: 3px #000;
    color: #fff;
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
                <a href="index.php"><img src="img/logo.png" alt="Spidey"></a>
            </div>

            <ul>
                <li><a href="movies.php">Movies</a></li>
                <li><a href="#">Shop</a></li>
                <li><a href="#">Help</a></li>
            </ul>
            <div class="button">
               <!-- <a href="login.html"><button>LOGIN</button></a> -->
            </div>
        </nav>
        <section>
            <div class="leftside">
                <div class="textbox">
                    <h6>Marvel</h6>
                    <h1>Spider-Man</h1>
                    <h4>Alsdroppers </h4>
                    <p>Spider-Man, comic-book character who was the original everyman superhero. In Spider-Man’s first
                        story, in Marvel Comics’ Amazing Fantasy, no. 15 (1962), American teenager Peter Parker, a poor
                        sickly orphan, is bitten by a radioactive spider. As a result of the bite, he gains superhuman
                        strength, speed, and agility along with the ability to cling to walls.</p>
                </div>

                <div class="pre">
                    <button>PRE-ORDER</button>
                    <h2>Your Ticket Now</h2>
                </div>
            </div>
            <div class="rightside">
                <h1>Game Preview</h1>
                <div class="video">
                    <video width="256px" height="144px" autoplay loop muted>
                        <source src="vid/vid1.mp4" type="video/mp4" alt="">
                    </video>
                </div>
                <div class="miles">
                    <h6>Marvel</h6>
                    <h2>Spider-man</h2>
                    <h4>miles morales</h4>
                    <h5>Available on </h5>
                    <div class="social">
                       <li> <img src="img/logo1.png" type="png"></li>
                       <li><img src="img/logo2.png " type="png" ></li>   
                    </div>
            </div>
        </section>
        <main>
            <div class="form"><img src="img/spidey.png" alt=""></div> 
            <div class="news">
                <h3>Subscribe for more!!</h3>
                <img src="img/bell.png" background-size="cover">
                <p>Show if you are really a spiderman fan .To prove you are one enter your email here.</p>
                <form>
                      <input type="email" required placeholder="Enter Your Email"><br>
                      <button>Subscribe</button>                  
                </form>    
            </div> 
            <div class="follow">
                <h1>FOLLOW US ON</h1>
                
            </div>
            <div class="insta">
                <li><img src="img/facebook1.png" alt=""></li>
                <li><img src="img/insta1.png" alt=""></li>
                <li><img src="img/youtube1.png" alt=""></li>
            </div>    

        </main>

        <div class="info">
            <p>Terms and Condition &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Privacy Policy &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Your California Rights &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Do Not Sell My Personal Information &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Children's Online Privacy Policy &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Licence Agreement &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Interest-based Ads</p>
        </div>

    <div class="copy">
        <p>Marvel Insider Terms  &nbsp;&nbsp;&nbsp;&nbsp; ©2022 MARVEL</p>
    </div>
        
        
    </header>
</body>

</html>