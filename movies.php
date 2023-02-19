
<html lang="en">
<head>
    <title>Movies-Spidey</title>
    <link rel="stylesheet" href="movies_style.css">
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
    /* align-items: center; */
    /* justify-content: center; */
}

header {
    width: 100%;
    height: 99%;
   /* border: 4px solid #FFF; */
    background: url('img/bgformov.jpg') no-repeat center center/cover;
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

    color: #000;
    font-size: 25px;
}



section{
    width: 90%;
    height: 88%;
    /* border: 1px solid #fff;  */
    margin: auto;
    display: flex;
    


}



header nav .field{

    height: 100%;
    /* border: 2px solid red; */

}

header nav  .search {

    /* border: 2px solid green; */
    height: 25px;
    margin-top: 30px;
    background: #fff;
    width: 250px;
    border-radius: 20px;
    display: flex;
    justify-content: center;

    
}
header nav .search input{

    border: none;
    outline: none;
    width: 200px;
    height: 20px;
    text-decoration: none;
    font-family: spider;
    justify-content: center;
    margin-top: 2px;
    
}

header nav .search img{

    height: 18px;
    margin-left: 4px;
    margin-top: 3px;
    /* border: 2px solid #993230; */
}

header section{

    display: flex;
    flex-direction: column;
}

header section .preview{

    /* border: 2px solid #fff;  */
    height: 50%;
    width: 100%;
    display: flex;
 
        
    
}
header section .preview .ban-1{

    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    /* border: 2px solid #fff; */
    height: 110%;
    margin-left: 50px;
}

header section .preview img{

    border: 4px solid #000;
    height: 200px;
    border-radius: 10px;
    margin-top: 10px;
    transition: all .3s ease-in-out;
}

header section .preview h3{

    color: #fff;
    font-family: spider;
    font-weight: lighter;
    letter-spacing: 1px;
    -webkit-text-stroke-width: 1px;
  -webkit-text-stroke-color: black;
    font-size: 20px;
}

header section .preview img:hover{

    height: 230px;
}


header section .preview-2 {

    /* border: 2px solid #fff; */
    height: 50%;
    width: 100%;
    display: flex;
}

header section .preview-2 .ban-1{

    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    /* border: 2px solid #fff; */
    height: 90%;
    margin-left: 50px;
}

header section .preview-2 img{

    border: 4px solid #000;
    height: 200px;
    border-radius: 10px;
    margin-top: 10px;
    transition: all .3s ease-in-out;
}

header section .preview-2 h3{

    color: #fff;
    font-family: spider;
    font-weight: lighter;
    letter-spacing: 1px;
    -webkit-text-stroke-width: 1px;
  -webkit-text-stroke-color: black;
    font-size: 20px;
}

header section .preview-2 img:hover{

    height: 230px;
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
                <li><a href="movies.html">Movies</a></li>
                <li><a href="#">Shop</a></li>
                <li><a href="#">Help</a></li>
            </ul>
        <div class="field">
            <div class="search">
                <img src="img/search.png" alt=""> &nbsp;&nbsp;&nbsp;
                <input type="text" placeholder="Search...">
            </div>
        </div>
        </nav>
        <section>
            <div class="preview">
                
                    <div class="ban-1">
                        <img src="img/1.jpg" alt=""><br>
                        <h3>Spider-Man 1 (2002)</h3>
                    </div>

                    <div class="ban-1">
                        <img src="img/2.jpg" alt=""><br>
                        <h3>Spider-Man 2 (2004)</h3>
                    </div>
                    <div class="ban-1">
                        <img src="img/3.jpg" alt=""><br>
                        <h3>Spider-Man 3 (2007)</h3>
                    </div>
                    <div class="ban-1">
                        <img src="img/4.jpg" alt=""><br>
                        <h3>The Amazing Spider-Man 1 (2012)</h3>
                    </div>
                    <div class="ban-1">
                        <img src="img/5.jpg" alt=""><br>
                        <h3>The Amazing Spider-Man 2 (2014)</h3>
                    </div>
                    <div class="ban-1">
                        <img src="img/6.jpg" alt=""><br>
                        <h3>Spider-Man Homecoming (2016)</h3>
                    </div>
                    <div class="ban-1">
                        <img src="img/7.jpg" alt=""><br>
                        <h3>Spider-Man Far From Home &nbsp;(2019)</h3>
                    </div>
                    
                
                
            </div>
            <div class="preview-2">
                <div class="ban-1">
                    <img src="img/8.jpg" alt=""><br>
                    <h3>Spider-Man No Way Home (2021)</h3>
                </div>

            </div>
        </section>

        <div class="info">
            <p>Terms and Condition &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Privacy Policy &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Your California Rights &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Do Not Sell My Personal Information &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Children's Online Privacy Policy &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Licence Agreement &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Interest-based Ads</p>
        </div>

    <div class="copy">
        <p>Marvel Insider Terms  &nbsp;&nbsp;&nbsp;&nbsp; ©2022 MARVEL</p>
    </div>
    </header>
</body>
</html>