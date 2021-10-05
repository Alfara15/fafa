<html>

<head>
    <title>Welcome</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        .content {
            max-width: 1250px;
            margin: auto;
            padding: 0 30px;
            color: #FFFFFF;
          
        }

        .title {
            margin-top: 100px;
        }

        .navbar {
            position: fixed;
            z-index: 5;
            width: 100%;
            padding: 13px 0;
            transition: all 0.3s ease;
            background: #000;

        }

        .navbar .content {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .navbar .logo a {
            color: #fff;
            font-size: 30px;
            font-weight: 600;
            text-decoration: none;
        }

        .navbar .menu-list {
            display: inline-flex;
        }

        .menu-list li {
            list-style: none;
        }

        .menu-list li a {
            color: #fff;
            font-size: 15px;
            font-weight: 500;
            text-decoration: none;
            margin-left: 25px;
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .navbar .menu-list li a:hover {
            color: cyan;
        }

        .banner {
            height: 100vh;
            background-image: url(img/b.jpg);
            background-size: cover;
            position: relative;
            display: flex;
            justify-content: center;
            align-items: center;
            background-attachment: fixed;
        }

        .banner:after {
            content: "";
            display: block;
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: rgba(11, 11, 11, .6);
            font-family: "Raleway SemiBold", sans-serif;

        }

        .btn {
            color: #fff;
            z-index: 1;
            padding: 20px 25px;
            border: 3px solid #fff;
            background: #000000;
            border-radius: 37px;
            border: none;
            box-shadow: 0px 1px 8px #FFFFFF;
            cursor: pointer;
            color: black;
            font-family: "Raleway SemiBold", sans-serif;
            font-size: 24px;
            height: 60px;
            margin: 0 auto;
            margin-top: 50px;
            transition: 0.25s;
            width: 200px;
            border: #fff;
            text-align: center;
            align-items: center;
            margin-left: 150px;
        }
        .h1{
            color: #fff;
            z-index: 1;
            padding: 20px 25px;
            margin: center;
            align-items: center;
        }
        .h3{
            color: #fff;
            z-index: 1;
            padding: 20px 25px;
            margin: center;
            align-items: center;
        }

        .btn:hover {
            box-shadow: 0px 1px 18px #ffffff;
        }

        section {
            padding: 50px 0;

        }

        .about {
            padding: 40px 0;
            background-image: url(img/a.jpg);
            background-size: cover;
        }

        /* 
        .about .video {} */

        .about .title {
            font-size: 35px;
        }

        .about p {
            padding-top: 20px;
            text-align: justify;
        }

        .icon {
            color: #fff;
            font-size: 20px;
            cursor: pointer;
            display: none;
        }

        .icon.cencel-btn {
            position: absolute;
            right: 30px;
            top: 20px;
        }

        @media (max-width: 868px) {
            body.disabledScroll {
                overflow: hidden;
            }

            .icon {
                display: block;
            }

            .icon.hde {
                display: none;
            }

            .navbar .menu-list {
                position: fixed;
                top: 0;
                left: -100%;
                height: 10vh;
                width: 100%;
                max-width: 400px;
                background: #222;
                display: block;
                padding: 40px;
                text-align: center;
                transition: all 0.3s ease;
            }

            .navbar.menu-list.active {
                left: 0%;
            }

            .navbar .menu-list li {
                margin-top: 45px;
            }

            .navbar .menu-list li a {
                font-size: 23px;
            }
        }

        .container {
            background-color: #19215E;
            height: auto;
            width: 100%;
            font-family: monospace;
            color: #fff;
        }

        .footer-content {

            align-items: center;
            justify-content: center;
            flex-direction: column;
            text-align: center;
            background-color: black;
          

        }

        .footer-content img {
            margin-top: 10px;
            width: 100px;
            border-radius: 50%;
            border-color:black ;
        }

        .socials {
            list-style: none;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0.5rem 0 0.5rem 0;
        }

        .socials li {
            margin: 0 10px;
        }

        .socials a {
            text-decoration: none;
            color: white;
        }

        .socials a i {
            font-size: 1.1rem;
            transition: color .4s ease;
        }

        .socials a:hover {
            color: aqua;
        }
        
    </style>
    <link href="fontawesome/css/all.css" rel="stylesheet">
</head>

<body>
    <nav class="navbar">
        <div class="content">
            <div class="logo">
                <a>FAFA</a>
            </div>
            <ul class="menu-list">
                <div class="icon cencel-btn">
                    <i class="fas fa-times"></i>
                </div>
                <li><a href="login" style="font-size: 20px;">Login</a></li>
                <li><a href="register"style="font-size: 20px;">Register</a></li>
            </ul>
            <div class="icon menu-btn">
                <i class="fas fa-bars"></i>
            </div>
        </div>
    </nav>
    
    <div class="banner" style="font-size: 20px;">
        <div class="h1"><h1>SELAMAT DATANG | project - FAFA</h1>
        <h3 >Alfara Kristiani</h3>
        <a href="dashboard">
        <button type="submit" class="btn" style="text-align: center;color:#ffffff;" >Click Me</button>
        </a>
    </div>
    </div>
    
    <div class="about">
        <div class="content">
             <h1>QOUTES</h1>
            <p>
            "Kemarin sudah pergi. Besok belum juga datang. Kita hanya punya hari ini. Mari kita mulai." 
            </p>
            <p>
            "Jangan pernah menyerah dan yakinlah dengan apa yang kamu lakukan. Mungkin ada masa-masa sulit, tetapi kesulitan yang kamu hadapi akan membuatmu lebih bertekad untuk mencapai tujuanmu dan menang melawan segala rintangan." 
            </p>
            <p> 
            "Masa depan tergantung pada apa yang kita lakukan saat ini." 
            </p>
            <P>
            "Positif, percaya diri, dan ketekunan adalah kunci dalam hidup. Jadi, jangan pernah menyerah kepada diri sendiri." 
            </P>
            <p>"Masa lalu dan masa kini memiliki banyak hal untuk diceritakan kepada kita tentang masa depan, dan masa depan akan memberi tahu kita banyak hal tentang masa lalu." 
            </p>
            <p>"Jangan memikirkan masa lalu, jangan memimpikan masa depan, konsentrasikan pikiran pada saat sekarang."   
            </p>
            <p>
            "Janganlah melihat ke masa depan dengan mata buta. Masa yang lampau sangat berguna sebagai kaca benggala daripada masa yang akan datang."
            </p>
            <p>
            "Hadapi masa lalu tanpa penyesalan. Hadapi hari ini dengan tegar dan percaya diri. Siapkan masa depan dengan rencana yang matang dan tanpa rasa khawatir."
            </p>
            <p>
            "Kita menjadi bijak bukan oleh ingatan masa lalu kita, tetapi dengan tanggung jawab untuk masa depan kita."
            </p>
            <br>
        </div>
    </div>
          
<div class="container">
</div>

<footer>

<hr>
<div class="footer-content">
<br>
    <img src="img/fara.jpg" alt="header logo" />
    
    <ul class="socials"style="margin-top:15px;">
        <li><a href="https://www.facebook.com/AlfaraKristiani/"><i class="fab fa-facebook-f"></i></a></li>
        <li><a href="https://www.instagram.com/alfaraa_15/"><i class="fab fa-instagram"> </i></a></li>
        <li><a href="https://www.twitter.com/hashtag/AlfaraKristiani"> <i class="fab fa-twitter"></i></a></li>
    </ul>
    <div class="end"style="text-align: center;color:white;margin-top:22px;">
    <p >copyright &copy; 2021 Designed by Alfara </p><br>
    </div>
</div>

</footer>


</body>
</html>